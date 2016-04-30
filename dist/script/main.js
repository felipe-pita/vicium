/*
 * Fullscreen image
 *
 */

function setFullScreenImagePlaceholderHeight() {
	var fullScreenImages = document.querySelectorAll('.single__content--full-screen');
	
	if ( fullScreenImages.length > 0 ) {
		for (var i = fullScreenImages.length - 1; i >= 0; i--) {
			var imageHeight = fullScreenImages[i].offsetHeight + parseInt( getComputedStyle(fullScreenImages[i]).marginTop ) + parseInt(getComputedStyle(fullScreenImages[i]).marginBottom);
			fullScreenImages[i].nextSibling.style.height = imageHeight + 'px';
		}
	}
}

window.addEventListener('DOMContentLoaded', setFullScreenImagePlaceholderHeight);
window.addEventListener('resize', setFullScreenImagePlaceholderHeight);