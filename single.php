<?php 

/*  Single Post Template: Project post */
 
get_header(); 
?>
	
	<!-- Section -->
<section class="page">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="articlepost">

				<div class="articlepost__visual">

					<div class="articlepost__visual__thumbnail">
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						<?php endif; ?>
					</div>

					<div class="articlepost__visual__imgGallery">
						<?php if( get_field('carouselimg') ): ?>
							<img src="<?php the_field('carouselimg'); ?>" />
						<?php endif; ?>
						<?php if( get_field('carouselimg2') ): ?>
							<img src="<?php the_field('carouselimg2'); ?>" />
						<?php endif; ?>
						<?php if( get_field('carouselimg3') ): ?>
							<img src="<?php the_field('carouselimg3'); ?>" />
						<?php endif; ?>
						<?php if( get_field('carouselimg4') ): ?>
							<img src="<?php the_field('carouselimg4'); ?>" />
						<?php endif; ?>
						<?php if( get_field('carouselimg5') ): ?>
							<img src="<?php the_field('carouselimg5'); ?>" />
						<?php endif; ?>
					</div>

					<?php if( get_field('articlevideo') ): ?>
						<div class="articlepost__visual__video">
							<?php the_field('articlevideo'); ?>
						</div>
					<?php endif; ?>
		
				</div>

				<div class="articlepost__description">

					<h1>
						<?php the_title(); ?>
					</h1>

					<p class="articlepost__description__date">
						<?php the_time('j F Y, H:i') ?>
					</p>

					<?php the_content(); ?>

				</div>

			</div>

				
		</article>
			<!-- /Article -->
			
		<?php endwhile; ?>
		
		<?php else: ?>
			<!-- 
			Do something 
			-->
		
		<?php endif; ?>

	</div>

<?php get_footer(); ?>