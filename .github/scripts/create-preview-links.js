/*
 * This function creates a WordPress Playground blueprint JSON string for a theme.
 *
 * @param {string} themeSlug - The slug of the theme to create a blueprint for.
 * @param {string} branch - The branch where the theme changes are located.
 * @returns {string} - A JSON string representing the blueprint.
 */
function createBlueprint(themeSlug, branch) {
	const template = {
		steps: [
			{
				step: 'login',
				username: 'admin',
				password: 'password',
			},
			{
				step: 'installTheme',
				themeZipFile: {
					resource: 'url',
					url: `https://github-proxy.com/proxy.php?action=partial&repo=Automattic/themes&directory=${themeSlug}&branch=${branch}`,
				},
			},
			{
				step: 'activateTheme',
				themeFolderName: themeSlug,
			},
		],
	};

	return JSON.stringify(template);
}

/*
 * This function creates a comment on a PR with preview links for the changed themes.
 * It is used by `preview-theme` workflow.
 *
 * @param {object} github - An authenticated instance of the GitHub API.
 * @param {object} context - The context of the event that triggered the action.
 * @param {string} changedThemeSlugs - A space-separated string of theme slugs that have changed.
 */
async function createPreviewLinksComment(github, context, changedThemeSlugs) {
	const changedThemes = changedThemeSlugs.split(',');
	const previewLinks = changedThemes
		.map((theme) => {
			const [themeName, themeDir] = theme.split(':');
			const themeSlug = themeDir.split('/')[0];
			const parentThemeSlug = themeName.split('_childof_')[1];
			return `- [Preview changes for **${
				themeName.split('_childof_')[0]
			}**](https://playground.wordpress.net/#${createBlueprint(
				themeSlug,
				context.payload.pull_request.head.ref
			)})${parentThemeSlug ? ` (child of **${parentThemeSlug}**)` : ''}`;
		})
		.join('\n');

	const includesChildThemes = previewLinks.includes('child of');

	const comment = `
I've detected changes to the following themes in this PR: ${changedThemes
		.map(
			(changedThemes) => changedThemes.split(':')[0].split('_childof_')[0]
		)
		.join(', ')}.

You can preview these changes by following the links below:

${previewLinks}

I will update this comment with the latest preview links as you push more changes to this PR.
**⚠️ Note:** The preview sites are created using [WordPress Playground](https://wordpress.org/playground/). You can add content, edit settings, and test the themes as you would on a real site, but please note that changes are not saved between sessions.
${
	includesChildThemes
		? '\n**⚠️ Note:** Child themes are dependent on their parent themes. You will have to install the parent theme as well for the preview to work correctly.'
		: ''
}
`;

	const repoData = {
		owner: context.repo.owner,
		repo: context.repo.repo,
	};

	// Check if a comment already exists and update it if it does
	const { data: comments } = await github.rest.issues.listComments({
		issue_number: context.payload.pull_request.number,
		...repoData,
	});
	const existingComment = comments.find(
		(comment) =>
			comment.user.login === 'github-actions[bot]' &&
			comment.body.startsWith('### Preview changes')
	);
	const commentObject = {
		body: `### Preview changes\n${comment}`,
		...repoData,
	};

	if (existingComment) {
		await github.rest.issues.updateComment({
			comment_id: existingComment.id,
			...commentObject,
		});
		return;
	}

	// Create a new comment if one doesn't exist
	github.rest.issues.createComment({
		issue_number: context.payload.pull_request.number,
		...commentObject,
	});
}

module.exports = createPreviewLinksComment;
