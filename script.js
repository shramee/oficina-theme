jQuery( function( $ ) {
	var $homePosts = $('.home-posts-wrap');
	$homePosts.imagesLoaded( function () {
		$homePosts.masonry( {
			itemSelector: 'article',
		} );
	} );
} );