<?php
/**
 * Template Name: New Home
 */

get_header("landing"); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
			<?php if(have_posts()): the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class("template-this-week"); ?>>
					<?php 
					$sections = get_field("sections");
				    $blog_title = get_field("blog_title");
				    $top_section_title = get_field("top_section_title");
				    $top_section_content = get_field("top_section_content");
				    // Sidebar
				    $buttons = get_field("buttons");
				    // $tickets_title = get_field("tickets_title");
				    // $newsletter_title = get_field("newsletter_title");

				    /*

						Blue Sub Navff

				    */
					if($sections):?>
				    	<div class="row-1">
				            <div class="wrapper sub-menu">
				                <ul id="sub-menu">
					                <?php if($top_section_title):?>
				                        <li><a href="#<?php echo sanitize_title_with_dashes($top_section_title);?>"><?php echo $top_section_title;?></a></li>
					                <?php endif;?>
				                    <?php foreach($sections as $section):
				                        if($section['menu_title']):?>
				                            <li>
				                                <a href="#<?php echo sanitize_title_with_dashes($section['menu_title']);?>">
				                                    <?php if($section['menu_title'] == 'Eat @ First') :
				                                        echo '<span class="js-at-word">';
				                                    endif;?>
				                                            <?php echo $section['menu_title'];?>
				                                    <?php if($section['menu_title'] == 'Eat @ First') :
				                                        echo '</span>';
				                                    endif;?>
				                                </a>
				                            </li>
				                        <?php endif;
				                    endforeach;?>
					               
					                <?php if($blog_title):?>
				                        <li><a href="#<?php echo sanitize_title_with_dashes($blog_title);?>"><?php echo $blog_title;?></a></li>
					                <?php endif;?>
				                </ul>
				            </div><!--.wrapper-->
				        </div><!--.row-1-->
				    <?php endif;?>
<!-- 

	Top Sections

 -->

 					

 					<div class="row-big-event clear-bottom row-4">
						<?php if($top_section_title):?>
				            <div class="title">
								<?php if (strpos($top_section_title, '@') !== false) {
									$headerClass = 'js-at-word';
								} else {$headerClass = '';} ?>
				                <h2 class="<?php echo $headerClass; ?>"><?php echo $top_section_title;?></h2>
				            </div><!--.title-->
						<?php endif;?>
				        <div class="column-1 copy">
							<?php if($top_section_content):?>
								<?php echo $top_section_content?>
							<?php endif;?>


							<?php  if(have_rows('accordion_panels')):while(have_rows('accordion_panels')):the_row();

								$aptitle=get_sub_field('title');
								$apcontent=get_sub_field('content');
								?>
								<div class="faqrow">
               <div class="question">
               	<div class="question-image"></div>
               	<?php echo $aptitle; ?>
               </div>
               <div class="answer"><?php echo$apcontent; ?></div>
            </div><!-- faqrow -->
							<?php endwhile; endif; ?>

				        </div><!--.column-1-->
				        <div class="column-2">
				        	<div class="overlay">
				        	<?php if($buttons):
					                	foreach ($buttons as $butn) {
					                		# code...
					                	
					                	//print_r($buttons);
					                	//if( have_rows('buttons') ) : while( have_rows('buttons') ) : the_row();
					                		$button_text = get_sub_field('button_text');
					                		$button_link = get_sub_field('button_link');
					                		?>
					                    <div class="more-btn">
					                        <a href="<?php echo $butn[button_text];?>" target="_blank">
					                            <?php if($butn['button_text']) echo $butn['button_text']; else echo $more_button_text;?>
					                        </a>
					                    </div><!--.more-->
					                <?php }//endwhile; 
					            endif;?>
					            </div>

				            <?php $tn_title = get_field("tickets_and_newsletter_title");
				            $tn_link = get_field("tickets_and_newsletter_link");
				            $tickets_repeater = get_field("tickets_repeater");
				            $newsletter_repeater = get_field("newsletter_repeater");?>
				            <?php if($tn_title):?>
				                <div class="row-1">
				                    <?php if($tn_link):?>
				                        <a href="<?php echo $tn_link;?>" target="_blank">
				                    <?php endif;?>
				                    <?php echo $tn_title;?>
				                    <?php if($tn_link):?>
				                        </a>
				                    <?php endif;?>
				                </div><!--.row-1-->
				            <?php endif;?>
				            <!-- the videos -->
				                <?php if( have_rows('videos') ) : while( have_rows('videos') ): the_row(); 
				                    $titlev = get_sub_field('title');
				                    $videov = get_sub_field('video');
				                ?>
				                <div class="theembeds">
				                    <div class="video-row">
				                        <div class="titlev"><h3><?php echo $titlev; ?></h3></div>
				                        <div class="videov">
				                            <div class="embed-container"><?php echo $videov; ?></div>
				                        </div>
				                    </div>
				                </div>
				            <?php endwhile; endif; ?>
				            <?php if($tickets_repeater||$newsletter_repeater):?>
				                <div class="row-2 clear-bottom">
				                    <?php if($tickets_repeater&&!empty($tickets_repeater)):?>
				                        <div class="column-1">
				                            <?php if($tickets_title):?>
				                                <a name="<?php echo sanitize_title_with_dashes($tickets_title);?>"></a>
				                                <div class="row-1">
				                                    <?php echo $tickets_title;?>
				                                </div><!--.row-1-->
				                            <?php endif;?>
				                            <div class="row-2">
				                                <?php foreach($tickets_repeater as $item):?>
				                                    <?php if($item['title']):?>
				                                        <div class="item">
					                                        <?php if($item['link']):?>
					                                            <a href="<?php echo $item['link'];?>" target="_blank">
				                                            <?php endif;?>
				                                                <?php echo $item['title'];?>
					                                        <?php if($item['link']):?>
				                                                </a>
					                                        <?php endif;?>
				                                        </div><!--.item-->
				                                   <?php endif;?>
				                                <?php endforeach;?>
				                            </div><!--.row-2-->
				                        </div><!--.column-1-->
				                    <?php endif;?>
					                <?php if($newsletter_repeater&&!empty($newsletter_repeater)):?>
				                        <div class="column-2">
				                            <?php if($newsletter_title):?>
				                                <a name="<?php echo sanitize_title_with_dashes($newsletter_title);?>"></a>
				                                <div class="row-1">
				                                    <?php echo $newsletter_title;?>
				                                </div><!--.row-1-->
				                            <?php endif;?>
				                            <div class="row-2">
					                            <?php foreach($newsletter_repeater as $item):?>
						                            <?php if($item['title']):?>
				                                        <div class="item">
								                            <?php if($item['link']):?>
				                                            <a href="<?php echo $item['link'];?>" target="_blank">
									                            <?php endif;?>
									                            <?php echo $item['title'];?>
									                            <?php if($item['link']):?>
				                                            </a>
							                            <?php endif;?>
				                                        </div><!--.item-->
						                            <?php endif;?>
					                            <?php endforeach;?>
				                            </div><!--.row-2-->

				                        </div><!--.column-2-->
				                    <?php endif;?>
				                </div><!--.row-2-->
				            <?php endif;?>
				        </div><!--.column-2-->
				    </div><!--.row-4-->					
