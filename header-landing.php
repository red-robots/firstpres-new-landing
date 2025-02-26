<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php 
$alert=get_field('alert_message', 'option');
$showAlert=get_field('show_alert_message', 'option');
if($showAlert){$showAlert=$showAlert[0];}

// echo '<pre>';
// print_r($alert);
// echo '</pre>';
if($showAlert=='Yes' && $alert !='' ) : ?>
	<div class="alert">
		<?php echo $alert; ?>
	</div>
<?php endif; ?>
    <div id="hamburger">
        <div class="wrapper">
            <i class="fa fa-bars"></i>
            <div class="menu copy">
                <?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>
            </div><!--.menu-->
        </div><!--.wrapper-->
    </div><!--.hamburger-->
	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			<div class="row-1 clear-bottom">
				<h1 class="logo-landing ">
	            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo-landing.png";?>" alt="<?php bloginfo('name'); ?>"></a>
	            </h1>
                <!-- <div class="new">
	                <?php $post = get_post(186);
	                setup_postdata($post);?>
                    <a href="<?php echo get_the_permalink();?>">
		                <?php the_title();?>
                    </a>
	                <?php wp_reset_postdata();?>
                </div> --><!--.new-->
                <!-- <div class="week">
	                <?php $post = get_post(258);
	                setup_postdata($post);?>
                    <a href="<?php echo get_the_permalink();?>">
		                <div class="js-at-word"><?php the_title();?></div>
                    </a>
	                <?php wp_reset_postdata();?>
                </div> --><!--.week-->
				<div class="search-bar s-landing clear-bottom">
					<div class="clear-bottom"></div><!--.clear-bottom-->
					<div class="wrapper">
						<i class="fa fa-search"></i>
						<div class="search-form"><?php get_search_form();?></div><!--.search-form-->
					</div><!--.wrapper-->
				</div><!--.search-bar-->
				<div class="homelink week">
					<a href="<?php bloginfo('url'); ?>/home">
						Home
					</a>
				</div>
            </div><!--.row-1-->
			
			<!-- <div class="landing-wrapper">
	            
	        </div> -->
<div class="clear"></div>
			<nav id="site-navigation" class="main-navigation row-3" role="navigation">
                <div class="wrapper main-menu">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'acstarter' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </div><!--.wrapper-->
            </nav><!-- #site-navigation -->
	    </div><!-- wrapper -->
	</header><!-- #masthead -->
	<div id="content" class="site-content wrapper">
