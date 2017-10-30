<?php 

/*  Single Post Template: Project post */
 
get_header(); 
?>
	
	<!-- Section -->
<section class="page">

	<div class="projectpost">
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="projectpost__header">

				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php endif; ?>
				
			</div>

			<div class="projectpost__description">

				<h2>
					<?php the_title(); ?>
				</h2>

				<?php the_content(); ?>
				
			</div>

			<div class="projectpost__category">

				<?php if( get_field('what') ): ?>
					<h3>
						Typ av projekt
					</h3>
					<p>
						<?php the_field('what'); ?>
					</p>
				<?php endif; ?>
				<?php if( get_field('cat') ): ?>
				<h3>
					Kategori?
				</h3>
				<p>
					<?php the_field('cat'); ?>
				</p>
				<?php endif; ?>
				<h3>
					När?
				</h3>
				<p>
					<?php the_field('when'); ?>
				</p>

				<?php if( get_field('with') ): ?>
					<h3>
						Med vilka?
					</h3>
					<p>
						<?php the_field('with'); ?>
					</p>
				<?php endif; ?>
			</div>

			<div class="projectpost__imgCarousel flexslider">

				<ul class="slides">

					<?php if( get_field('carouselimg') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg2') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg2'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg3') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg3'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg4') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg4'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg5') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg5'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg6') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg6'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg7') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg7'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg8') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg8'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg9') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg9'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg10') ): ?>
						<li class="carouselImg">
							<img src="<?php the_field('carouselimg10'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg11') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg1'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg12') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg12'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg13') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg13'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg14') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg14'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg15') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg15'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg16') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg16'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg17') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg17'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg18') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg18'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg19') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg19'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg20') ): ?>
						<li class="carouselImg1">
							<img src="<?php the_field('carouselimg20'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg21') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg2'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg22') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg22'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg23') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg23'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg24') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg24'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg25') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg25'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg26') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg26'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg27') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg27'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg28') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg28'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg29') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg29'); ?>" />
						</li>
					<?php endif; ?>
					<?php if( get_field('carouselimg30') ): ?>
						<li class="carouselImg2">
							<img src="<?php the_field('carouselimg30'); ?>" />
						</li>
					<?php endif; ?>
				</ul>
			</div>

			<?php if( get_field('casevideo') ): ?>
				<div class="casevideo">
					<div class="projectpost__video">
						<?php the_field('casevideo'); ?>
					</div>
					<div class="projectpost__videoTxt">	
						<div>
							<h3>
								<?php the_field('casevideo_title'); ?>
							</h3>
							<p>
								<?php the_field('casevideo_desc'); ?>
							</p>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if( get_field('casevideotwo') ): ?>
				<div class="casevideo">
					<div class="projectpost__videoTxt">	
						<div>
							<h3>
								<?php the_field('casevideotwo_title'); ?>
							</h3>
							<p>
								<?php the_field('casevideotwo_desc'); ?>
							</p>
						</div>
					</div>
					<div class="projectpost__video">
						<?php the_field('casevideotwo'); ?>
					</div>
				</div>
			<?php endif; ?>
				
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