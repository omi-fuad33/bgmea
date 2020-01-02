<!-- naeeb's part -->
<h5 class="n_hr"></h5>
<button class="n_button">Activities</button>
<section class="o_after_slider_part">
    <div class="container">
        <div class="n_part3 row">
            <?php
            
            $counter = 1;
          $args = array('category_name' => 'activities',
                          'posts_per_page' => 3,

                      ); //start counter
                        $slider_query=new WP_Query($args); //Need this to make pagination work
                        ?>
                <?php
         if(have_posts()) :  while($slider_query->have_posts()) : $slider_query->the_post();

         $image_id = get_post_thumbnail_id();
         $image_url = wp_get_attachment_image_src($image_id, 'full', true);
      ?>
          
             <?php if($counter == 1) :?>
             <div class="n_actDiv col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <a class="n_a" href="<?php echo get_home_url(); ?>/activities/stories-to-tell/"><img class="n_imagePart3" src="<?php echo $image_url[0];?>" >
                    <h5 class="n_titleAct"><?php the_title(); ?></h5></a>
                    <br><br>
            </div>
            
            
              <?php elseif($counter == 2) :?>
             <div class="n_actDiv col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <a class="n_a" href="<?php echo get_home_url(); ?>/activities/we-belong-we-care/"><img class="n_imagePart3" src="<?php echo $image_url[0];?>" href="">
                    <h5 class="n_titleAct"><?php the_title(); ?></h5></a>
                    <br><br>
            </div>
            
              <?php elseif($counter == 3
                      ) :?>
             <div class="n_actDiv col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <a class="n_a" href="<?php echo get_home_url(); ?>/daily-digest/"><img class="n_imagePart3" src="<?php echo $image_url[0];?>" href="">
                    <h5 class="n_titleAct"><?php the_title(); ?></h5></a>
                    <br><br>
            </div>

              <?php
                $counter = 0;
                endif;
            ?>
        <?php
        $counter++;

         endwhile;
        endif;
            ?>
        <?php wp_reset_query(); ?>
        </div>
    </div>
</section>