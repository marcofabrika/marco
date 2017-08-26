<?php if( have_posts() ): ?>

	<ul>

	<?php while( have_posts() ): the_post(); ?>

		<li>
			<h2 class="block__title"><?php the_title(); ?></h2>
			<time class="pub-date" datetime="<?php get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
			<?php if ( has_post_thumbnail() ) : ?>
			<p class="thumb thumb-achive">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</p>
			<?php else: ?>
				<p class="thumb thumb-achive">
					<a href="<?php the_permalink(); ?>">
						 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_bg.jpg" alt="">
					</a>
				</p>
			<?php endif; ?>
			<?php the_content(); ?>
		</li>

	<?php endwhile ?>

	</ul>

<?php endif; ?>
