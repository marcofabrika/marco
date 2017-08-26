<?php if( have_posts() ): ?>

	<ul>

	<?php while( have_posts() ): the_post(); ?>

		<li class="item-archive">
			<div class="time-and-thumb-achive">
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
			</div>
			<div class="data-achive">
				<p class="list-categories-achive">
					<?php the_category(', '); ?>
				</p>
				<h2 class="block__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</div>

		</li>

	<?php endwhile ?>

	</ul>

<?php endif; ?>
