<div class="d_slider">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">

        <?php
          $args = array('category_name' => 'feature',
                          'posts_per_page' => 3,

                      ); //start counter
                        $slider_query=new WP_Query($args); //Need this to make pagination work
                        ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner d_featured_slider">
      <?php
         if(have_posts()) :  while($slider_query->have_posts()) : $slider_query->the_post();

         $image_id = get_post_thumbnail_id();
         $image_url = wp_get_attachment_image_src($image_id, 'large', true);
      ?>
      <div class="d_carousel_box carousel-item <?php if($slider_query->current_post == 0) : ?>active<?php endif; ?>">
         <img class="d_slider_img" src="<?php echo $image_url[0]; ?>">
          <div class="carousel-caption d-md-block">
              <h5 class="d_feature_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          </div>
       </div>
      <?php endwhile;
        endif;
            ?>
      <?php wp_reset_query(); ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="col-sm-12 col-md-4 d_apparel_img_div d-none d-md-block">
  <?php $image_id = get_post_thumbnail_id(212);
        $image_url = wp_get_attachment_image_src($image_id, 'full', true);
   ?>
   <img class="d_apparel_img" src="<?php echo $image_url[0]; ?>">

</div>
</div>
  </div>
  </div>
