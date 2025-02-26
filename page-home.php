<?php
/**
 * Template Name: Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <?php $post = get_post(16);
            setup_postdata($post);
            get_template_part( 'template-parts/content', 'index' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
