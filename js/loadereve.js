function loaderEvents() {
	var pageWrap = document.getElementById( 'pagewrap' ),
		pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
		currentPage = 0,
		triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
		loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 100, easingIn : mina.linear } );
	function init() {
		triggerLoading.forEach( function( ev ) {
				//ev.preventDefault();
				//alert('asdf');
				$("body").addClass("noscroll");
				loader.show();
				// after some time hide loader
				setTimeout( function() {
					loader.hide();
					classie.removeClass( pages[ currentPage ], 'show' );
					// update..
					currentPage = currentPage ? 0 : 1;
					classie.addClass( pages[ currentPage ], 'show' );

				}, 2000 );
			
		} );	
	}

	init();
};