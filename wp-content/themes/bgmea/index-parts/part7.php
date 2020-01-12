<!-- naeeb's part -->

<!--The lower level boxes-- FAQ, Download....-->
    
<div class="row"><div class="col-sm-12 col-md-4 d_apparel_img_div d-md-none">
 <?php $image_id = get_post_thumbnail_id(212);
       $image_url = wp_get_attachment_image_src($image_id, 'full', true);
  ?>
  <img class="d_apparel_img" src="<?php echo $image_url[0]; ?>">

</div>
    </div>

<div class="n_lowerBox">
        <div class="row n_lowerDiv">

            <div class="n_lowerImage col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12" ><a href="<?php echo get_home_url(); ?>/bgmea/faqs"><img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/FAQ.png" alt="image not found"></a></div>
    
            <div class="n_lowerImage  col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12"><a href="#"><img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/Download.png" alt="image not found"></a></div>
    
            <div class="n_lowerImage col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12"><a href="#"><img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/12/Members.png" alt="image not found"> </a></div>
        </div>
        
</div>