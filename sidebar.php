<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fanagalo_underscores_core
 */

if (!is_active_sidebar('sidebar-3col')) {
	return;
}
?>

<div class="sidebar-3col-full-bg"></div>
<div class="sidebar-3col-left-bg"></div>
<aside id="secondary" class="widget-area sidebar-3col-area">
	<?php dynamic_sidebar('sidebar-3col'); ?>
</aside><!-- #secondary -->
<div class="sidebar-3col-right-bg"></div>

<?php
if (!is_active_sidebar('sidebar-fw')) {
	return;
}
?>

<div class="sidebar-fw-full-bg"></div>
<div class="sidebar-fw-left-bg"></div>
<aside id="secondary" class="widget-area sidebar-fw-area">
	<?php dynamic_sidebar('sidebar-fw'); ?>
</aside><!-- #secondary -->
<div class="sidebar-fw-right-bg"></div>