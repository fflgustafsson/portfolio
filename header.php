<?php?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js" style="margin: 0!important;">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://use.fontawesome.com/7938ccb327.js"></script>
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="mobileMenu">
			
			<button id="menuOpen" class="mobileMenu__open" title="Öppna menyn" aria-expanded="false" >
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>

		</div>

		<header class="header" role="banner">

			<button id="menuClose" class="header__close" title="Stäng menyn" aria-expanded="true">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			
			<div class="header__logo">

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
						</h1>
					<?php else : ?>
						<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
						</h1>
					<?php endif; ?>

			</div>

				<?php if ( has_nav_menu( 'primary' ) ) : ?>

					<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

				<?php endif; ?>

				<div class="header__social">
					<a href="https://www.facebook.com/fflgustafsson/">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
					<a href="https://www.instagram.com/_fgustafsson/">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
					<a href="https://twitter.com/_fgustafsson">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
					<a href="https://se.linkedin.com/in/fgustafsson95">
						<i class="fa fa-linkedin" aria-hidden="true"></i>
					</a>
				</div>

		</header><!-- .site-header -->
