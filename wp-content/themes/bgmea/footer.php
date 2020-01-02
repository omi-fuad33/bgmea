<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bgmea
 */

?>

	</div><!-- #content -->

	<footer id="o_contact" class="o_site_footer_container container-fluid">
		<div class="container o_footer_container">
			<div class="row">
				<div class="col-lg-3">
					<h6 class="o_footer_head">Contact</h6>
					<p class="o_footer_para_text"><span class="o_footer_marker_img"><img src="<?php echo get_template_directory_uri(); ?>/css/images/location-trade.png" alt="image not found"></span>BGMEA Bhavan</p>
					<p class="o_footer_para_text" style="margin-top: -32px;"><span style="padding-left: 37px;">Sector 17, Uttara</span><br><span style="padding-left: 37px;">Dhaka-1000, Bangladesh</span></p>
					<p class="o_footer_para_text"><span class="o_footer_marker_img"><img style="height: 28px;" src="<?php echo get_template_directory_uri(); ?>/css/images/phone-512.png" alt="image not found"></span>Phone: +880 2 9523652</p>
					<p class="o_footer_para_text o_footer_text_tab">+880 17 218 927<br> +880 17 555 367</p>
					<p class="o_footer_para_text"><span class="o_footer_marker_img"><img style="height: 28px;" src="<?php echo get_template_directory_uri(); ?>/css/images/mail-icon.png" alt="image not found"></span>Email: contact@bgmea.com.bd</p>
					<p class="o_footer_para_text o_footer_text_tab" style="margin-left: 80px; margin-top: -27px;">info@bgmea.com.bd</p>
				</div>
				<div class="col-lg-7">
				<div style="width: 100%"><iframe width="100%" height="240" src="https://maps.google.com/maps?width=100%&amp;height=240&amp;hl=en&amp;q=BGMEA%20New%20Building%20%E0%A6%AC%E0%A6%BF%E0%A6%9C%E0%A6%BF%E0%A6%8F%E0%A6%AE%E0%A6%87%E0%A6%8F%20%E0%A6%A8%E0%A6%A4%E0%A7%81%E0%A6%A8%20%E0%A6%AD%E0%A6%AC%E0%A6%A8+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">find my location</a></iframe></div><br />
				</div>
				<div class="col-lg-2">
					<h6 class="o_footer_head o_footer_head_right">Quick Links</h6>
					<div class="footer_nav_container">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
			</div>
			<div class="col-lg-3 d_social">
				<div class="d_s_media">
					<a href="https://www.facebook.com/BGMEA.official/" target="_blank"><i class="fa fa-facebook-square d_s_icon"></i></a>
					<a href="https://www.linkedin.com/company/13268451/admin/" target="_blank"><i class="fa fa-twitter-square d_s_icon"></i></a>
					<a href="https://instagram.com/brandbgmea?igshid=u2m5b975u82k"><i class="fa fa-instagram d_s_icon"></i></a>
					<a href="https://twitter.com/brandbgmea"><i class="fa fa-linkedin d_s_icon"></i></a>
					<a href="https://www.youtube.com/channel/UCVhQMYrp0X1z24DdqMGVagw" target="_blank"><i class="fa fa-youtube-square d_s_icon"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<div class="o_footer_omnispace">
			Allrights Reserved | Developed By: <a class="o_footer_omnispace_link" href="http://omnispace.co">Omnispace</a>
		</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
