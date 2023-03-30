import inquirer from 'inquirer';
import colors from 'colors';
import { 
    executeOnSandbox,
    cleanSandbox,
    sandboxPublicThemesFolder,
    landChanges,
    createPhabricatorDiff,
    deployThemes
} from './theme-helper-functions.mjs';

// Variables
const glotPressScript = '~/public_html/bin/i18n/create-glotpress-project-for-theme.php';

(async () => {
    await launchTheme();
})();

async function launchTheme() {
	// Step 0: Launch banners and prompts
	initLaunch();
	const {isReady} = await inquirer.prompt({
		type: 'confirm',
		name: 'isReady',
		message: 'Ready to launch a theme?',
		default: false,
	});
	if (!isReady) {
		return abortLaunch();
	}

    // Step 1: Collect details
	console.log(`\n ${colors.bgGreen.bold('Step 1:')}`);
	console.log(colors.bold('\n Let\'s get started with few details.'), '\n');
	const { themeSlug, demoSite, username } = await getThemeInfo();

    // Step 2: Deploy theme
	console.log(`\n ${colors.bgGreen.bold('Step 2:')} \n`);
	console.log(`\n ${colors.yellow('Deploy theme on WP.com')} \n`);
    const {deployTheme} = await inquirer.prompt({
		type: 'confirm',
		name: 'isReady',
		message: `Let's deploy the theme [${themeSlug}] on WP.com?`,
		default: false,
	});

    if (deployTheme) {
        await cleanSandbox();
        await deployThemes([themeSlug]);
        await buildComZips([themeSlug]);
    } else {
        console.log(color.yellow('\n Deployment skipped. Assuming theme deployed already.'));
    }

    // Step 3: Complete demo site checklist
	console.log(`\n ${colors.bgGreen.bold('Step 3:')} \n`);
	let success = await setupDemoSite({demoSite, themeSlug, username});
    if (!success) return abortLaunch();

    // Step 4: Create GlotPress project
	console.log(`\n ${colors.bgGreen.bold('Step 4:')} \n`);
    success = await createGlotPress();
	if (!success) return abortLaunch();

    // Step 5: Theme Showcase checklist
	console.log(`\n ${colors.bgGreen.bold('Step 5:')} \n`);
	console.log(`\n ${colors.yellow('Theme Showcase.')} \n`);
    success = await createThemeShowcase();
	if (!success) return abortLaunch();

    // Step 7: Communicate about theme launch
	console.log(`\n ${colors.bgGreen.bold('Step 7:')} \n`);
    console.log(`\n ${colors.yellow('Communicate to Happiness about theme launch.')} \n`);
    success = await comminicateAboutLaunch();
	if (!success) return abortLaunch();

    // Step 🥳: Celebrate Launch
    celebrateLaunch();
}


function initLaunch() {
    console.log(
        colors.green.bold(`
                                              
       |       ___                            
      / \\      | |                            
     / _ \\     |t|     THEME LAUNCH CENTER    
    | a8c |====|h|                            
    |'._.'|    |e|     complete the launch    
    |     |    |m|       status checks to     
  ,'|  |  |\`.  |e|     begin the countdown    
 /  |  |  |  \\ |s|                            
 |,-'--|--'-.| | |                            
_______________|_|____________________________
`,
    ));
}

function abortLaunch() {
    console.log(colors.red.bold(`
    ---------------
         Oops!
    Launch Aborted!
    ---------------
    `));
}

function celebrateLaunch() {
    console.log(colors.green(`\n
    Well done! All set for the launch.  
        Let the countdown begin\n
  When it's time ${colors.bold('network enable')} the theme,
        and let the world see it.\n
    `));

	console.log('When it\'s time network enable the theme.');
}

