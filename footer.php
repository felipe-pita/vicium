	<footer class="footer" role="contentinfo">
		
		<nav class="footer__social">
			<ul class="footer__social--container container">
				<li class="footer__social--headline">Siga-nos</li>
				<li class="footer__social--item">
					<a class="footer__social--link facebook" href="#">
						<svg width="16" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#social__facebook" /></svg>
					</a>
				</li>
				<li class="footer__social--item">
					<a class="footer__social--link twitter" href="#">
						<svg width="16" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#social__twitter" /></svg>
					</a>
				</li>
				<li class="footer__social--item">
					<a class="footer__social--link youtube" href="#">
						<svg width="16" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#social__youtube" /></svg>
					</a>
				</li>
			</ul>
		</nav>

		<div class="footer__close">
			<div class="footer__close--container container">
				<div class="footer__logo">
					<svg width="79" height="62"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#footer__logo" /></svg>
				</div>
				<div class="footer__copyright">
					<div class="footer__copyright--credits"><a href="#">Créditos</a></div>
					<div class="footer__copyright--date">Vicium Games &copy; <?php echo date('Y') ?></div>
				</div>
			</div>
		</div>
		
	</footer>

	<?php wp_footer(); ?>
</body>
</html>