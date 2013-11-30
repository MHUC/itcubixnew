<?php
/**
 * Template Name: iphone-portfolio
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
query_posts('posts_per_page=6&cat=6&paged='.$paged);
while(have_posts()) : the_post();
?>
	

	<a href="<?php the_permalink() ?>" class="frame">
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }  ?><br />
	<?php the_title(); ?>
	</a>

    

<?php endwhile; ?>



<?php if(function_exists('wp_simple_pagination')) {
    wp_simple_pagination();
	/* calling Simple Paganiation Plugin */	
}
?>





            
		</div>            
    </div>
</div>
<!-- content area ends --><!-- content area ends -->


<div class="clr"></div>

<?php get_footer(); ?>
