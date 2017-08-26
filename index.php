<?php get_header(); ?>

<div class="inner-block blog-index">
	<div class="container blog-index__wrap">
		<div class="blog-index__list">
			<?php get_template_part( 'templates/loop' ); ?>
		</div>
		<div class="blog-index__sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>