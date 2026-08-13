<?php

/**
* Layout of Sef Gallery Section.
**/

// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

$sef_gallery_background_color = get_field("sef_gallery_background_color");
$sef_gallery_heading = get_field('sef_gallery_heading');
$sef_gallery_style = get_field('sef_gallery_style');
$sef_video_grids = get_field('sef_video_grids');
$sef_gallery_images = get_field('sef_gallery_images');

?>


<!-- Exploring Nautobot Sandboxes section starts -->
<section class="nautobot-video" style="background: <?php echo $sef_gallery_background_color; ?>">
  <div class="container">
    <div class="row g-lg-4">
      <?php if (!empty($sef_gallery_heading)) { ?>
      <div class="col-md-12 title-box mb-2">
        <h2 class="section-title"><?php echo $sef_gallery_heading; ?></h2>
      </div>
      <?php } ?>

      <?php if ($sef_gallery_style === 'Post Video') { ?>
        <?php 
                $videos = get_posts(array(
                "status" => "publish",
                "post_type" => "videos",
                "posts_per_page" => "40",
                "orderby"   => "DATE",
                "order"     => "DESC"
                ));

                //echo "<pre> ";
                //print_r($courses);
                if( $videos ):
          ?>

          <?php foreach( $videos as $video ): ?>
          <?php
            //echo "<pre>";
            //print_r($current_opening);
            $youtube_link = get_field('youtube_link', $video->ID); 
          ?>
          <div class="col-md-4 col-sm-6">
            <div class="video-box">
            <?php if (!empty($youtube_link)) { ?>
              <a
                data-fancybox="gallery"
                data-caption="<?php if (!empty($sef_video_title)) { echo $sef_video_title; } ?>"
                href="<?php echo $youtube_link; ?>"
              >
              <?php } ?>
                <div class="position-relative">
                  <img
                    class="img-fluid w-100"
                    src="<?php echo get_the_post_thumbnail_url($video->ID); ?>"
                  />
                  <div class="video-overlay">
                    <span><i class="bi bi-play-circle-fill"></i></span>
                  </div>
                </div>
                 <span class="blog-date"><i class="bi bi-calendar3"></i> <?php echo get_the_date('d-M-Y', $video->ID) ?></span>
                <h5 class="video-title">
                  <?php echo get_the_title($video->ID); ?>
                </h5>
               
              <?php if (!empty($youtube_link)) { ?>
              </a>
              <?php } ?>
            </div>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      <?php } ?>


      <?php if ($sef_gallery_style === 'Video') { ?>
        <?php 
            foreach ($sef_video_grids as $sef_video_grids) {            
            $youtube_video = $sef_video_grids['youtube_video'];
            $sef_video_thumbnail = $sef_video_grids['sef_video_thumbnail'];
            $sef_video_title = $sef_video_grids['sef_video_title'];
        ?>
          <div class="col-md-4 col-sm-6">
            <div class="video-box">
            <?php if (!empty($youtube_video)) { ?>
              <a
                data-fancybox="gallery"
                data-caption="<?php if (!empty($sef_video_title)) { echo $sef_video_title; } ?>"
                href="<?php echo $youtube_video; ?>"
              >
              <?php } ?>
                <?php if (!empty($sef_video_thumbnail)) { ?>
                <div class="position-relative">
                  <img
                    class="img-fluid w-100"
                    src="<?php echo $sef_video_thumbnail['url']; ?>"
                  />
                  <div class="video-overlay">
                    <span><i class="bi bi-play-circle-fill"></i></span>
                  </div>
                </div>
                <?php } ?>
                <?php if (!empty($sef_video_title)) { ?>
                <h5 class="video-title">
                  <?php echo $sef_video_title; ?>
                </h5>
                <?php } ?>
              <?php if (!empty($youtube_video)) { ?>
              </a>
              <?php } ?>
            </div>
          </div>
        <?php } ?>
      <?php } ?>

      <?php if ($sef_gallery_style === 'Image') { ?>
        
        <?php 
            foreach ($sef_gallery_images as $sef_gallery_images) {            
            $sef_gallery_image = $sef_gallery_images['sef_gallery_image'];
            
        ?>
        <div class="col-md-4 col-sm-6">
          <div class="video-box">
            <a
            data-fancybox="gallery"
            data-caption="Introduction to Nautobot Always-on Sandboxes"
            href="<?php echo $sef_gallery_image['url']; ?>"
            >
            <div class="position-relative">
              <img
              class="img-fluid w-100 img-shadow"
              src="<?php echo $sef_gallery_image['url']; ?>"
              />
              <div class="img-overlay-btn">
              <span><i class="bi bi-arrows-fullscreen"></i></span>
              </div>
            </div>
            </a>
          </div>
        </div>
        <?php } ?>

      <?php } ?>
      
    
    </div>
  </div>
</section>