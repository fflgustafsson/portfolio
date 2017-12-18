<?php

/*	The template for displaying the footer */

?>

		<footer class="site-footer" role="contentinfo">
			<div class="site-info">
				<p>
					&copy; <?php echo date("Y"); ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</p>
						</div>
						
		</footer>


		<?php wp_footer(); ?>
	
	</body>
</html>
