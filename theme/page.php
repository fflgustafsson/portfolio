<?php
/* The template for displaying pages */
get_header();
the_post();
?>

	<section class="page">

		<?php the_title( '<h1>', '</h1>' ); ?>
		<?php the_content();?>

	</section>

<?php get_footer(); ?>
