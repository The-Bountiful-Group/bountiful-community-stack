<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if (astra_page_layout() == 'left-sidebar') : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>

	<?php astra_primary_content_top(); ?>

	<?php astra_content_page_loop(); ?>

	<?php $orig_query = $wp_query; ?>
	<?php query_posts('posts_per_page=' . get_option('posts_per_page')); ?>

	<div class="site-main">
		<?php
		if (have_posts()) :
			do_action('astra_template_parts_content_top');

			while (have_posts()) {
				the_post();
				do_action('astra_template_parts_content');
			}

			do_action('astra_template_parts_content_bottom');
		else :
			do_action('astra_template_parts_content_none');
		endif;
		?>
	</div>

	<?php $wp_query = $orig_query; ?>

	<?php astra_primary_content_bottom(); ?>

</div> <!-- #primary -->

<?php if (astra_page_layout() == 'right-sidebar') : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
