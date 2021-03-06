<?php

/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Fanagalo_underscores_core
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<?php // include_once("inc/analyticstracking.php") 
	?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'agk-fngl-2022'); ?></a>

	<div class="header-full-bg"></div>
	<div class="header-left-bg"></div>
	<header id="masthead" class="header-area">

		<?php
		$logo = "<img src=" . get_theme_file_uri() . "/images/AGK-logo.png>";

		if (is_front_page() && is_home()) :
		?>
			<h1 class="site-logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home" alt="Het Amsterdam Gemengd Koor logo"><?php echo $logo; ?></a></h1>
		<?php
		else :
		?>
			<p class="site-logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home" alt="Het Amsterdam Gemengd Koor logo"><?php echo $logo; ?></a></p>
		<?php
		endif;
		?>

	</header><!-- .header-area -->
	<div class="header-right-bg"></div>

	<div class="nav-full-bg"></div>
	<div class="nav-left-bg"></div>
	<div class="nav-area">
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e('Main Menu', 'agk-fngl-2022'); ?>">
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => '',
					'items_wrap' 	 => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
				)
			); ?>
		</nav>
	</div><!-- nav-area -->
	<div class="nav-right-bg"></div>