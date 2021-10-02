const fs = require( 'fs' );
const chokidar = require( 'chokidar' );
const merge = require( 'deepmerge' );
const childThemeName = process.argv[ 2 ];
const watch = 'watch' === process.argv[ 3 ];
const parentThemeJsonFileName = __dirname + '/theme.json';
const childThemeJsonFileName =
	__dirname + '/../' + childThemeName + '/child-theme.json';

const keysToMerge = [ 'customTemplates' ];

const overwriteMerge = ( destinationArray, sourceArray, options ) => {
	return sourceArray;
};

const combineMerge = ( destinationArray, sourceArray, options ) =>
	destinationArray.concat( sourceArray );

const combineCustomTemplates = ( key ) => {
	if ( keysToMerge.indexOf( key ) > -1 ) {
		return combineMerge;
	}
};

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
				customMerge: combineCustomTemplates,
				arrayMerge: overwriteMerge,
			} );

		fs.writeFile(
			'../' + childThemeName + '/theme.json',
			JSON.stringify( mergedThemeJson, null, '\t' ),
			'utf8',
			() => {
				console.log(
					'\x1b[32m' +
						childThemeName +
						'/theme.json created successfully.'
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
