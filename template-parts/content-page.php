<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fanagalo_underscores_core
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article-header">
		<?php the_title('<h1 class="article-title">', '</h1>'); ?>
	</header><!-- .article-header -->

	<?php agk_fngl_2022_post_thumbnail(); ?>

	<div class="article-content">
		<?php
		the_content('Lees verder...');

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'agk-fngl-2022'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .article-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="article-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'agk-fngl-2022'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .article-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->