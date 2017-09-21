<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage stamatis_theme
 * @since Stamatis 1.0
 */
/*
 * Template Name: Page Home
 */
get_header ();
get_sidebar();
?>
<div id="content">
<div class="inner-content">
<?php
if (have_posts ()) :
	// Start the Loop.
	while ( have_posts () ) :
		the_post ();

		/*
		 * Include the post format-specific template for the content. If you want to
		 * use this in a child theme, then include a file called called content-___.php
		 * (where ___ is the post format) and that will be used instead.
		 */
		get_template_part ( 'content', get_post_format () );
	endwhile
	;
 // Previous/next post navigation.

else :
	// If no content, include the "No posts found" template.
	get_template_part ( 'content', 'none' );


endif;
?>
</div>
</div>
<?php get_footer(); ?>