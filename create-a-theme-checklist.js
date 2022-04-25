const theme = process.argv[ 2 ];

if ( ! theme ) {
	console.error( '\x1b[41m', 'You must specify a theme!' );
	return;
}

const { Octokit } = require( 'octokit' );
const octokit = new Octokit( {
	auth: `PUT YOUR ACCESS TOKEN HERE`,
} );

function sleep( ms ) {
	return new Promise( ( resolve ) => {
		setTimeout( resolve, ms );
	} );
}

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
		'Block Patterns',
		'Create Base Theme',
		'Styles: Colors',
		'Styles: Typography — Fonts & Weights',
		'Styles: Typography — Sizes & Line Height',
		'Styles: Links',
		'Styles: Buttons',
		'Styles: Layout',
		'Styles: Comments',
		'Styles: Navigation',
		'Styles: Quote',
		'Styles: Variations',
		'Templates: Search, Category, Tag',
		'Templates: 404',
		'Templates: Single',
		'Templates: Page',
		'Templates: Index',
		'Templates: Header template part',
		'Templates: Footer template part',
		'Pre-launch: Screenshot, readme.txt & description',
		'Pre-launch: Demo Site',
		'Pre-launch: Showcase Entry',
		'Pre-launch: Headstart Annotation',
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
