<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage stamatis_theme
 * @since Stamatis 1.0
 */
?>
<div id="post-<?php the_ID(); ?>" class="item project-post">
	<?php the_post_thumbnail(); ?>
		<div class="hover-box">
		<div class="hover-content">
			<a href="<?php the_permalink(); ?>"></a>
			<h2><?php the_title(); ?></h2>
			<!-- Print Category?? -->
			<p>architecture / exterior</p>
			<?php edit_post_link( __( 'Edit', 'stamatisan' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</div>
</div>

