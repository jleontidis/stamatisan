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
<div id="post-<?php the_ID(); ?>" class="single-post">
<?php if(has_post_thumbnail()):?>
	<?php the_post_thumbnail(); ?>
<?php else: ?>
	<img src="http://placehold.it/1500x550" alt="placeholder" />
<?php endif; ?>
	<div class="container">
		<div class="single-post-content">
			<div class="post-title">
				<div class="row">
					<div class="col-md-6">
						<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
						<span>architecture / exterior</span>
					</div>
					<div class="col-md-6">
						<ul class="post-tags">
							<li>Author: <?php the_author_posts_link();?></li>
							<li>Category: <?php the_category(', ');?> </li>
							<li>Date: <?php the_time('F jS, Y');?></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="single-box-content">
				<?php the_content();?>
			</div>
			<?php edit_post_link( __( 'Edit', 'stamatisan' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</div>
</div>
