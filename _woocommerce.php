<?php get_header(); ?>

<div class="container page">
<?php if( have_posts() ): ?>

	<?php woocommerce_content(); ?>

<?php endif; ?>

</div>


<?php get_footer(); ?>