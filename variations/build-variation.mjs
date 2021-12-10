import fs from 'fs-extra';

(async function start() {
	let args = process.argv.slice(2);
	let source = args?.[0];
	let variation = args?.[1];
	if ( source && variation ) {
		return buildVariation(source, variation);
	}
	return buildAllVariations();
})();

function buildAllVariations(){
	//TODO: Make this smart
	buildVariation('geologist', 'geologist-blue');
	buildVariation('geologist', 'geologist-yellow');
}

function buildVariation(source, variation) {
	const srcDir = '../' + source;
	const destDir = '../' + variation;

	// First empty the old directory.
	fs.emptyDir( destDir )
		.then( () => {
			// Then copy the source directory.
			fs.copy( srcDir, destDir )
				.then( () => {
					console.log( 'Copied the source.' );

					fs.readdir( source + '/' + variation, ( err, files ) => {
						files.forEach( file => {
							console.log( file );
							const fileToCopy = source + '/' + variation + '/' + file;
							fs.copy( fileToCopy, destDir + '/' + file )
								.then(() => console.log( 'Copied ' + fileToCopy ) )
								.catch(err => console.error(err) );
						});
					});
				 } )
				.catch( err => console.error( err ) );
	  	} )
		.catch( err => {
			console.error( err )
		} );
}
