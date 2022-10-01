<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
		
		// if it’s a header, go through the data
			if( get_row_layout() == 'header' ): ?>

		<!-- here we grab our header (image and title,subtitle etc) from it's own content-header file -->
			<?php get_template_part('template-parts/content-header'); ?>

			<!-- if it’s a text component, show us the data -->
		<?php elseif( get_row_layout() == 'text_block' ): ?>

		<!-- here we grab our text blocks from it's own content-text file -->
			<?php get_template_part('template-parts/content-text'); ?>

				<!-- if it’s a gallery component, show us the data -->
		<?php elseif (get_row_layout() == 'gallery'): ?>	

			<!-- here we put in our gallery component from a separate file -->
			<?php get_template_part('template-parts/content-gallery'); ?>

			<?php endif; 
		endwhile; endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<!-- here we have our social link component -->
		<?php get_template_part('template-parts/content-share'); ?>
		<!-- here we grab our 'explore' component from its own file -->
		<?php get_template_part('template-parts/content-explore'); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
