<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<img id="footer-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/logo-white.png'; ?>" alt="The Garden Logo" />
			<div class="footer-info">
				<div id="footer-address">
					<p><strong>ADDRESS</strong></p>
					<p>540 Cerritos Ave</p>
					<p>Long Beach, CA 90802</p>
				</div>
				<div id="footer-contact">
					<p><strong>CONTACT</strong></p>
					<p>Church Office:</p>
					<p><a href="tel:+15627264651">562.726.4651</a></p>
				</div>
				<div id="footer-gatherings">
					<p><strong>GATHERING</strong></p>
					<p>Sundays 9:15AM / 11:15AM</p>
					<p>Franklin Middle School</p>
				</div>
			</div><!-- .footer-info -->
			<div class="footer-social-media">
				<a href="https://twitter.com/thegardenlb"><div class="dashicons dashicons-twitter"></div></a>
				<a href="http://instagram.com/thegardenlb"><img src="<?php echo get_stylesheet_directory_uri() . '/img/instagram.png'; ?>" alt="Instagram Icon" /></a>
				<a href="https://www.facebook.com/thegardenlb"><div class="dashicons dashicons-facebook-alt"></div></a>
			</div><!-- .footer-social-media -->
		</div><!-- .site-info -->

		<div class="site-map">
			<a href="https://www.google.com/maps/place/540+Cerritos+Ave/@33.7740755,-118.1775336,17z/data=!3m1!4b1!4m2!3m1!1s0x80dd31146718036f:0x8b422397b99ef4d9"><img src="<?php echo get_stylesheet_directory_uri() . '/img/map.png'; ?>" alt="Google Map of 540 Cerritos Ave, Long Beach, CA 90802" /></a>
		</div><!-- .site-map -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
