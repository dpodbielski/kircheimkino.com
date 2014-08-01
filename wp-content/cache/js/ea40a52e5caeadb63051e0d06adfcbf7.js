( function( $ ) {
				wp.customize( 'background', function( value ) {
					value.bind( function( newval ) {
						
				$('body ').css('background-color', newval );} );
				} );
				wp.customize( 'main_color', function( value ) {
					value.bind( function( newval ) {
						
				$('a ').css('color', newval );$('header ').css('background-color', newval );$('footer  ').css('background-color', newval );$('.read_more ').css('color', newval );$('.languages li a.active').css('color', newval );$('h3 ').css('color', newval );$('header nav ul ').css('background-color', newval );$('.cta ').css('background-color', newval );$('button:hover, .comment-respond input[type="submit"]:hover ').css('background-color', newval );$('.blog aside h3').css('color', newval );$('.single-news aside h3').css('color', newval );} );
				} );
				wp.customize( 'bg_color', function( value ) {
					value.bind( function( newval ) {
						
				$('.read_more:hover ').css('background-color', newval );$('footer .menu ul li a:hover ').css('color', newval );$('footer section article .languages li a:hover ').css('color', newval );$('footer section article div a:hover ').css('color', newval );$('aside ul li a:hover ').css('background-color', newval );$('aside ul li.current_page_item  a ').css('background-color', newval );$('aside ul li.current-cat  a ').css('background-color', newval );$('.comments  ').css('border-color', newval );} );
				} );
				wp.customize( 'secondary_color', function( value ) {
					value.bind( function( newval ) {
						
				$('header nav ul li.current_page_item a ').css('background-color', newval );$('header nav ul li.current_page_parent a ').css('background-color', newval );$('header nav ul li a:hover ').css('background-color', newval );$('footer .menu ').css('background-color', newval );$('a:hover ').css('color', newval );$('h2 ').css('color', newval );$('aside ul li a ').css('color', newval );$('.show_menu:hover ').css('background-color', newval );$('header nav ul ').css('border-color', newval );$('.cta:hover ').css('background-color', newval );$('button, .comment-respond input[type="submit"] ').css('background-color', newval );} );
				} );
				wp.customize( 'text_color', function( value ) {
					value.bind( function( newval ) {
						
				$('body ').css('color', newval );$('p ').css('color', newval );$('h4 ').css('color', newval );} );
				} );
				wp.customize( 'header_image', function( value ) {
					value.bind( function( newval ) {
						
				$('#header_img ').css('background-image', newval );} );
				} );
				wp.customize( 'logo', function( value ) {
					value.bind( function( newval ) {
						
				} );
				} );
				wp.customize( 'search-icon', function( value ) {
					value.bind( function( newval ) {
						
				$('#search_form input[type="submit"]').css('background-image', newval );} );
				} );} )( jQuery );