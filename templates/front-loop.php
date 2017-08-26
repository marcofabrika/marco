<?php if( have_posts() ): ?>

	<?php while( have_posts() ): the_post(); ?>
		<div class="news__item">
				<div class="item__thumb">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('large');
					}
					?>
				</div>
				<div class="item__inner">
					<h3 class="item__title">
						<!-- <a href="<?php the_permalink(); ?>"> -->
							<?php the_title(); ?>
<!-- 						</a>
 -->					</h3>
					<?php the_content(); ?>
				</div>
		</div>
	<?php endwhile ?>


<?php endif; ?>
