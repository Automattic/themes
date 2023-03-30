import { spawn } from 'child_process';
import progressbar from 'string-progressbar';

const isWin = process.platform === 'win32';
const remoteSSH = 'wpcom-sandbox';
export const sandboxPublicThemesFolder = '/home/wpdev/public_html/wp-content/themes/pub';
export const sandboxPremiumThemesFolder = '/home/wpdev/public_html/wp-content/themes/premium';
export const sandboxRootFolder = '/home/wpdev/public_html/';
export const arcCmd = `/usr/local/bin/arc`;

/*
 Execute a command on the sandbox.
 Expects the following to be configured in your ~/.ssh/config file:

Host wpcom-sandbox
	User wpdev
	HostName SANDBOXURL.wordpress.com
	ForwardAgent yes
*/
export function executeOnSandbox(command, logResponse, enablePsudoterminal) {
	if (enablePsudoterminal) {
		return executeCommand(`ssh -tt -A ${remoteSSH} << EOF
${command}
EOF`, logResponse);
	}

	return executeCommand(`ssh -TA ${remoteSSH} << EOF
${command}
EOF`, logResponse);
}

/*
 Execute a command locally.
*/
export async function executeCommand(command, logResponse) {
	const timeout = 2*60*1000; // 2 min

	return new Promise((resolove, reject) => {
		let child;
		let response = '';
		let errResponse = '';

		if (isWin) {
			child = spawn('cmd.exe', ['/s', '/c', '"' + command + '"'], {
				windowsVerbatimArguments: true,
				stdio: [process.stdin, 'pipe', 'pipe'],
				detached: true,
			})
		} else {
			child = spawn(process.env.SHELL, ['-c', command], {
				stdio: [process.stdin, 'pipe', 'pipe'],
				detached: true,
			});
		}

		var timer = setTimeout(() => {
			try {
				process.kill(-child.pid, 'SIGKILL');
			} catch (e) {
				console.log('Cannot kill process');
			}
		}, timeout);

		child.stdout.on('data', (data) => {
			response += data;
			if (logResponse) {
				console.log(data.toString());
			}
		});

		child.stderr.on('data', (data) => {
			errResponse += data;
			if (logResponse) {
				console.log(data.toString());
			}
		});

		child.on('exit', (code) => {
			clearTimeout(timer)
			if (code !== 0) {
				reject(errResponse.trim());
			}
			resolove(response.trim());
		});
	});
}

/*
 Clean the theme sandbox.
 checkout origin/trunk and ensure it's up-to-date.
 Remove any other changes.
*/
export async function cleanSandbox(type = 'public') {
	const sandboxFolder = type === 'premium' ? sandboxPremiumThemesFolder : 
							type === 'all' ? sandboxRootFolder : 
								sandboxPublicThemesFolder;

	console.log(`Cleaning the Themes (${type}) Sandbox`);
	await executeOnSandbox(`
		cd ${sandboxFolder};
		git reset --hard HEAD;
		git clean -fd;
		git checkout trunk;
		git pull;
		echo;
		git status
	`, true);
	console.log('All done cleaning.');
}

/*
 Land the changes from the given diff ID.  This is the "production merge".
*/
export async function landChanges(diffId) {
	await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		${arcCmd} patch ${diffId};
		${arcCmd} land;
		exit;
	`, true, true);
}

/*
 Create a Phabricator diff with the given message based on the contents currently in the sandbox.
 Open the phabricator diff in your browser.
 Provide the URL of the phabricator diff.
*/
export async function createPhabricatorDiff(commitMessage, branch = 'deploy') {

	console.log('creating Phabricator Diff');

	let result = await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		git branch -D ${branch}
		git checkout -b ${branch}
		git add --all
		git commit -m "${commitMessage}"
		arc diff --create --verbatim
	`, true);

	let phabricatorUrl = getPhabricatorUrlFromResponse(result);

	console.log('Diff Created at: ', phabricatorUrl);

	if (phabricatorUrl) {
		open(phabricatorUrl);
	}

	return phabricatorUrl;
}

