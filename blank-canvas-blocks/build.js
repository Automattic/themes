const fs = require( 'fs' );
const chokidar = require( 'chokidar' );
const merge = require( 'deepmerge' );
const childThemeName = process.argv[ 2 ];
const watch = 'watch' === process.argv[ 3 ];
const parentThemeJsonFileName = __dirname + '/experimental-theme.json';
const childThemeJsonFileName =
	__dirname + '/../' + childThemeName + '/child-experimental-theme.json';

const overwriteMerge = ( destinationArray, sourceArray, options ) =>
	sourceArray;

const buildChildTheme = () => {
	try {
		const parentThemeJsonFile = fs.readFileSync(
				parentThemeJsonFileName,
				'utf8'
			),
			childThemeJsonFile = fs.readFileSync(
				childThemeJsonFileName,
				'utf8'
			),
			parentThemeJson = JSON.parse( parentThemeJsonFile ),
			childThemeJson = JSON.parse( childThemeJsonFile ),
			mergedThemeJson = merge( parentThemeJson, childThemeJson, {
				arrayMerge: overwriteMerge,
			} );

		fs.writeFile(
			'../' + childThemeName + '/experimental-theme.json',
			JSON.stringify( mergedThemeJson, null, '\t' ),
			'utf8',
			() => {
				console.log(
					'\x1b[32m' +
						childThemeName +
						'/experimental-theme.json created successfully.'
				);
			}
		);
	} catch ( error ) {
		console.error( '\x1b[31m' + error );
	}
};

if ( ! fs.existsSync( childThemeJsonFileName ) ) {
	console.log( '\x1b[31m' + childThemeJsonFileName + ' not found :(' );
	return;
}

if ( watch ) {
	chokidar
		.watch( [ parentThemeJsonFileName, childThemeJsonFileName ] )
		.on( 'all', buildChildTheme );
} else {
	buildChildTheme();
}
