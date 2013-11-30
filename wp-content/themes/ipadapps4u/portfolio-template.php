<?php
/**
 * Template Name: portfolio
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
 
get_header(); ?>


<div class="content_area">
    <div class="content_wrapper">
            


            <div class="three_boxes" style="margin:25px 0px 0px 0px;">

                    <div class="box2">
                        <?php
                        $page_id = 20;
                        $page_data = get_page( $page_id );
                        $title = $page_data->post_title;
                        $excerpt = $page_data->post_excerpt;
                        $content = $page_data->post_content;
                        ?>                
                        <?php echo $title; ?><br /><a href="<?php echo get_permalink($page_id); ?>">read more</a>
                    </div>
    
    
                    <div class="box1">
                        <?php
                        $page_id = 22;
                        $page_data = get_page( $page_id );
                        $title = $page_data->post_title;
                        $excerpt = $page_data->post_excerpt;
                        $content = $page_data->post_content;
                        ?>                
                        <?php echo $title; ?><br /><a href="<?php echo get_permalink($page_id); ?>">read more</a>                
                    </div>
                    
                    
                    <div class="box3">
                        <?php
                        $page_id = 25;
                        $page_data = get_page( $page_id );
                        $title = $page_data->post_title;
                        $excerpt = $page_data->post_excerpt;
                        $content = $page_data->post_content;
                        ?>                
                        <?php echo $title; ?><br /><a href="<?php echo get_permalink($page_id); ?>">read more</a>
                    </div>

            </div>
            <!-- 3 boxes ends -->




	</div>
</div>
<?php get_footer(); ?>
