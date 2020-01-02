<?php
/* Template Name: Office-bearers */

get_header();
?>
    <?php
    $queried_post = get_post(210);
    $content1 = $queried_post->post_content;
     ?>

<div class="container d_office-bearers">
        <h2>office bearers</h2>
  <div class="row  d_ob_1">
    <div class="col-sm-12 col-md-8">
      <?php
         $args = array(
             'category_name'     => 'ofc-bearer',
             'posts_per_page'    => 20
         );
         $the_query = new WP_Query($args);
         ?>
      <?php if($the_query->have_posts()): ?>
      <?php while($the_query->have_posts()): $the_query->the_post(); ?>
      <div class="col-xs-12 col-sm-12 col-md-12 d_d_img">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <figure> <?php the_post_thumbnail( 'fimage', array('class' => 'd_image') ); ?></figure>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="d_ob_details">
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>

      </div>
         <?php endwhile; ?>
       <?php endif; ?>
       <?php wp_reset_postdata(); ?>

    </div>

       <div class="n_BoxMiddle col-md-4 col-sm-12 col-12">


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
