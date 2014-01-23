<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Responsive
 */

get_header(); ?>

	<div id="content" class="content-area">
		<main id="main" class="site-main <?php echo responsive_get_content_classes(); ?>" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php responsive_comments_before(); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template( '', true );
				endif;
			?>
			<?php responsive_comments_after(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>