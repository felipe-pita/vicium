<?php 

	global $ads;

	$ads = (object) array (

		// Homepage
		'homepage' => (object) array(

			'banner' => (object) array(
				'horizontal' => '<div class="ad homepage__news--horizontal-ad"><img src="http://placehold.it/970x90/67009b/67009b" alt=""></div>',
			),

			'news' => (object) array(
				'square1'    => '<div class="ad homepage__news--square-ad"><img src="http://placehold.it/300x250/e7b756/e7b756" alt=""></div>',
				'square2'    => '<div class="ad homepage__news--square-ad"><img src="http://placehold.it/300x250/383634/383634" alt=""></div>',
				'horizontal' => '<div class="ad homepage__news--horizontal-ad"><img src="http://placehold.it/970x90/67009b/67009b" alt=""></div>',
			),
		),

		'noticias' => (object) array(

			'content' => '<div class="ad single-noticias__content--ad"><img src="http://placehold.it/160x600/e7b756/e7b756" alt=""></div>',

		),

	);

?>