<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bgmea
 */

get_header();
?>
<div class="container d_search_page">
	<div class="row">
			<div class="col-12 col-sm-12 col-md-9">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'bgmea' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="row d_search_margin">
									<div class="col-4 col-sm-4 col-md-4">
										<?php
										$image_id = get_post_thumbnail_id();
										$image_url = wp_get_attachment_image_src($image_id, 'large', true);
										 ?>
										<img class="d_search_page_img" src="<?php echo $image_url[0]; ?>">
									</div>
									<div class="col-8 col-sm-8 col-md-8">
										<p class="d_search-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
										<p class="d_search_date"><?php echo get_the_date(); ?></p>
									</div>
								</div>
							<?php endwhile; ?>

            <?php //the_posts_navigation(); ?>

        <?php else : ?>

            <?php //get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
			</div>
			<!-- The right side boxes- apparel story, our story-->
	      <div class="n_BoxMiddle col-md-3 col-sm-12 col-12">


	          <div class="n_president_box_wrap n_apparelBox">
	              <?php $image_id = get_post_thumbnail_id(212);
	             $image_url = wp_get_attachment_image_src($image_id, 'full', true);?>
	            <a href="#"><img class="n_media_section_president_img_apparel" src="<?php echo $image_url[0]; ?>">
	<!--                <p class="n_president_statement_link">Apparel Story</p>-->
	              </a>
	         </div>


	         <div class="n_dailyBox n_president_box_wrap">
	            <a href="#"><img class="n_media_section_president_img n_media_section_our_team_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/11/BGMEA_2.jpg" alt="image not found">

	                <p class="n_president_statement_link">Daily Digest</p></a>
	         </div>

	         <div class="n_dailyBox n_president_box_wrap">
	            <a href="#"><img class="n_media_section_president_img n_media_section_our_team_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/11/BGMEA_2.jpg" alt="image not found">
	                <p class="n_president_statement_link">Our Team</p></a>
	         </div>
	      </div>
</div>
</div>

<div class="row n_newBox">


			 <div class="n_newBox n_dailyBox">
					<a href="#"><img class="n_media_section_president_img n_media_section_our_team_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/11/BGMEA_2.jpg" alt="image not found">

							<p class="n_president_statement_link">Daily Digest</p></a>
			 </div>

			 <div class="n_newBox n_dailyBox">
					<a href="#"><img class="n_media_section_president_img n_media_section_our_team_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/11/BGMEA_2.jpg" alt="image not found">
					<p class="n_president_statement_link">Our Team</p></a>
			 </div>
		</div>
<!-- The right side boxes- JUST FOR IPAD/MEDIUM SCREEN ends-->

<br><br><br>

<!--The lower level boxes-- FAQ, Download....-->
	<div class="n_lowerBox">
			<div class="row n_lowerDiv">

					<div class="n_lowerImage col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12" ><a href="#"><img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/FAQ.png" alt="image not found"></a></div>

					<div class="n_lowerImage  col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12"><a href="#"><img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/Download.png" alt="image not found"></a></div>

					<div class="n_lowerImage col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12"><a href="www.facebook.com"><img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/Members.png" alt="image not found"> </a></div>
			</div>

</div>


<?php
get_footer();
