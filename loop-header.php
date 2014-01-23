<?php
/**
 * @package Responsive
 */

/**
 * Display breadcrumb
 */
get_responsive_breadcrumb_lists();

/**
 * Display archive information
 */
if( is_category() || is_tag() || is_author() || is_date() ) : ?>
	<header class="page-header">
		<h1 class="title-archive">
			<?php responsive_archive_title(); ?>
		</h1>
		<?php
			// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) {
				printf( '<div class="taxonomy-description">%s</div>', $term_description );
			}
		?>
	</header><!-- .page-header -->
<?php endif;

/**
 * Display Search information
 */
if( is_search() ) : ?>
	<header class="page-header">
		<h1 class="page-title title-search-results"><?php printf( __( 'Search Results for: %s', 'responsive' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->
<?php endif;