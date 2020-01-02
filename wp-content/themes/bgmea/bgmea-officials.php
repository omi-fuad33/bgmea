<?php
/* Template Name: bgmea-officials */

get_header();
?>

<div class="container d_directors">
            <h2>bgmea officials</h2>
            <div class="row">
              <div class="col-sm-12 col-md-9">
    <div class="tab-block" id = "tab-block">
      <ul class="tab-mnu">
        <li class = "active" >Dhaka</li>
        <li>Chattogram</li>
      </ul>

      <div class="tab-cont">
        <div class="tab-pane">
          <img src="<?php echo get_template_directory_uri(); ?>/css/images/dhk-1.jpg" alt="Dhaka">
        </div>
        <div class="tab-pane">
            <img src="<?php echo get_template_directory_uri(); ?>/css/images/ctg-1.jpg" alt="Ctg">
        </div>

      </div>

    </div>

  </div>
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
<!-- The right side boxes- JUST FOR IPAD/MEDIUM SCREEN ends-->

<br><br><br>

<!--The lower level boxes-- FAQ, Download....-->
<div class="n_lowerBox">
    <div class="row n_lowerDiv">

        <div class="n_lowerImage col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12" ><a href="#"><img class="" src="http://localhost/bgmea/wp-content/uploads/2019/12/FAQ.png" alt="image not found"></a></div>

        <div class="n_lowerImage  col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12"><a href="#"><img class="" src="http://localhost/bgmea/wp-content/uploads/2019/12/Download.png" alt="image not found"></a></div>

        <div class="n_lowerImage col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12"><a href="www.facebook.com"><img class="" src="http://localhost/bgmea/wp-content/uploads/2019/12/Members.png" alt="image not found"> </a></div>
    </div>

</div>

  <?php
  get_footer();
