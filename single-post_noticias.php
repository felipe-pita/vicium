<?php get_header(); ?> 

	<main class="single single-noticas">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article class="single-noticias__article single__content">
				<header class="single-noticias__header container">
					<?php if (get_field('noticias__header-video')) : ?>
						<div class="single-noticias__video"><?php echo wp_oembed_get(get_field('video-thumbnail')); ?></div>
					<?php elseif ( has_post_thumbnail() ) : ?>
						<div class="single-noticias__thumbnail"><?php the_post_thumbnail('single-content'); ?></div>
					<?php endif; ?>

					<h1 class="single-noticias__title"><?php the_title(); ?></h1>

					<?php if (get_field('subtitle')): ?>
						<p class="single-noticias__subtitle"><?php the_field('subtitle'); ?></p>	
					<?php endif; ?>

					<div class="single-noticias__data">
						<div class="single-noticias__stamp">
							<time class="single-noticias__stamp--time" datetime="<?php the_time('Y-m-d'); ?>" pubdate><?php the_time('d M Y'); ?></time>
							<div  class="single-noticias__stamp--author">Por <strong><a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php the_author(); ?></a></strong></div>
							<div  class="single-noticias__stamp--views"><span class="icon__views"><svg width="16" height="11"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#icon__views" /></svg></span><?php echo ajax_hits_counter_get_hits( $post->ID ); ?></div>
						</div>
						<div class="single-noticias__share">
							<?php require( get_template_directory() . '/_share-buttons.php' ); ?>
						</div>
					</div>
				</header>

				<div class="single-noticias__content container">
					<div class="single-noticias__text">
						<?php the_content(); ?>
							
						<?php echo content_fontes(); ?>
					</div>

					<?php echo (isset($ads->noticias->content)) ? $ads->noticias->content : ''; ?>
				</div>

				<footer>
					
				</footer>
			</article>

		<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>