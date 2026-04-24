<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ============================================================
     SITE HEADER
     ============================================================ -->
<header id="masthead" role="banner">
	<div class="container">
		<nav class="nav-inner" aria-label="<?php esc_attr_e( 'Primary Navigation', 'systemify' ); ?>">

			<!-- Logo -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?> Home">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<span class="logo-mark" aria-hidden="true">S</span>
					<span class="logo-text">Systemify<span> AI</span></span>
				<?php endif; ?>
			</a>

			<!-- Desktop nav -->
			<div class="nav-menu" role="navigation">
				<?php
				wp_nav_menu( [
					'theme_location' => 'primary',
					'menu_class'     => 'nav-links',
					'container'      => false,
					'fallback_cb'    => 'systemify_fallback_nav',
					'walker'         => false,
				] );
				?>
				<a href="#contact" class="btn btn-primary btn-sm nav-cta"><?php esc_html_e( 'Book a Call', 'systemify' ); ?></a>
			</div>

			<!-- Mobile hamburger -->
			<button class="nav-toggle" aria-controls="mobile-nav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle menu', 'systemify' ); ?>">
				<span></span>
				<span></span>
				<span></span>
			</button>

		</nav>

		<!-- Mobile nav drawer -->
		<div id="mobile-nav" class="nav-links" hidden>
			<a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Services', 'systemify' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/#how-it-works' ) ); ?>"><?php esc_html_e( 'How It Works', 'systemify' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/#results' ) ); ?>"><?php esc_html_e( 'Results', 'systemify' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About', 'systemify' ); ?></a>
			<?php if ( get_option( 'page_for_posts' ) ) : ?>
			<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php esc_html_e( 'Blog', 'systemify' ); ?></a>
			<?php endif; ?>
			<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary nav-cta"><?php esc_html_e( 'Book a Call', 'systemify' ); ?></a>
		</div>
	</div>
</header>


