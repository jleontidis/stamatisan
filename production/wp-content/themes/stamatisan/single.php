<?php
/**
 * The template for displaying single posts
 *
 *
 * @package WordPress
 * @subpackage stamatis_theme
 * @since Stamatis 1.0
 */
get_header ();
get_sidebar ();
?>
	<!-- content
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="single-page">
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
			get_template_part ( 'content-post', get_post_format () );
		endwhile
		;


	else :
		// If no content, include the "No posts found" template.
		get_template_part ( 'content', 'none' );


	endif;
	?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>