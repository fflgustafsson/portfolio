<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

		<!-- Icons -->
		<script src="https://use.fontawesome.com/7938ccb327.js"></script>

		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="nav__mobile">
			<button class="nav__mobile__close" title="Stäng menyn" aria-expanded="true">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			<div class="nav__mobile__center">
				<div class="nav__mobile__main">
					<?php wp_nav_menu(array('menu' => 'Main-menu')); ?>
				</div>
				<div class="nav__mobile__social">
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
			</div>
		</div>

		<div class="nav__overlay js-nav-overlay"></div>

		<header class="header" role="banner">
			
			<div class="header__logo">
				<h1>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			</div>

			<div class="header__nav">
				<div class="header__nav__toggle">
					<i class="fa fa-bars" aria-hidden="true"></i> 
					<!-- Meny -->
				</div>

				<?php wp_nav_menu(array('menu' => 'Main-menu')); ?>
			</div>

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
