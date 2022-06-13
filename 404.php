<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fanagalo_underscores_core
 */

get_header();
?>

<div class="main-full-bg"></div>
<div class="main-left-bg"></div>
<main id="main primary" class="main-area">


	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'agk-fngl-2022'); ?></h1>
		</header><!-- .page-header -->

		<?php
		$location = get_stylesheet_directory_uri();
		echo "<img class='image404' src=" . $location . "/images/404-error.jpg>";
		?>

		<div class="page-content">
			<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'agk-fngl-2022'); ?></p>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main>
<div class="main-right-bg"></div>

<?php
get_footer();