async function getThemeInfo() {
	const { themeSlug, demoSite, username } = await inquirer.prompt([{
		type: 'text',
		name: 'themeSlug',
		message: 'Enter the theme name',
		validate: value => value && (/^[a-z0-9]+$/gm).test(value) ? true : 'Give a valid theme name.',
		default: 'ex: pixl'
	}, {
		type: 'text',
		name: 'demoSite',
		message: 'Enter the theme demo site',
		validate: value => value && (/^[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?$/gm).test(value) ? true : 'Give a valid site: demosite.wordpress.com',
		default: `ex: demo.wordpress.com`,
	}, {
		type: 'text',
		name: 'username',
		message: 'Enter your WP.com username',
		validate: value => value && (/^[a-z0-9]+$/gm).test(value) ? true : 'Give a valid username.',
	}]);

    return { themeSlug, demoSite, username };
}

async function setupDemoSite({demoSite, themeSlug, username}) {
    const {configDemoSite} = await inquirer.prompt({
		type: 'confirm',
		name: 'configDemoSite',
		message: 'Ready to configure demo site?',
		default: false,
	});

	if (!configDemoSite) {
		return abortLaunch();
	}

	// activate theme
	console.log(`\nActivating the theme [${themeSlug}] on demo site.\n`);
	await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		wp theme activate pub/${themeSlug} --url=${demoSite};
		exit;
	`, false, true).then(() => {
		console.log(colors.green.bold('Theme activated.\n'));
	}).catch(ex => {
		console.log(colors.red.bold('ERROR: failed to activate the theme. Try manually.'), ex, '\n\n');
	})

	const { stickers } = await inquirer.prompt({
		type: 'confirm',
		name: 'stickers',
		message: 'Let\'s add blog stickers the demo site?',
		default: false,
	});

	if (stickers) {
		console.log('\nAdding blog stickers to the demo site.\n')
		await executeOnSandbox(`
			wp blog-stickers add --sticker=theme-demo-site --who=${username} --url=${demoSite} --note=[pub/${themeSlug}]
		`, false, true).then(() => {
        	console.log(colors.green.bold('\nStickers added.\n'));
        }).catch(ex => {
        	console.log(colors.red.bold('ERROR: failed to add blog stickers. Try manually.'), ex, '\n\n');
        })
	}

	console.log(`\n open the url: ${colors.cyan.underline(`https://${demoSite}`)} and complete the following.\n`);

	const {blueFlag} = await inquirer.prompt({
		type: 'confirm',
		name: 'blueFlag',
		message: 'Add blue flag to the demo site and confirm.',
		default: false,
	});

    if (!blueFlag) {
        console.log(colors.red('Setting blue flag on demo site is required. \nWithout it design picker will fail. \nMake sure it is enabled.'));
    }

	console.log(`\n open the url: ${colors.cyan.underline(`https://wordpress.com/settings/general/${demoSite}`)}\n and complete the following.\n`);

	await inquirer.prompt({
		type: 'confirm',
		name: 'noIndex',
		message: 'Discourage search engines from indexing demo site',
		default: false,
	}, {
		type: 'confirm',
		name: 'disableComments',
		message: 'Disable comments for the demo site and confirm.',
		default: false,
	}, {
		type: 'confirm',
		name: 'demoContent',
		message: 'Make sure demo site is setup with right content and confirm.',
		default: false,
	});

    return true;
}

async function createGlotPress() {
    const {glotPress} = await inquirer.prompt({
		type: 'confirm',
		name: 'glotPress',
		message: 'Do you want to create GlotPress project for the theme?',
		default: false,
	});

	if (!glotPress) {
        console.log(colors.red('GlotPress project creation skipped.'));
        return true;
    }

    await cleanSandbox();

    await executeOnSandbox(`
        cd ${sandboxPublicThemesFolder};
        php ${glotPressScript} ${sandboxPublicThemesFolder}/${themeSlug};
    `, true);

    const diffUrl = await createPhabricatorDiff(`create GlotPress project for the Theme: ${themeSlug}`, 'glotpress');
    
    console.clear();
    const {landGlotPress} = await inquirer.prompt([{
        type: 'confirm',
        message: 'You are about to land deploy GlotPres project on wpcom. Are you ready to continue?',
        name: "continue",
        default: false
    }]);

    if (!landGlotPress) {
        console.log(colors.red('GlotPress project creation but not landed.'));
        return true;
    }

    const diffId = diffUrl.split('a8c.com/')[1];
    await landChanges(diffId);
    await executeOnSandbox(`deploy pub ${themeSlug};exit;`, true, true);
    return true;
}

async function createThemeShowcase() {
    const {showcase} = await inquirer.prompt({
		type: 'confirm',
		name: 'showcase',
		message: 'Have you created and published a showcase for the theme?',
		default: false,
	});

	if (!showcase) {
		console.log(`open the url: ${colors.underline('https://theme.wordpress.com/wp-admin/edit.php?post_type=showcase_theme')} to create/publish theme showcase post.`)

		await inquirer.prompt({
			type: 'confirm',
			name: 'showcase',
			message: 'Have you published the theme showcase?',
			default: false,
		});
	}

    // Validate showcase
    console.log(`\n Validating showcase. \n`);
    await executeOnSandbox(`
        wp theme-showcase audit pub/${themeSlug}
    `, true, true).then(() => {
        console.log(`\n Validation complete. Fix errors if any. \n`);
    }).catch((ex) => {
        console.log(colors.red(`\n Theme showcase validation failed. \n`), ex);
    });

    // Re-index elastic search
    console.log(`\n Re-indexing elastic search. \n`);
    await executeOnSandbox(`
        wp es-index bulk --url=theme.wordpress.com --name=${themeSlug} --run_async
    `, true, true).catch((ex) => {
        console.log(colors.red(`\n Re-indexing failed. \n`), ex);
    });

    return true;
}

async function comminicateAboutLaunch() {

	console.log(`open the url: ${colors.underline('https://wpcomhappy.wordpress.com')} and create new P2 post.`);
	console.log(`Use this post as reference: ${colors.underline('https://wpcomhappy.wordpress.com/2023/03/22/heads-up-launching-new-theme-paimio/')}`);

	await inquirer.prompt({
		type: 'confirm',
		name: 'showcase',
		message: 'Have you created the post and published on WP.com Happiness P2.',
		default: false,
	});

    return true;
}