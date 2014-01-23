<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Gallery Widget Template
 *
 *
 * @file           sidebar-gallery.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-gallery.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div id="widgets" class="widget-area grid col-300 fit gallery-meta" role="complementary">
		<?php responsive_widgets(); // above widgets hook ?>
		<aside class="widget-wrapper">

			<h1 class="widget-title"><?php _e( 'Image Information', 'responsive' ); ?></h1>
			<ul>
				<?php $responsive_data = get_post_meta( $post->ID, '_wp_attachment_metadata', true ); ?>
				<?php if( is_array( $responsive_data ) ) : ?>
					<span class="full-size"><?php _e( 'Full Size:', 'responsive' ); ?> <a href="<?php echo wp_get_attachment_url( $post->ID ); ?>"><?php echo $responsive_data['width'] . '&#215;' . $responsive_data['height']; ?></a>px</span>

					<?php if( is_array( $responsive_data['image_meta'] ) ) : ?>
						<?php if( $responsive_data['image_meta']['aperture'] ) : ?>
							<span class="aperture"><?php _e( 'Aperture: f&#47;', 'responsive' ); ?><?php echo $responsive_data['image_meta']['aperture']; ?></span>
						<?php endif; ?>

						<?php if( $responsive_data['image_meta']['focal_length'] ) : ?>
							<span class="focal-length"><?php _e( 'Focal Length:', 'responsive' ); ?> <?php echo $responsive_data['image_meta']['focal_length']; ?><?php _e( 'mm', 'responsive' ); ?></span>
						<?php endif; ?>

						<?php if( $responsive_data['image_meta']['iso'] ) : ?>
							<span class="iso"><?php _e( 'ISO:', 'responsive' ); ?> <?php echo $responsive_data['image_meta']['iso']; ?></span>
						<?php endif; ?>

						<?php if( $responsive_data['image_meta']['shutter_speed'] ) : ?>
							<span class="shutter"><?php _e( 'Shutter:', 'responsive' ); ?>
								<?php if( ( 1 / $responsive_data['image_meta']['shutter_speed'] ) > 1 ) {
									echo "1/";
									if( number_format( ( 1 / $responsive_data['image_meta']['shutter_speed'] ), 1 ) == number_format( ( 1 / $responsive_data['image_meta']['shutter_speed'] ), 0 ) ) {
										echo number_format( ( 1 / $responsive_data['image_meta']['shutter_speed'] ), 0, '.', '' ) . ' sec';
									} else {
										echo number_format( ( 1 / $responsive_data['image_meta']['shutter_speed'] ), 1, '.', '' ) . ' sec';
									}
								} else {
									echo $responsive_data['image_meta']['shutter_speed'] . ' sec';
								} ?>
							</span>
						<?php endif; ?>

						<?php if( $responsive_data['image_meta']['camera'] ) : ?>
							<span class="camera"><?php _e( 'Camera:', 'responsive' ); ?> <?php echo $responsive_data['image_meta']['camera']; ?></span>
						<?php endif;?>
					<?php endif; ?>
				<?php endif; ?>
			</ul>

		</aside><!-- .widget-wrapper -->
	</div><!-- #widgets -->

<?php if( !is_active_sidebar( 'gallery-widget' ) ) {
	return;
} ?>

<?php if( is_active_sidebar( 'gallery-widget' ) ) : ?>

	<div id="widgets" class="widget-area grid col-300 fit" role="complementary">

		<?php responsive_widgets(); // above widgets hook ?>

		<?php dynamic_sidebar( 'gallery-widget' ); ?>

		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #widgets -->
	<?php responsive_widgets_after(); // after widgets container hook ?>

<?php endif; ?>