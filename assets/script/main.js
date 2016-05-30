
/*
 * Fullscreen image
 *
 */

function setFullScreenImagePlaceholderHeight() {
	var fullScreenImages = document.querySelectorAll('.single__content--full-screen');
	
	if ( fullScreenImages.length > 0 ) {
		for (var i = fullScreenImages.length - 1; i >= 0; i--) {

			var w = window,
					d = document,
					e = d.documentElement,
					g = d.getElementsByTagName('body')[0],
					x = w.innerWidth  || e.clientWidth  || g.clientWidth,
					y = w.innerHeight || e.clientHeight || g.clientHeight,

					mediaWidth  = fullScreenImages[i].getAttribute("data-media-width"),
				mediaHeight = fullScreenImages[i].getAttribute("data-media-height");

			var calculatedHeight = ( mediaHeight * x ) / mediaWidth;

			fullScreenImages[i].style.height = parseInt(calculatedHeight) + 'px';

		}
	}
}
window.addEventListener('DOMContentLoaded', setFullScreenImagePlaceholderHeight);
window.addEventListener('resize', setFullScreenImagePlaceholderHeight);


/*
 * Responsive video
 *
 */

function setEmbedHeight() {
	var embeds = document.querySelectorAll('.single__content--embed');
	
	if ( embeds.length > 0 ) {
		for (var i = embeds.length - 1; i >= 0; i--) {
			var mediaWidth  = embeds[i].getAttribute("data-media-width"),
					mediaHeight = embeds[i].getAttribute("data-media-height");

			var calculatedHeight = ( mediaHeight * 100 ) / mediaWidth;

			console.log(calculatedHeight);

			embeds[i].style.paddingBottom = parseInt(calculatedHeight) + '%';

		}
	}
}
window.addEventListener('DOMContentLoaded', setEmbedHeight);

