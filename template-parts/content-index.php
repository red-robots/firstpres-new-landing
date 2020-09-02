<?php
/**
 * Template part for displaying page content in index.php.
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
    <div class="row-1">
        <div class="overlay-wrapper">
            <div class="search-bar clear-bottom">
                <div class="clear-bottom"></div><!--.clear-bottom-->
                <div class="wrapper">
                    <i class="fa fa-search"></i>
                    <div class="search-form"><?php get_search_form();?></div><!--.search-form-->
                </div><!--.wrapper-->
            </div><!--.search-bar-->
            <div class="overlay">
                <div class="row-1">
                    <h1><img src="<?php echo get_template_directory_uri()."/images/logo2.png";?>" alt="<?php echo get_bloginfo("name");?>"></h1>
                </div>
                <div class="row-2">
                    <div class="new">
                        <?php $post = get_post(186);
                        setup_postdata($post);?>
                        <a href="<?php echo get_the_permalink();?>">
                            <?php the_title();?>
                        </a>
                        <?php $post = get_post(16);
                        setup_postdata($post); ?>
                    </div><!--.new-->
                    <div class="week">
                        <?php $post = get_post(258);
                        setup_postdata($post);?>
                        <a href="<?php echo get_the_permalink();?>">
                            <div class="js-at-word"><?php the_title();?></div>
                        </a>
                        <?php $post = get_post(16);
                        setup_postdata($post); ?>
                    </div><!--.week-->
                </div>
            </div><!--.overlay-->
        </div><!--.overlay-wrapper-->
        <img src="<?php echo get_template_directory_uri()."/images/homebanner.jpg";?>" alt="charlotte skyline">
    </div><!--.row-1-->
    <div class="row-2">
        <div class="wrapper main-menu">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'acstarter' ); ?></button>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </div><!--.wrapper-->
    </div><!--.row-2-->
    <div class="row-3">
        <div class="column-1">
            <iframe src="https://www.youtube.com/embed/8QJZ1OcMen0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </div><!--.column-1-->
        <div class="column-2">
            <div class="row-1">
                <?php $welcome_link = get_field("welcome_link");?>
                <?php if($welcome_link):?>
                    <a href="<?php echo $welcome_link;?>">
                <?php endif;?>
	            <?php $welcome_title = get_field("welcome_message_title");
	            if($welcome_title):?>
                    <div class="title">
                        <h2><?php echo $welcome_title; ?></h2>
                    </div><!--.title-->
	            <?php endif;?>
                <?php $welcome_copy = get_field("welcome_message_copy");
	            if($welcome_copy):?>
                    <div class="copy">
                        <?php echo $welcome_copy;?>
                    </div><!--.copy-->
	            <?php endif;?>
                <?php if($welcome_link):?>
                    </a>
                <?php endif;?>
            </div><!--.row-1-->
            <div class="row-2 copy">
                <?php $welcome_schedule = get_field("welcome_schedule");
                if($welcome_schedule):
                    echo $welcome_schedule;
                endif;?>
            </div><!--.row-2-->
        </div><!--.column-2-->
    </div><!--.row-3-->
    <div class="row-4 clear-bottom">
        <?php $more_button_text = get_field("more_button_text");
        for($i=1;$i<=4;$i++):?>
        <div class="column column-<?php echo $i;?>">
            <?php $image = get_field("section_{$i}_image");
            $title = get_field("section_{$i}_title");
            $copy = get_field("section_{$i}_copy");
            $link = get_field("section_{$i}_link");?>
            <div class="overlay">
                <?php if($link):?>
                    <a href="<?php echo $link;?>"></a>
                <?php endif;?>
		        <?php if($title):?>
                    <div class="title">
				        <h2><?php echo $title;?><h2>
                    </div><!--.title-->
		        <?php endif;?>
		        <?php if($copy):?>
                    <div class="copy">
                        <?php echo $copy;?>
                    </div><!--.copy-->
		        <?php endif;?>
		        <?php if($more_button_text && $link):?>
                    <div class="more">
                        <a href="<?php echo $link;?>" target="_blank">
					        <?php echo $more_button_text;?>
                        </a>
                    </div><!--.more-->
		        <?php endif;?>
            </div><!--.overlay-->
            <?php if($i%2===1):?>
                <div class="row-1">
                    <?php if($image):?>
                        <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                    <?php endif;?>
                </div><!--.row-1-->
            <?php endif;?>
            <div class="row-2">
                <?php if($image):?>
                    <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                <?php endif;?>
                <?php if($title):?>
                    <div class="title">
                        <?php echo $title;?>
                    </div>
                <?php endif;?>
            </div><!--.row-2-->
            <?php if($i%2===0):?>
                <div class="row-1">
                    <?php if($image):?>
                        <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                    <?php endif;?>
                </div><!--.row-1-->
            <?php endif;?>
        </div><!--.column-#-->
        <?php endfor;?>
    </div><!--.row-4-->
</article><!-- #post-## -->
