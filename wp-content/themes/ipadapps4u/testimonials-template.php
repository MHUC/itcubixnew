<?php
/**
 * Template Name: testimonials
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
            

        <div class="full_area">

<h1><?php the_title(); ?></h1>

<?php
/* query_posts('posts_per_page=4&cat=11,-5,-12,-17&paged='.$paged); */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('posts_per_page=5&cat=4&paged='.$paged);
while(have_posts()) : the_post();
?>
	

				<div class="quotes"><div class="quote2a"><div class="quote2b">
				  <h3><?php the_title(); ?></h3>
				  <p><?php the_excerpt(); ?>

						<?php
                          $mykey_values = get_post_custom_values('Author');
                          foreach ( $mykey_values as $key => $value ) { }
                        ?>
    
				    <span class="author"><?php echo $value; ?></span></p>
				</div></div></div>


<?php endwhile; ?>

<?php if(function_exists('wp_simple_pagination')) {
    wp_simple_pagination();
	/* calling Simple Paganiation Plugin */	
} ?>




        </div>
            
            
    </div>
</div>
<!-- content area ends --><!-- content area ends -->


<div class="clr"></div>

<?php get_footer(); ?>
