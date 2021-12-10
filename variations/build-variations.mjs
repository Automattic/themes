import fs from 'fs-extra';
import deepmerge from 'deepmerge';
import { dirname } from 'path';
import { fileURLToPath } from 'url';

const localpath = dirname( fileURLToPath( import.meta.url ) );

(async function start() {
	let args = process.argv.slice(2);
	let source = args?.[0];
	let variation = args?.[1];
	if ( source && variation ) {
		return await buildVariation(source, variation);
	}
	return await buildAllVariations();
})();

async function buildAllVariations(){
	//TODO: Make this smart
	await buildVariation('geologist', 'geologist-blue');
	await buildVariation('geologist', 'geologist-yellow');
	await buildVariation('geologist', 'geologist-cream');
	await buildVariation('geologist', 'geologist-slate');
}

async function buildVariation(source, variation) {
	const srcDir = localpath + '/../' + source;
	const srcVariationDir = localpath + '/' + source + '/' + variation;
	const destDir = localpath + '/../' + variation;

	console.log( `Copying the source ${source} to the variation ${variation}` );

	try {

		// First empty the old directory.
		await fs.emptyDir( destDir );

		// Then copy the source directory.
		await fs.copy( srcDir, destDir );

		// remove unneeded resources
		await fs.remove( destDir + '/sass');
		await fs.remove( destDir + '/node_modules' );

		// copy the variation directory.
		await fs.copy( srcVariationDir, destDir );

		// copy the readme
		await fs.copy( localpath + '/variation-readme.md', destDir + '/variation-readme.md' );

		// merge the theme.json files
		const srcJsonFile = await fs.readFile( srcDir + '/theme.json', 'utf8' );
		const srcVariationJsonFile = await fs.readFile( srcVariationDir + '/theme.json', 'utf8' );
		const srcJson = JSON.parse( srcJsonFile );
		const srcVariationJson = JSON.parse( srcVariationJsonFile );
		const mergedJson = deepmerge(srcJson, srcVariationJson, {
			arrayMerge: ( dest, source ) => source
		});
		await fs.writeFile ( destDir + '/theme.json', JSON.stringify( mergedJson, null, '\t' ), 'utf8' );

		console.log('Finished sucessfully.\n\n');
	}
	catch (err){
		console.log('ERROR: ', err, '\n\n');
	}
}
const overwriteMerge = ( destinationArray, sourceArray, options ) => {
	return sourceArray;
};