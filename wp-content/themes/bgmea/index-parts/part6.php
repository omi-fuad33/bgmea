<!-- Omi's part -->
<section class="container o_front_gallery_section_wrapper">
<h2 class="o_gallery_section_header">Gallery</h2>
<div class="o_front_gallery_section_inner_wrapper">
    <div class="row">
        <div class="col-lg-8">
            <div class="gallery_slider_wrapper">
                        <?php dynamic_sidebar( 'front-page-gallery' ); ?>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="o_gallery_video_img col-lg-12 col-12 col-md-6">
                    <div class="video-container">
                            <?php dynamic_sidebar( 'front-page-video-1' ); ?>
                    </div>
                </div>
                <div class="o_gallery_video_img col-lg-12 col-12 col-md-6">
                    <div class="video-container">
                        <?php dynamic_sidebar( 'front-page-video-2' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
