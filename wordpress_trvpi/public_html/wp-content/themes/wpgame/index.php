<?php get_header();?>

	<section class="content">
		<div class="game-card game-card__order">
			<div class="game-photo">
				<img src="<?php echo get_template_directory_uri() ?>/img/game/cyber.png" alt="">
			</div>
			<div class="game-info">
				<a href="#" class="btn-filter">NEWEST</a>
				<h2>Cyberpunk 2077</h2>
				<p>Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification.</p>
				<div class="game-platforms">
					<img src="<?php echo get_template_directory_uri() ?>/img/icons/ps.svg" alt="Playstation"><img src="<?php echo get_template_directory_uri() ?>/img/icons/xbox.svg" alt="Xbox"><img src="<?php echo get_template_directory_uri() ?>/img/icons/win.svg" alt="Windows">
				</div>
				<div class="game-price">
					<span>$59.99</span><button class="btn-cart">Pre order</button>
				</div>
			</div>
		</div>

		<?php		
				global $post;

				$query = new WP_Query( [
					'posts_per_page' => 5,
					'category_name'  => 'games',
				] );

				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						?>
								<a href="#" class="game-card game-card__small">
									<div class="game-photo">
										<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
									</div>
									<div class="game-info">
										<h4><?php the_title();?></h4>
										<span class="game-genre">Action, Adventure</span>
										<div class="game-price"><span>$25.60</span></div>
									</div>
								</a>
						<?php 
					}
				} else {
					// Постов не найдено
				}

				wp_reset_postdata(); // Сбрасываем $post
				?>
	</section>


	<?php wp_footer(); ?>
</body>

</html>