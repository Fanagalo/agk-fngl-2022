<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fanagalo_underscores_core
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="article-header">

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="article-meta">
				<?php
				agk_fngl_2022_posted_on();
				agk_fngl_2022_posted_by();
				agk_fngl_2022_search_cat();
				?>
			</div><!-- .article-meta -->
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .article-header -->

	<?php // agk_fngl_2022_post_thumbnail(); ?>

	<div class="article-summary">
			<?php echo '<p>' . wpse_custom_excerpts(35). '</p>'; ?> 
	</div><!-- .article-summary -->

	<footer class="article-footer">
		<?php // agk_fngl_2022_article_footer(); ?>
	</footer><!-- .article-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
