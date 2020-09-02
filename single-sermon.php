<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header("interior"); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', "sermon");
		endif; // End of the loop.?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();