const fs = require('fs');
const chokidar = require('chokidar');
const merge = require('deepmerge');
const childThemeName = process.argv[ 2 ];
const watch = '--watch' === process.argv[ 3 ];
const childThemeJsonFileName = '../' + childThemeName + '/child-experimental-theme.json';

const buildChildTheme = ()=>{
	try {
		const parentThemeJsonFile = fs.readFileSync( 'experimental-theme.json', 'utf8' );
		const childThemeJsonFile  = fs.readFileSync( childThemeJsonFileName, 'utf8' );
		parentThemeJson          = JSON.parse( parentThemeJsonFile );
		childThemeJson           = JSON.parse( childThemeJsonFile );
		mergedThemeJson          = merge( parentThemeJson, childThemeJson );
		fs.writeFile( '../' + childThemeName + '/experimental-theme.json', JSON.stringify( mergedThemeJson, null, '\t' ), 'utf8', () => {
			console.log( "\x1b[32m" + childThemeName + "/experimental-theme.json created successfully." );
		} )

	} catch ( error ) {
		console.error( "\x1b[41m" + error );
	}
};

if(watch) {
	chokidar.watch( childThemeJsonFileName ).on( 'all', buildChildTheme);
}

else {
	buildChildTheme();
}
