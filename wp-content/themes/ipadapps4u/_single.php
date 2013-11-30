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
if (in_category('5')) {include (TEMPLATEPATH . '/portfolio-ipad-details-template.php');
}
else { include (TEMPLATEPATH . '/single1.php');
}
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
