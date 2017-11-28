<?php
/* Template Name: Project */
get_header();
the_post();
?>

	<section class="page">

		<ul class="project__wrap">
			<?php
			$i = 1;
			$recent = new WP_Query(); 
			$recent->query('post_type=projects'); 
			while($recent->have_posts()) : $recent->the_post(); ?>

			<li class="project">

				<!-- <a href="<?php the_field('lank'); ?>"> -->
				<a href="<?php the_permalink(); ?>">

					<div class="project__bg">
						<?php the_post_thumbnail();?>
					</div>

					<div class="project__title">
						<h2>
							<?php the_title();?>
						</h2>
					</div>

				</a>
			
			</li>

			<?php
			$i++;
			endwhile;?>
		</ul>

	</section>
	
<?php get_footer(); ?>