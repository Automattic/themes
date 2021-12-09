
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

}