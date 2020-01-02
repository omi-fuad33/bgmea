<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bgmea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!--css stylesheet block START -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- css stylesheet block ENDS -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="masthead" class="site-header">
	<div class="container">
		<div class="row">
			<div class="col-5 col-sm-6">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/css/images/BGMEA_Logo.png" class="header-logo"></a>
			</div>
			<div class="col-7 col-sm-6 d_social">
				<div class="d_s_media">
				<a href="https://www.facebook.com/BGMEA.official/" target="_blank"><i class="fa fa-facebook-square d_s_icon"></i></a>
				<a href="https://www.linkedin.com/company/13268451/admin/" target="_blank"><i class="fa fa-twitter-square d_s_icon"></i></a>
				<a href="https://instagram.com/brandbgmea?igshid=u2m5b975u82k"><i class="fa fa-instagram d_s_icon"></i></a>
				<a href="https://twitter.com/brandbgmea"><i class="fa fa-linkedin d_s_icon"></i></a>
				<a href="https://www.youtube.com/channel/UCVhQMYrp0X1z24DdqMGVagw" target="_blank"><i class="fa fa-youtube-square d_s_icon"></i></a>
				</div>
				<div class="d_below_social">
					<p><a href="<?php echo get_home_url(); ?>/faqs/" target="_blank">FAQs</a></p>
					<p><a href="#o_contact">CONTACT</a></p>
					<p><a href="#">DOWNLOAD</a></p>
					<img src="<?php echo get_template_directory_uri(); ?>/css/images/search.png" class="d-none d-sm-block d_search_img">
				</div>
				<div class="d-none d-sm-block d_search_pos">
						<?php get_search_form(); ?>
				</div>

				<!-- <form class="d_form_wrapper">
				  <input type="text" name="search" placeholder="">
					<img src="<?php echo get_template_directory_uri(); ?>/css/images/search.png" class="header-logo">
				</form> -->

			</div>
		</div>
		<div class="row d_top_menu" id="d_top_menu">
			<div class="col-sm-12 d_top_menu_style">
				<?php wp_nav_menu( array(
			'theme_location' => 'primary-menu') ); ?>
			</div>

		</div>
	</div>
</header><!-- #masthead -->
