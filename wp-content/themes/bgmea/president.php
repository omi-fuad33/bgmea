<?php
/* Template Name: President */

get_header();
?>
<div class="container d_president_wrapper">
        <h2>President's Profile</h2>
  <div class="row  d_president">
        <div class="col-sm-12 col-md-4 d_pre_img_det">
      <?php
                $post_id = 195;
                $queried_post = get_post($post_id);
                $content = $queried_post->post_content;
                $image_id = get_post_thumbnail_id(195);
        $image_url = wp_get_attachment_image_src($image_id, 'full', true);?>

           <img class="img-responsive"  src="<?php echo $image_url[0]; ?>"><br><br>
           <div class="d_president_details">
             <h3>Dr. Rubana Huq</h3>
             <p>President, BGMEA &</p>
             <p>Managing Director, Mohammadi Group Ltd.</p>
             <p>57, Joar Sahara C/A, Nikunja-2</p>
            <p>New Airport Road, Dhaka</p>
             <p>Tel: 8802-8952704</p>
             <p>Email: president@bgmea.com,</p>
             <p>rubana@mohammadigroup.com</p>
           </div>
    </div>
    <div class="col-sm-12 col-md-8">
      <div class="d_president_content"><?php echo $content;?></div>
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


<?php
get_footer();
