=== Simple Pagination ===
Contributors: GeekPress
Tags: paginate, pagination, page, paging, pages, navigation, posts, post, comments, comment, seo
Requires at least: 2.7
Tested up to: 3.3.1
Stable tag: 2.1.2

Simple Pagination allows to set up an advanced pagination for posts and comments. You have an easier navigation on your WordPress.

== Description ==

Simple Pagination allows to set up an advanced pagination for posts and comments. You have an easier navigation on your WordPress.

Simple Pagination has 6 stylesheets for the pagination : CSS 3, Flickr, Digg, Sabrus.us, Green and Grey

Translation: English, French

== Installation ==

1. Upload the complete `simple-pagination` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to 'Simple Pagination' under the 'Settings' tab and configure the plugin


= Usage for posts =

In your theme, open the theme files where you'd like pagination to be used. 
You need to find calls to next_posts_link() and previous_posts_link() and replace them.

Usually this is the `loop.php` file.

You would replace those two lines with this:

	<?php if(function_exists('wp_simple_pagination')) {
		wp_simple_pagination();
	} ?> 


= Usage for comments =

In your theme, open the theme files where you'd like pagination to be used. 
You need to find calls to next_comments_link() and previous_comments_link() and replace them.

Usually this is the `comments.php` file.

You would replace those two lines with this:

	<?php if(function_exists('wp_simple_comments_pagination')) {
		wp_simple_comments_pagination();
	} ?> 

== Screenshots ==

1. Default appearance
2. Admin Section : Texts for navigation links
3. Admin Section : HTML/CSS Advanced Settings
4. Admin Section : Posts Advanced Settings
5. Help Section

== Frequently Asked Questions ==

= How to change the css of Simple Pagination with my own css file? =

You can uncheck the "Simple Pagination CSS file" option from the settings page and add your own styles to your theme's style.css

== Changelog ==

= 2.1.2 =
* Fixed a bug when you do a search with multiple words

= 2.1.1 =
* Fixed a bug for the pagination render
* Tested on WordPress 3.3.1

= 2.1 =
* Add option : "Always Show Page Navigation"

= 2.0 =
* Add function wp_simple_comments_pagination()

= 1.0.3 =
* Fixed a bug for search results.

= 1.0.2 =
* Add 2 new stylesheets.

= 1.0.1 =
* Fixed a bug for configuration with no permalink.

= 1.0 =
* Initial release.
