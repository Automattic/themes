const theme = process.argv[ 2 ];

if ( ! theme ) {
	console.error( '\x1b[41m', 'You must specify a theme!' );
	return;
}

const { Octokit } = require( 'octokit' );
const octokit = new Octokit( { auth: `PUT YOUR TOKEN HERE` } );

async function createLabel() {
	try {
		return await octokit.request( 'POST /repos/Automattic/themes/labels', {
			name: '[Theme] ' + theme,
			color: 'c1f4a1',
			description: 'Automatically generated label for ' + theme + '.',
		} );
	} catch ( error ) {
		console.log( error );
	}
}

async function createMilestone() {
	try {
		return await octokit.request(
			'POST /repos/Automattic/themes/milestones',
			{
				title: theme,
				description:
					'Automatically generated milestone for ' + theme + '.',
			}
		);
	} catch ( error ) {
		console.error( '\x1b[41m', 'Milestone already created.' );
	}
}

async function createIssues( milestoneNumber ) {
	const issues = [
		'Create base theme from boilerplate',
		'Create a demo site on dotcom',
		'theme.json: Typography settings',
		'theme.json: Color palette',
		'theme.json: Alternative color palettes',
		'theme.json: Margin/spacing settings',
		'Templates: Page templates - Index',
		'Templates: Page templates - Search',
		'Templates: Page templates - 404',
		'Templates: Page templates - Archive',
		'Templates: Header template part (including mobile)',
		'Templates: Footer template part (including mobile)',
		'Block patterns (if needed)',
		'Block styles (if needed)',
		'Comment form styles (dotcom and dotorg) (if needed)',
		'Navigation (if needed)',
		'Core block settings (if needed)',
		'Third party block settings (Jetpack, Woo, etc.) (if needed)',
	];
	issues.forEach( async ( issue ) => {
		try {
			return await octokit
				.request( 'POST /repos/Automattic/themes/issues', {
					title: theme + ': ' + issue,
					labels: [ '[Theme] ' + theme ],
					milestone: milestoneNumber,
				} )
				.then( ( issueData ) => {
					addIssueToProject( issueData );
				} );
		} catch ( error ) {
			console.log( error );
		}
	} );
}

async function addIssueToProject( issueData ) {
	try {
		return await octokit.request( 'POST /projects/columns/11021541/cards', {
			note: null,
			content_id: issueData.data.id,
			content_url: issueData.data.url,
			content_type: 'Issue',
			mediaType: {
				previews: [ 'inertia' ],
			},
		} );
	} catch ( error ) {
		console.log( error );
	}
}

createLabel().then( () => {
	createMilestone().then( ( milestoneData ) => {
		const milestoneNumber = milestoneData.data.number;
		createIssues( milestoneNumber );
	} );
} );
