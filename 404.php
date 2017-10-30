<?php

/*	The template for displaying 404 pages (not found)	*/

get_header(); 

?>

	<section class="page error-404 not-found">

		<div class="error">
			<header class="page-header">
				<h1 class="page-title">
					No content found.
				</h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>
					<?php _e( 'Ojdå, hamnat fel? Sök istället så du hittar det du vill kolla på' ); ?>
				</p>

				<?php get_search_form(); ?>
			</div>
	
		</div>
		
<?php get_footer(); ?>
