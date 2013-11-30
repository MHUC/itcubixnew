<?php
/**
 * Template Name: testimonials-details
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

while ( have_posts() ) : the_post(); 

	if ( ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) || in_category( _x( 'gallery', 'gallery category slug', 'twentyten' ) ) ) : 

	else :
?>

            	<div class="full_area">



                        <h1>testimonials</h1>

						<?php
                          $mykey_values = get_post_custom_values('Author');
                          foreach ( $mykey_values as $key => $value ) { }
                        ?>
    
       					
                        
                        <span class="quotes"><span class="quote2a"><span class="quote2b">
							<h3><?php the_title(); ?></h3>
                        	<?php the_content(); ?><br />
							<span class="author"><?php echo $value; ?></span>							                            
                        </span></span></span>
                    
                </div>
                <!-- full area ends -->


<?php endif;  endwhile; ?>




	</div>
</div>



<?php get_footer(); ?>
