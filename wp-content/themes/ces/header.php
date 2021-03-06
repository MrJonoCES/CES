<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CES
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,300;1,300&display=swap" rel="stylesheet"> 

	<body <?php body_class(); ?>>

	

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ces' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="nav" class="header-inner container">

		<div class="site-branding pr5">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<p class="site-title" style="margin-top: 0px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			else :
				?>
				<p id="site-title" class="site-title" style="margin-top: 0px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$ces_description = get_bloginfo( 'description', 'display' );
			if ( $ces_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $ces_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation pl3" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ces' ); ?></button> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div>

		<div class="burger">
		<a href="#" class="menu-toggle"> 
			<img id="blueburger" src="<?php echo get_template_directory_uri();?>/css/images/menu.svg" alt="Menu">
			<img id="whiteburger" src="<?php echo get_template_directory_uri();?>/css/images/menuwhite.svg" alt="Menu">
		</a>
		</div>

	</header><!-- #masthead -->


	<div class="mobile-menu">

			<nav>
				<a href="https://staging.cityeditionstudio.co.uk/">Projects</a>
				<a href="https://staging.cityeditionstudio.co.uk/info">Contact/Bio</a>
			</nav>
		</div>

