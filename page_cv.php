<?php
/* Template Name: CV */
get_header();
the_post();
?>

	<section class="page cv">

		<div class="CV__maininfo">

			<div class="CV__img">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="CV__info">
				<div>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php the_content();?>
				</div>
			</div>
			
		</div>

		<div class="CV__left">
			<?php the_field('school'); ?>
			<?php the_field('other'); ?>
		</div>

		<div class="CV__right">
			<?php the_field('work'); ?>
		</div>

	</section>

<?php get_footer(); ?>
