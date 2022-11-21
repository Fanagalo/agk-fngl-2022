<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fanagalo_underscores_core
 */

get_header();
?>

<div class="main-full-bg"></div>
<div class="main-left-bg"></div>
<main id="main primary" class="main-area">

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<?php
			// the_archive_title('<h1 class="page-title">', '</h1>');
			// the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header -->

		<div class="archive-overview">
			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/content', 'kennismaken-met');
			endwhile;
			?>

		</div><!-- .archive-overview -->

		<div class="list-pagination-full">
			<div class="list-pagination-area">
			<?php 
				echo paginate_links( array(
					'mid_size'     => 1,
					'prev_text'    => '«', // default '« Previous' translates
					'next_text'    => '»', // default 'Next »' translates
				) );
			?>
			</div><!-- .list-pagination-area -->
		</div><!-- .list-pagination-full -->

	<?php
		else :
			get_template_part('template-parts/content', 'none');
		endif;
	?>

</main>
<div class="main-right-bg"></div>

<?php
get_sidebar();
get_footer();
