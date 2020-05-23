<?php get_header(); ?>

<div class="container">
	<section class="item">

	<?php if ( have_posts() ) :
	      while ( have_posts() ) :
	           the_post();
	           woocommerce_content();

	?>

<?php endwhile; endif;  ?>
	</section>
</div>

<?php get_footer(); ?>
