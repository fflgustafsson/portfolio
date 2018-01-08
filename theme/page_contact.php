<?php
/* Template Name: Kontakt */
get_header();
the_post();
?>

	<section class="page contact">

		<div class="contact__img">
			<?php the_post_thumbnail('full'); ?>
		</div>

		<div class="contact__intro">
			<h1 class="title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<br>
			<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+46703596050">0703596050</a></p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:hello@fgustafsson.se"> hello@fgustafsson.se </p>
			<p><i class="fa fa-file-text" aria-hidden="true"></i> <a href="<?php the_field('contact__cv'); ?>">Länk till CV</a></p>
		</div>

		<section>
			<div class="contact__columns">
				<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
				<?php the_field('knowledge'); ?>
			</div>
			<div class="contact__columns">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				<p>
					<?php the_field('current'); ?>
				</p>	
				<?php if( get_field('looking') ): ?>
					<i class="fa fa-question" aria-hidden="true"></i>
					<i class="fa fa-exclamation" aria-hidden="true"></i>
					<p>
						<?php the_field('looking'); ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="contact__columns">
				<i class="fa fa-briefcase" aria-hidden="true"></i>
				<?php the_field('experience'); ?>
			</div>
			<div class="contact__columns">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
				<?php the_field('schools'); ?>
			</div>
		</section>

	</section>
	
<?php get_footer(); ?>