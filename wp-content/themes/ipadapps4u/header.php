<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />



	<!--<link href="<?php bloginfo('template_url'); ?>/simple_menu.css" rel="stylesheet" type="text/css" /> -->


<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

</head>
<body <?php body_class(); ?> onLoad="setupZoom()">

<?php if (function_exists('AWM_generate_linking_code'))AWM_generate_linking_code(); ?>



<div class="header">
    <div class="wrapper">
    
        	<div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a></div>
            
            <div class="nav">


<?php  wp_nav_menu();  ?>
                
                
            </div>
            
    </div>
</div>
<!-- header ends -->
    



<?php
if ( is_front_page() ) { ?>
    
<div class="banner">
    <div class="banner_wrapper">
        <div class="tag">ipad & iphone applications</div>
        <img src="<?php bloginfo('template_url'); ?>/images/banner1.png" class="banner1" />
        <img src="<?php bloginfo('template_url'); ?>/images/banner2.png" class="banner2" />
    </div>
</div>
<!-- home banner ends -->

<?php } else { ?>

<div class="inner_banner">
    <div class="inner_banner_wrapper">
        <img src="<?php bloginfo('template_url'); ?>/images/inner_banner.png" />
      <div class="tag">ipad & iphone applications</div>
    </div>
</div>
<!-- inner banner ends -->

<?php } ?>