<!-- 

	Sections

 -->
					<?php if($sections):
						for($i=0;$i<count($sections);$i++):
							$title = $sections[$i]['title'];
							$copy = $sections[$i]['copy'];
							$menu_title = $sections[$i]['menu_title'];
							$image = $sections[$i]['image'];
				            $imageLink = $sections[$i]['link'];?>
				            <a name="<?php echo sanitize_title_with_dashes($menu_title);?>"></a>
				            <div class="content-row clear-bottom row-<?php echo $i+5;?>">
								<?php if($title):?>
				                    <div class="title">
				                    <?php if (strpos($title, '@') !== false) {
				                        $headerClass = 'js-at-word';
				                    } else {$headerClass = '';} ?>
				                        <h2 class="<?php echo $headerClass; ?>"><?php echo $title;?></h2>
				                    </div><!--.title-->
								<?php endif;?>
				                <div class="column-1 copy">
									<?php if($copy):?>
										<?php echo $copy?>
									<?php endif;?>
				                </div><!--.column-1-->
				                <div class="column-2">
									<?php if($image):
				                        if($imageLink) {echo '<a href="'.$imageLink.'">';}?>
				                            <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
				                        <?php if($imageLink) {echo '</a>';} $imageLink ='';?>
									<?php endif;?>

				                </div><!--.column-2-->
				            </div><!--.row-#-->
						<?php endfor;
					endif;//if for sections?>

<!-- 

	Blog Picker

 -->
					<?php if($blog_title):?>
				        <a name="<?php echo sanitize_title_with_dashes($blog_title);?>"></a>
				        <div class="row-blog clear-bottom">
				            <?php $image = get_field("blog_image");
				            $picker = get_field("blog_picker");?>
				            <div class="title">
				                <header>
				                    <h2><?php echo $blog_title;?></h2>
				                </header>
				            </div><!--.title-->
				            <div class="column-1 copy <?php if($image) echo "two-column";?>">
				                <?php if($picker):
				                    $post = get_post($picker);
				                    setup_postdata($post);?>
				                    <h3><a href="<?php echo get_the_permalink();?>"><?php echo the_title();?></a></h3>
				                    <p><?php echo the_date();?></p>
				                    <?php the_content('. . . <span class="read-more">Read More</span>');?>
				                    <?php wp_reset_postdata();
				                endif;?>
				            </div><!--.column-1-->
				            <?php if($image):?>
				                <div class="column-2">
				                    <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
				                </div><!--.column-2-->
				            <?php endif;?>
				        </div><!--.row-4-->
				    <?php endif;?>
				</article>

			<?php endif;?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