/*
 Utility to pull the Phabricator URL from the diff creation command.
 Used by createPhabricatorDiff
*/
function getPhabricatorUrlFromResponse(response) {
	return response
		?.split('\n')
		?.find(item => {
			return item.includes('Revision URI: ');
		})
		?.split("Revision URI: ")[1];
}

export function startProgress(length) {
	let current = 0;
	function render() {
		const [progress, percentage] = progressbar.filledBar(length, current);
		console.log('\nProgress:', [progress, Math.round(percentage*100)/100], `${current}/${length}\n`);
	}

	render();
	return {
		increment() {
			current++;
			render();
		}
	};
}

/*
 Deploy a collection of themes.
 Part of the push-button-deploy process.
 Can also be triggered to deploy a single theme with the command:
 node ./theme-utils.mjs deploy-theme THEMENAME
*/
export async function deployThemes(themes) {

	let response;
	const failedThemes = [];
	const progress = startProgress(themes.length);

	for (let theme of themes) {

		console.log(`Deploying ${theme}`);

		let deploySuccess = false;
		let attempt = 0;

		while (!deploySuccess && attempt <= 2) {

			attempt++;
			console.log(`\nattempt #${attempt}\n\n`);

			try {
				response = await executeOnSandbox(`deploy pub ${theme};exit;`, true, true);
				deploySuccess = response.includes('successfully deployed to');
			} catch (error) {
				deploySuccess = false
			}

			if (!deploySuccess) {
				console.log('Deploy was not successful.  Trying again in 10 seconds...');
				await new Promise(resolve => setTimeout(resolve, 10000));
			}
			else {
				console.log("Deploy successful.");
			}

		}

		if (!deploySuccess) {
			console.log(`${theme} was not sucessfully deployed and should be deployed manually.`);
			failedThemes.push(theme);
		}

		progress.increment();
	}

	if (failedThemes.length) {
		const tableConfig = {
			columnDefault: {
				width: 40,
			},
			header: {
				alignment: 'center',
				content: `Following themes are not deployed.`,
			}
		};
		console.log(table(failedThemes.map(t => [t]), tableConfig));
	}
}

export async function buildComZips(themes) {
	console.log(`Building dotcom .zip files`);
	const progress = startProgress(themes.length);
	const failedThemes = []
	for (let theme of themes) {
		try {
			await buildComZip(theme);
		} catch (err) {
			console.log(`There was an error building dotcom zip for ${theme}. ${err}`);
			failedThemes.push(theme);
		}
		progress.increment();
	}

	if (failedThemes.length) {
		const tableConfig = {
			columnDefault: {
				width: 40,
			},
			header: {
				alignment: 'center',
				content: `There was an error building dotcom zip for following themes.`,
			}
		};
		console.log(table(failedThemes.map(t => [t]), tableConfig));
	}
}

/*
 Build .zip file for .com
*/
async function buildComZip(themeSlug) {

	console.log(`Building ${themeSlug} .zip`);

	let styleCss = fs.readFileSync(`${themeSlug}/style.css`, 'utf8');

	// Gets the theme version (Version:) and minimum WP version (Tested up to:) from the theme's style.css
	let themeVersion = getThemeMetadata(styleCss, 'Version');
	let wpVersionCompat = getThemeMetadata(styleCss, 'Requires at least');

	if (themeVersion && wpVersionCompat) {
		await executeOnSandbox(`php ${sandboxRootFolder}bin/themes/theme-downloads/build-theme-zip.php --stylesheet=pub/${themeSlug} --themeversion=${themeVersion} --wpversioncompat=${wpVersionCompat};`, true);
	}
	else {
		console.log('Unable to build theme .zip.');
		if (!themeVersion) {
			console.log('Could not find theme version (Version:) in the theme style.css.');
		}
		if (!wpVersionCompat) {
			console.log('Could not find WP compat version (Tested up to:) in the theme style.css.');
		}
		console.log('Please build the .zip file for the theme manually.', themeSlug);
		open('https://mc.a8c.com/themes/downloads/');
	}
}