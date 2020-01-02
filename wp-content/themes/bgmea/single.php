<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bgmea
 */

get_header();
?>

	<div class="container">
			<div class="d_single">
				<div class="row">
					<div class="d-none d-md-block col-md-2 col-lg-2">
						<?php $category = get_the_category(); ?>
							<p class="d_single_cat"> <?php $firstCategory = $category[0]->cat_name; echo $firstCategory;?></p>
									<p class="d_single_date"><?php echo get_the_date(); ?> , <?php echo get_the_time(); ?></p>
									<p class="d_last-modified">Last modified: <?php echo get_the_modified_date(); ?> , <?php echo get_the_modified_time(); ?></p>
									<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
					</div>
					<div class="col-sm-12 col-md-10 col-lg-7">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

						endwhile; // End of the loop.
						?>
					</div>
						<div class="n_BoxMiddle col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">


		<div class="n_president_box_wrap n_apparelBox">
              <?php $image_id = get_post_thumbnail_id(212);
             $image_url = wp_get_attachment_image_src($image_id, 'full', true);?>
            <a href="#"><img class="n_media_section_president_img_apparel" src="<?php echo $image_url[0]; ?>">
<!--                <p class="n_president_statement_link">Apparel Story</p>-->
              </a>
         </div>
                                                   
     
         <div class="n_dailyBox n_president_box_wrap">
            <a href="<?php echo get_home_url(); ?>/daily-digest/"><img class="n_media_section_president_img n_media_section_our_team_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/daily-digest-min.jpg" alt="image not found">
           
                <p class="n_president_statement_link">Daily Digest</p></a>
         </div>
         
         <div class="n_dailyBox n_president_box_wrap">
            <a href="<?php echo get_home_url(); ?>/activities/stories-to-tell/"><img class="n_media_section_president_img n_media_section_our_team_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/stories-to-tell-min.jpg" alt="image not found">
                <p class="n_president_statement_link">Stories to tell</p></a>
         </div>
						</div>
					</div>

	</div><!-- #primary -->
</div>

    <!-- The right side boxes- JUST FOR IPAD/MEDIUM SCREEN-->
  <div class="row n_newBox">      
                                                   
     
         <div class="n_newBox n_dailyBox">
            <a href="<?php echo get_home_url(); ?>/daily-digest/"><img class="n_media_section_president_img n_media_section_our_team_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/daily-digest-min.jpg" alt="image not found">
           
                <p class="n_president_statement_link">Daily Digest</p></a>
         </div>
         
         <div class="n_newBox n_dailyBox">
            <a href="<?php echo get_home_url(); ?>/activities/stories-to-tell/"><img class="n_media_section_president_img n_media_section_our_team_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/stories-to-tell-min.jpg" alt="image not found">
            <p class="n_president_statement_link">Stories to tell</p></a>
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
