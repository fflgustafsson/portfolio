<?php
/* Template Name: Project */
get_header();
the_post();
?>

	<section class="page">

		<?php
			$i = 1;
			$recent = new WP_Query(); 
			$recent->query('post_type=projects'); 
			while($recent->have_posts()) : $recent->the_post(); ?>

			<div class="project">

				<a href="<?php the_field('lank'); ?>">

					<div class="project__bg">
						<?php the_post_thumbnail();?>
					</div>

					<div class="project__title">
						<h2>
							<?php the_title();?>
						</h2>
					</div>

				</a>
			
			</div>

			<?php
			$i++;
			endwhile;?>

	</section>
	
<?php get_footer(); ?>