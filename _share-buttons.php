<div class="share">
	<div class="share__buttons">
		<a class="share__buttons--button facebook" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" title="Compartilhar no Facebook">
			<svg width="25" height="25"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#social__facebook" /></svg>
		</a>

		<a class="share__buttons--button twitter" href="http://twitter.com/share?url=<?php echo get_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank" title="Tweetar página">
			<svg width="25" height="25"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#social__twitter" /></svg>
		</a>

		<a class="share__buttons--button gplus" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank" title="Compartilhar no G+">
			<svg width="25" height="25"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#social__gplus" /></svg>
		</a>

		<a class="comment__counter" href="#comments">75</a>
	</div>
	<div class="share__counter">
		<div class="share__counter--number">300 Compartilhamentos</div>
	</div>
</div>

<script>
	shareButtons = document.querySelectorAll('.share__buttons--button');

	for (var i = shareButtons.length - 1; i >= 0; i--) {
		shareButtons[i].addEventListener('click', openShareWindow, false);
	}

	function openShareWindow(event){
		event.preventDefault();

		var url = event.target.getAttribute('href'),
		    title = event.target.getAttribute('title');

		window.open(url, title, 'width=700,height=300,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
	}
</script>