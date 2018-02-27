/**
 * Column list Plugin
 * - Breaks up a list into separate columns
 * - src: https://github.com/weblinc/jquery-columnlist
 *
	Copyright (c) 2012 WebLinc LLC

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.
 */

(function($){

	jQuery.fn.columnlist = function( options ) {

		options = $.extend( {}, $.fn.columnlist.defaults, options );

		return this.each(function () {
			var	$list			= $( this ),
					size			= options.size || $list.data( 'columnList' ) || 1,
					$children	= $list.children('li'),
					perColumn	= Math.ceil( $children.length / size ),
					$column;

			for ( var i = 0; i < size; i++ ) {

				// Set up column wrapper
				$column = $('<ul />');

				for ( var j = 0; j < perColumn; j++ ) {
					if ( $children.length > i * perColumn + j ) {
						// Add class to column wrapper
						$column.addClass(options['class']).addClass(options.incrementClass + i).append( $children[ i * perColumn + j ]);
					}
				}

				// Add new columns
				$list.parent().append( $column );
			}

			// Remove original list
			$list.remove();

		});

	};

	// Defaults
	$.fn.columnlist.defaults = {
		'class'					: 'nav-menu',
		incrementClass	: 'nav-menu-'
	};

})(jQuery);
