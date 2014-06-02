<?php
/**
 * Footer Template
 *
 * The template for displaying the footer
 *
 * @package      ${PACKAGE}
 * @license      license.txt
 * @copyright    ${YEAR} ${COMPANY}
 * @since        ${VERSION}
 *
 * Please do not edit this file. This file is part of the ${PACKAGE} Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>

<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_bottom();?>

<footer id="footer" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
	<?php responsive_footer_top(); ?>
	<div id="footer-wrapper">

		<div id="footer-widgets-container">
			<?php get_sidebar( 'footer' ); ?>
		</div><!-- #footer-widgets-container-->

		<div id="menu-social-container">
			<nav id="footer-menu-container">
				<?php if ( has_nav_menu( 'footer-menu', 'responsive' ) ) {
					wp_nav_menu(
						array(
							'container'      => '',
							'fallback_cb'    => false,
							'menu_class'     => 'footer-menu',
							'theme_location' => 'footer-menu',
							'depth'          => 1
						)
					);
				} ?>
			</nav><!-- #footer-menu -->
			<div id="social-icons-container">
				<?php echo responsive_get_social_icons() ?>
			</div><!-- #social-icons-container-->
		</div><!-- #menu-social-container -->

		<?php get_sidebar( 'colophon' ); ?>

		<div id="footer-base">
			<div class="copyright">
				<?php
					$copyright_text = '&copy; ' . date( 'Y' ) . ' <a href="' . home_url( '/' ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">' . esc_attr( get_bloginfo( 'name' ) ) . '</a>';
				$copyright_text = apply_filters( 'responsive_copyright_text', $copyright_text );
				echo $copyright_text;
				?>
			</div><!-- .copyright -->

			<div class="powered">
				<?php
					$powered_by_text = sprintf(
						/* Translators: Responsive Theme powered by WordPress */
						__( '%1$s powered by %2$s', 'responsive' ),
						'<a href="' . esc_url( 'http://cyberchimps.com/responsive-theme/' ) . '">' . __( 'Responsive Theme', 'responsive' ) . '</a>',
						'<a href="' . esc_url( 'http://wordpress.org/' ) . '">' . __( 'WordPress', 'responsive' ) . '</a>'
					);
					$powered_by_text = apply_filters( 'responsive_powered_by_text', $powered_by_text );
					echo $powered_by_text;
				?>
			</div><!-- end .powered -->

			<div class="scroll-top">
				<a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a>
			</div><!-- .scroll-top -->
		</div><!-- #footer-base -->
	</div><!-- #footer-wrapper -->
	<?php responsive_footer_bottom(); ?>
</footer><!-- #footer -->
<?php responsive_footer_after(); ?>
</div><!-- #page -->
<?php responsive_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
