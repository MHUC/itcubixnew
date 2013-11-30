<?php
/**
 * Template Name: ipad-portfolio-details
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
/* query_posts('posts_per_page=4&cat=11,-5,-12,-17&paged='.$paged); */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('posts_per_page=1&cat=5&paged='.$paged);
while(have_posts()) : the_post();
?>

            	<div class="full_area">

                    <div class="desc">
                        <h1><?php the_title(); ?></h1>
                        <div class="line"></div>
    
						<?php
                          $mykey_values = get_post_custom_values('Type');
                          foreach ( $mykey_values as $key => $value ) { }
                        ?>
    
                        <h2>Type : <?php echo $value; ?></h2>
                        <div class="line"></div>                    


<?php
// Get the all post content in a variable
$posttext = $post->post_content;
$posttext1 = $post->post_content;
 
// We will search for the src="" in the post content
$regular_expression = '~src="[^"]*"~';
$regular_expression1 = '~<img [^\>]*\ />~';
 
// WE will grab all the images from the post in an array $allpics using preg_match_all
preg_match_all( $regular_expression, $posttext, $allpics );
 
// Count the number of images found.
$NumberOfPics = count($allpics[0]);
 
// This time we replace/remove the images from the content
$only_post_text = preg_replace( $regular_expression1, '' , $posttext1);
/*Only text will be printed*/
echo $only_post_text;
?>
                  	
                    </div>
                    



					<div class="ipad">

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.jshowoff.min.js"></script>
<script type="text/javascript">		
	$(document).ready(function(){ $('#slidingFeatures').jshowoff({
		effect: 'slideLeft',
		controlText:{play:'Play',pause:'Pause',previous:'Previous',next:'Next'},
		hoverPause: false
	}); });
</script>

<?php // Check to see if we have at least 1 image
if ( $NumberOfPics > 0 ) { ?>

    <div id="slidingFeatures">
        <?php
        for ( $i=0; $i < $NumberOfPics ; $i++ ){
        $str1=$allpics[0][$i];
        $str1=trim($str1);
        $len=strlen($str1);
        $imgpath=substr_replace(substr($str1,5,$len),"",-1);

/* Here you can do what ever you want
I used http://code.google.com/p/timthumb/ timthumb script to crop all the images and display in thumbnails.
for that upload the timthumb.php file in your theme folder.
*/
        ?>
        <img src='<?php echo get_bloginfo('template_url')."/timthumb.php?src=".$imgpath."&w=389&h=517&zc=1";?>' alt=""/>
    	<?php }; ?>
    </div>
    
<?php }; ?>
					



                    </div>
                    <!-- ipad ends -->
                    
<div class="clr" style="height:10px;"></div>

<?php if(function_exists('wp_simple_pagination')) {
    wp_simple_pagination();
	/* calling Simple Paganiation Plugin */	
} ?>

                    
                </div>
                <!-- full area ends -->

<?php endwhile; ?>



	</div>
</div>



<?php get_footer(); ?>
