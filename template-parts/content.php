<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fanagalo_underscores_core
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php agk_fngl_2022_post_thumbnail(); ?>

	<header class="article-header">
		<div class="article-categories">
			<?php the_category(' '); ?>
		</div><!-- .entry-category -->

		<?php
		if (is_singular()) :
			the_title('<h1 class="article-title">', '</h1>');
		else :
			the_title('<h2 class="article-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<div class="article-meta">
				<?php
				/* alternative to the_date(); prints dates, also if previous article has same date */
				$article_date = get_the_date();
				echo '<span class="post-date">' . $article_date . '</span>';
				?>
			</div><!-- .article-meta -->
		<?php endif; ?>
	</header><!-- .article-header -->

	<div class="article-content">
		<?php
		the_content(sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'agk-fngl-2022'),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		));

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'agk-fngl-2022'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .article-content -->

	<footer class="article-footer">
	</footer><!-- .article-footer -->

</article>