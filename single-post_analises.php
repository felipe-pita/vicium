<?php get_header(); ?> 

	<main class="page-main single-analises">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article class="single-analises__article">

				<!-- hader do artigo -->
				<header class="single-analises__header">
					<figure class="single-analises__thumbnail">
						<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'single-full'); ?>
					</figure>

					<div class="single-analises__header--container container">
						<div class="single-analises__header--infos container">

							<h1 class="single-analises__title">Análise: <?php the_title(); ?></h1>

							<div class="single-analises__data">
								<time class="single-analises__data--time" datetime="<?php the_time('Y-m-d'); ?>" pubdate><?php the_time('d M Y'); ?></time>
								<div  class="single-analises__data--author">Por <strong><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></strong></div>
								<div  class="single-analises__data--views"><span class="icon__views"><svg width="16" height="11"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#icon__views" /></svg></span>13.566</div>
							</div>

							<div class="single-analises__datasheet">
								<?php 
									$datasheet = array( 
										'tax_generos' => 'tax', 
										'tax_plataformas' => 'tax', 
										'tax_distribuidores' => 'tax', 
										'tax_desenvolvedores' => 'tax', 
										'tax_jogadores' => 'tax',
										'data-lancamento' => 'acf',
									);

									foreach ($datasheet as $data => $type) {
										if ($type == 'tax') {
											
											if ( !empty( get_the_term_list( $post->ID, $data ) ) ) {
												echo '<dl class="single-analises__datasheet--data">';
													echo '<dt class="single-analises__datasheet--title">' . get_taxonomy($data)->labels->singular_name . '</dt>';
													echo '<dd class="single-analises__datasheet--content">';
													$terms = wp_get_post_terms( $post->ID, $data );
													echo terms_gramaticator($terms);
													echo '</dd>';
												echo '</dl>';
											}

										} elseif ($type = 'acf') {

											if ( !empty( get_field($data) ) ):
												$field = get_field_object( $data );
												echo '<dl class="single-analises__datasheet--data">';
													echo '<dt class="single-analises__datasheet--title">' . $field['label'] . '</dt>';
													echo '<dd class="single-analises__datasheet--content">' . $field['value'] . '</dd>';
												echo '</dl>';
											endif;
										}
									}
								?>
							</div>
						</div>
					</div>
				</header>

				<!-- Conteudo do artigo -->
				<div class="single-analises__text container">

					<?php require_once( get_template_directory() . '/_share-buttons.php' ); ?>

					<div class="single-analises__content single__content">
						<?php the_content(); ?>
					</div>
				
				</div>

				<footer class="single-analises__footer">
					
				</footer>

			</article>

		<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>