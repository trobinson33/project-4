jQuery(document).ready(function ($) {

	var $grid = $(".grid");
	var qsRegex;

	$grid.isotope({
	  // options
	  itemSelector: '.grid-item',
	  layoutMode: 'fitRows',
	  filter: function() {
	    return qsRegex ? $(this).text().match( qsRegex ) : true;
	  }
	});

	$grid.imagesLoaded( function() {
        $grid.isotope('layout');
    });

    // use value of search field to filter
	var $quicksearch = $('.quicksearch').keyup( debounce( function() {
	  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
	  $grid.isotope();
	}, 200 ) );

	// debounce so filtering doesn't happen every millisecond
	function debounce( fn, threshold ) {
	  var timeout;
	  threshold = threshold || 100;
	  return function debounced() {
	    clearTimeout( timeout );
	    var args = arguments;
	    var _this = this;
	    function delayed() {
	      fn.apply( _this, args );
	    }
	    timeout = setTimeout( delayed, threshold );
	  };
	}

});