module.exports = {
	plugins: [
		require( 'postcss-nested' ),
		require( 'postcss-css-variables' )({
			"preserve": true
		})
	]
}
