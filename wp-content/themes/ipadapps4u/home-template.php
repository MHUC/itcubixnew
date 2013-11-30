<?php
/**
 * Template Name: Home
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
            
			<?php
            $page_id = 17;
            $page_data = get_page( $page_id );
            $title = $page_data->post_title;
            $excerpt = $page_data->post_excerpt;
			echo "<h1 align='center'>" . $excerpt . "</h1>";
            ?>


            <div class="three_boxes">

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
<!-- content area ends -->
    
	<div class="get_started"><a href="#">Get Started</a></div>
    
    
<div class="content_area">
    <div class="content_wrapper">
			
			<h2 align="center">Work Portfolio</h2>
            
			<div class="thumbs_scroller">


<?php
/* query_posts('posts_per_page=4&cat=11,-5,-12,-17&paged='.$paged); */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('posts_per_page=5&cat=5,6&paged='.$paged);
while(have_posts()) : the_post();
?>


	<a href="<?php the_permalink() ?>" style="float:left;" >

	<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }  ?><br />
	</a>

<?php endwhile; ?>


            </div>
            <!-- thumbnail scroller ends -->            
            
            <div class="line"></div>
             

		<?php
        $page_id = 13;
        $page_data = get_page( $page_id );
        $title = $page_data->post_title;
		$excerpt = $page_data->post_excerpt;		
        $content = $page_data->post_content;
        ?>
		<?php echo "<h2 align='center'>" . $excerpt . "</h2>"; ?>

        <div class="app_dev">
			<?php echo "<p>".$content."</p>"; ?>			
        </div>
        <!-- application development ends -->
            
            <div class="line"></div>            
            

            <div class="three_segments">

            	<div class="welcome">
					<?php
                    $page_id = 10;
                    $page_data = get_page( $page_id );
                    $title = $page_data->post_title;
                    $excerpt = $page_data->post_excerpt;
                    $content = $page_data->post_content;
                    ?>
					<?php echo $excerpt; ?>
                    <a href="<?php echo get_permalink($page_id); ?>" class="readmore">read more</a>
                </div>
                <!-- welcome ends -->                
                
                
            	<div class="testimonials">

					<?php
                    $page_id = 27;
                    $page_data = get_page( $page_id );
                    $title = $page_data->post_title;
                    $excerpt = $page_data->post_excerpt;
                    $content = $page_data->post_content;
                    ?>

                	<h2><?php echo $title; ?></h2>
                    

                    <div class="quote1"><div class="quote2">
                    
					<?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    query_posts('posts_per_page=1&order=DESC&cat=4&paged='.$paged);
                    while(have_posts()) : the_post();
                    
					the_excerpt();
                    
					endwhile;
					?>
                    
                    </div></div>


                    
                    
                </div>
                <!-- testimonials ends -->				                
                
                
                <div class="contact">

					<?php
                    $page_id = 29;
                    $page_data = get_page( $page_id );
                    $title = $page_data->post_title;
                    $excerpt = $page_data->post_excerpt;
                    $content = $page_data->post_content;
                    ?>                
                    <h2><?php echo $title; ?></h2>
					<?php echo $excerpt; ?>
                    <a href="<?php echo get_permalink($page_id); ?>" class="readmore">read more</a>
                </div>
                <!-- contact ends -->
                
            </div>
            <!-- three segments ends -->
                
    </div>
</div>
<!-- content area ends -->

<?php get_footer(); ?>
