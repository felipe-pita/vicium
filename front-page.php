<?php get_header(); ?> 

	<main class="main homepage" role="main">

		<section class="homepage__banners">

			<header>
				<h1 class="hide-title">Destaques</h1>
			</header>

			<div class="homepage__banners--item">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner1.png" height="410" width="643" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">Novo Tomb Raider faz de Lara Croft a maior mulher nos games</h2>
				</div>
			</div>

			<div class="homepage__banners--item">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner2.png" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">Fallout 4 é nomeado Jogo do Ano pela premiação DICE</h2>
				</div>
			</div>
			<div class="homepage__banners--item main">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner3.png" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">Análise Assassin’s Creed Chronicles India</h2>
				</div>
			</div>
			<div class="homepage__banners--item">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner4.png" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">Trailer de Star Wars: Battlefront será feito com o motor gráfico do jogo</h2>
				</div>
			</div>
			<div class="homepage__banners--item">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner5.png" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">HoloLens próximo? Criador afirma que ainda não está na hora</h2>
				</div>
			</div>
		</section>

		<section class="homepage__news">
			<div class="homepage__news--container container post-type__archive">

				<?php if ( isset( $ads->homepageBannerHorizontal ) ) : ?>
					<?php echo $ads->homepageBannerHorizontal; ?>
				<?php endif; ?>

				<header>
					<div class="post-type__archive--title"><h1>Novidades</h1></div>
				</header>

				<div class="news__list">

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

				</div>

				<div class="news__list main">

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news2.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--ads">
						<div class="news__list--ad ad">
							<?php if ( isset( $ads->homepageNewsListSquare1 ) ) : ?>
								<?php echo $ads->homepageNewsListSquare1; ?>
							<?php endif; ?>
						</div>
						<div class="news__list--ad ad">
							<?php if ( isset( $ads->homepageNewsListSquare2 ) ) : ?>
								<?php echo $ads->homepageNewsListSquare2; ?>
							<?php endif; ?>
						</div>
					</div>

				</div>

				<div class="news__list">

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

				</div>

				<footer>
					<div class="post-type__archive--view-more">
						<a href="#">ver tudo</a>
					</div>
				</footer>

				<?php if ( isset( $ads->homepageNewsHorizontal ) ) : ?>
					<?php echo $ads->homepageNewsHorizontal; ?>
				<?php endif; ?>

			</div>
		</section>

		<section class="homepage__reviews">
			<div class="homepage__reviews--container container">

				<header>
					<div class="post-type__archive--title"><h1>Análises</h1></div>

					<div class="homepage__reviews--subtitle"><p>Não concorda com a nossa nota? Não tem problema! <strong>Dê também a sua nota</strong> para os games que já jogou.</p></div>
				</header>

				<div class="reviews__list">

					<div class="reviews__list--item">
						<div class="reviews__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/review1.png" alt=""></div>
						<div class="reviews__list--rate"><span class="rate">85</span></div>
						<div class="reviews__list--rate public"><span class="rate">87</span><span class="desc">pública</span></div>
						<h2 class="reviews__list--title"><a href="#">Tom Clancy’s The Division</a></h2>
					</div>

					<div class="reviews__list--item">
						<div class="reviews__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/review2.png" alt=""></div>
						<div class="reviews__list--rate"><span class="rate">85</span></div>
						<div class="reviews__list--rate public"><span class="rate">87</span><span class="desc">pública</span></div>
						<h2 class="reviews__list--title"><a href="#">Tom Clancy’s The Division</a></h2>
					</div>

					<div class="reviews__list--item">
						<div class="reviews__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/review3.png" alt=""></div>
						<div class="reviews__list--rate"><span class="rate">85</span></div>
						<div class="reviews__list--rate public"><span class="rate">87</span><span class="desc">pública</span></div>
						<h2 class="reviews__list--title"><a href="#">Tom Clancy’s The Division</a></h2>
					</div>

					<div class="reviews__list--item">
						<div class="reviews__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/review1.png" alt=""></div>
						<div class="reviews__list--rate"><span class="rate">85</span></div>
						<div class="reviews__list--rate public"><span class="rate">87</span><span class="desc">pública</span></div>
						<h2 class="reviews__list--title"><a href="#">Tom Clancy’s The Division</a></h2>
					</div>

					<div class="reviews__list--item">
						<div class="reviews__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/review2.png" alt=""></div>
						<div class="reviews__list--rate"><span class="rate">85</span></div>
						<div class="reviews__list--rate public"><span class="rate">87</span><span class="desc">pública</span></div>
						<h2 class="reviews__list--title"><a href="#">Tom Clancy’s The Division</a></h2>
					</div>

					<div class="reviews__list--item">
						<div class="reviews__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/review3.png" alt=""></div>
						<div class="reviews__list--rate"><span class="rate">85</span></div>
						<div class="reviews__list--rate public"><span class="rate">87</span><span class="desc">pública</span></div>
						<h2 class="reviews__list--title"><a href="#">Tom Clancy’s The Division</a></h2>
					</div>

				</div>

				<footer>
					<div class="post-type__archive--view-more">
						<a href="#">ver tudo</a>
					</div>
				</footer>
			</div>

			<div class="homepage__reviews--pattern"></div>
		</section>

		<script>
			document.addEventListener('DOMContentLoaded', createReviewsPattern, false);

			function createReviewsPattern() {
				reviews = document.querySelector('.homepage__reviews');
				reviewsPattern = document.querySelector('.homepage__reviews--pattern');

				var pattern = Trianglify({
					width:     reviews.clientWidth,
					height:    reviews.clientHeight,
					cell_size: 300,
					variance:  1,
					x_colors: ['#010402', '#132b0e', '#87BC03'],
					y_colors: ['#000000', '#091d0d', '#162b0d'],

				});

				reviewsPattern.appendChild( pattern.svg() );
			}
		</script>







<!-- 		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_title(); ?>
			<?php the_content(); ?>

		<?php endwhile; endif; ?> -->

	</main>

<?php get_footer(); ?>