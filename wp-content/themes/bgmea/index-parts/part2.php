<!-- naeeb's part -->
<section class="o_after_slider_part">
    <div class="container">
    <div class="row">
        <?php
          $counter = 1;
          $args = array('category_name' => 'static content',
                          'posts_per_page' => 3,

                      ); //start counter
                        $slider_query=new WP_Query($args); //Need this to make pagination work
                        ?>
         <?php
         if(have_posts()) :  while($slider_query->have_posts()) : $slider_query->the_post();

         $image_id = get_post_thumbnail_id();
         $image_url = wp_get_attachment_image_src($image_id, 'large', true);
      ?>
        <?php if($counter == 1) :?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <img class="n_imagePart2" src="<?php echo $image_url[0];?>">
            <h5 class="n_titlePart2"><?php the_title(); ?></h5>
            <h6 class="n_excerpt"><?php the_excerpt(); ?></h6>
            <button type="button" class="btn btn-dark n_details"><a class="n_a" href="<?php echo get_home_url(); ?>/bgmea-at-a-glance/">Details</a></button><br><br><br>
        </div>
        
        <?php elseif($counter == 2) : ?>
        
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <img class="n_imagePart2" src="<?php echo $image_url[0];?>">
            <h5 class="n_titlePart2"><?php the_title(); ?></h5>
            <h6 class="n_excerpt"><?php the_excerpt(); ?></h6>
            <button type="button" class="btn btn-dark n_details n_buttonTop2"><a class="n_a" href="<?php echo get_home_url(); ?>/investment-trade/bd-rmg-sector-at-a-glance/">Details</a></button><br><br><br>
        </div>
        
        <?php elseif($counter == 3) : ?>
        
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <img class="n_imagePart2" src="<?php echo $image_url[0];?>">
            <h5 class="n_titlePart2"><?php the_title(); ?></h5>
            <h6 class="n_excerpt"><?php the_excerpt(); ?></h6>
            <button type="button" class="btn btn-dark n_details n_buttonTop"><a class="n_a" href="#">Details</a></button><br><br><br>
        </div>
        
        
                <?php
                $counter = 0;
                endif;
            ?>
        <?php
        $counter++;
        endwhile; 
   //Pagination can go here if you want it.
        endif;
            ?>
      <?php wp_reset_query(); ?>
    </div>
    </div>
</section>
