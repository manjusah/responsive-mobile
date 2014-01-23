<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Widget Template
 *
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */


if( !is_active_sidebar( 'footer-widget' ) ) {
	return;
}
?>
	<?php responsive_widgets_before(); ?>
	<div id="footer_widget" class="widget-area grid col-940" role="complementary">
		<?php responsive_widgets(); ?>
		<?php if ( ! dynamic_sidebar( 'footer-sidebar' ) ) : ?>

			<?php dynamic_sidebar( 'footer-widget' ); ?>

		<?php endif; // end sidebar widget area ?>
		<?php responsive_widgets_end(); ?>
	</div><!-- #secondary -->
	<?php responsive_widgets_after(); ?>