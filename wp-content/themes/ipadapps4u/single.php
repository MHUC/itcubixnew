<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php
   if ( in_category('5') ) {
      include(TEMPLATEPATH.'/portfolio-ipad-details-template.php');
   }
   
   else if ( in_category('6') ) {
      include(TEMPLATEPATH.'/portfolio-iphone-details-template.php');
   }
   
   else if ( in_category('4') ) {
      include(TEMPLATEPATH.'/testimonials-details-template.php');
   }
   
   else if ( in_category('7') ) {
      include(TEMPLATEPATH.'/portfolio-iOS-details-template.php');
   }   
   
   else {
      include(TEMPLATEPATH.'single1.php');
   }
?>



<?php get_footer(); ?>
