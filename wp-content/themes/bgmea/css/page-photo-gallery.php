<?php 
    /* Template Name: Photo Gallery Page */ 
?>
<?php
get_header();
?>
<section class="o_media_section container">
    <div class="">
    <h3 class="o_media_headline">Photo Gallery</h3>
    <div class="row">
        <div class="col-lg-9">
            <?php
            $currentPage = get_query_var('paged');
            $args = array('category_name' => 'photo-gallery',
                          'posts_per_page' => 12,
                          'paged' => $currentPage,

                      ); //start counter
            // Variable to call WP_Query.
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) :
                // Start the Loop
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="o_media_section_post_wrap row">
            <?php
                $image_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($image_id, 'full', true); 
            ?>
            <div class="col-lg-4 o_gallery_post_wrap">
                <img class="o_media_section_img" src="<?php echo $image_url[0]; ?>">
                <div class="o_media_section_title_wrap">
                    <h5 class="o_media_section_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                </div>
            </div>
            </div>
            <?php endwhile; ?>
            <div class="o_pagination_links">
                 <?php echo paginate_links(array(
                'total' => $the_query->max_num_pages
                )); ?>
            </div>
            <?php
                  endif;
            ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="col-lg-3 o_media_section_right_sidebar">
            <div class="o_president_box_wrap">
                <img class="o_media_section_president_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/11/ruban.jpg" alt="image not found">
                <p class="o_president_statement_link">President's Statement</p>
            </div>
            <div class="o_president_box_wrap">
                <img class="o_media_section_president_img o_media_section_our_team_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/11/BGMEA_2.jpg" alt="image not found">
                <p class="o_president_statement_link">Our Team</p>
            </div>
            <div class="o_president_box_wrap o_election_box_wrap">
                <img class="o_media_section_president_img o_media_section_election_img" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/11/daily_sun_BGMEA-Election-2019-2021-jp_picture.jpg" alt="image not found">
            </div>
        </div>
    </div>
    </div>
</section>
<?php
get_footer();
