<?php
   /*
       Template Name: FAQ
    */
   ?>

<?php
   get_header();
   ?>
<!-- The container which holds the content and rightside boxes -->
<div class="n_thatcontains container">


<!-- The row that holds the content and right boxes-->
   <div class="row">
       <!-- The Content of the page-->
      <div class="col-xl-9 col-lg-8 col-md-10">
          
         <?php
            while ( have_posts() ) : the_post(); 
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'full', true);
            
          
          ?>
         <img class= "n_im img-responsive" src="<?php echo $image_url[0]; ?>"><br><br>
          <p class="n_title"><?php the_title(); ?></p>
    
         <div class="n_contentFont"><?php the_content();?></div>
         <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>
          
      </div>
         <!-- The Content of the page ends here-->
       
       
    <!-- The right side boxes- apparel story, our story-->
      <div class="n_BoxMiddle col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">      

       
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
       <!-- The right side boxes- apparel story, our story ends-->
   </div>
    <!-- The row that holds the content and right boxes ends-->
</div>
<!-- The container which holds the content and rightside boxes ends -->

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
<!--
    <div class="n_lowerBox">
        <div class="row n_lowerDiv">

            <div class="n_lowerImage col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12" ><a href="<?php echo get_home_url(); ?>/faqs/"><img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/FAQ.png" alt="image not found"></a></div>
    
            <div class="n_lowerImage  col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12"><a href="#"><img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/Download.png" alt="image not found"></a></div>
    
            <div class="n_lowerImage col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12"><a href="#"><img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/Members.png" alt="image not found"> </a></div>
        </div>
        
</div>
-->

<!--The lower level boxes-- FAQ, Download.... ends-->

<?php
   get_footer();
   ?>