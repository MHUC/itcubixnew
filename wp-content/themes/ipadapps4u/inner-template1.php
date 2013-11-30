<?php
/**
 * Template Name: inner1
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
            

            

            	<div class="left_area">
                	<h1><?php the_title(); ?></h1>


	<!-- featured image code -->
	<?php   
	  if ( has_post_thumbnail() ) {
		the_post_thumbnail('large', array('class' => 'alignright'));

		} 
	?>

	<!-- dynamic content code -->  
  	<?php
	if ( have_posts() ) while ( have_posts() ) : the_post(); 
		the_content(); 
	endwhile; // end of the loop.
	?>
                
                </div>
                <!-- left area ends -->


           	  <div class="right_area">
					<?php get_sidebar(); ?>
              </div>
              <!-- right area ends -->
            
            
    </div>
</div>
<!-- content area ends --><!-- content area ends -->


<div class="clr"></div>

<?php get_footer(); ?>
