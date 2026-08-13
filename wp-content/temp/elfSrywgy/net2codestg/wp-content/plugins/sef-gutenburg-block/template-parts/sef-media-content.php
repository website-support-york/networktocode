<?php

/**
* Layout of sef Media and Content.
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

$sef_media_content_style = get_field('sef_media_content_style');
$sef_media_content_image = get_field('sef_media_content_image');
$sef_media_content_title = get_field('sef_media_content_title');
$sef_media_content_sub_title = get_field('sef_media_content_sub_title');
$sef_media_content_description = get_field('sef_media_content_description');
$sef_media_content_button = get_field('sef_media_content_button');

$sef_media_content_logos = get_field('sef_media_content_logo');

$sef_media_content_bg_color = get_field('sef_media_content_bg_color');
$sef_media_main_title = get_field('sef_media_main_title');
$sef_media_iframe = get_field('sef_media_iframe');
$sef_iframe_position = get_field('sef_iframe_position');
$sef_media_content_heading = get_field('sef_media_content_heading');
$sef_media_content_text = get_field('sef_media_content_text');
$sef_media_content_buttons = get_field('sef_media_content_buttons');

?>

<?php if ($sef_media_content_style === 'Style 1') { ?>

  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> community" style="background-color: <?php echo $sef_media_content_bg_color; ?>">
    <div class="container">
      <div class="row">
        <div
        class="col-md-7 text-mb-center wow animate__animated animate__fadeIn delay3"
        >
        <?php if (!empty($sef_media_content_title)) { ?><h3 class="section-title mb-title"><?php echo $sef_media_content_title; ?></h3><?php } ?>
        <?php if (!empty($sef_media_content_image)) { ?>
          <img
          src="<?php echo $sef_media_content_image['url'] ?>"
          class="img-fluid"
          alt="ntc img"
          />
        <?php } ?>
      </div>
      <div class="col-md-5 d-flex justify-content-center align-item-center">
        <div
        class="community-content title-box text-start wow animate__animated animate__fadeInUp delay3"
        >
        <?php if (!empty($sef_media_content_title)) { ?><h3 class="section-title"><?php echo $sef_media_content_title; ?></h3><?php } ?>
        

        <?php if( have_rows('sef_media_content_descriptions') ): ?>
          <div
          class="community-content title-box text-start wow animate__animated animate__fadeInUp delay3"
          >
          <?php if( have_rows('sef_media_content_descriptions') ): ?>
            <?php while( have_rows('sef_media_content_descriptions') ) : the_row(); 
              $sef_media_content_description = get_sub_field('sef_media_content_description');
              ?>
              <div>
                <?php echo $sef_media_content_description; ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        
      <?php endif; ?>

      <?php if (!empty($sef_media_content_logos)) { ?>
        <div class="mt-2 mb-4">
          <?php 
          foreach ($sef_media_content_logos as $sef_media_content_logos) {            
            $sef_media_content_logo = $sef_media_content_logos['sef_media_logo'];
            $sef_media_content_link = $sef_media_content_logos['sef_media_link'];
            $sef_tooltip_content    = $sef_media_content_logos['sef_tooltip_content'];
            ?>
            <?php if (!empty($sef_media_content_link)) { ?><a href="<?php echo $sef_media_content_link; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $sef_tooltip_content; ?>" target="_blank"><?php } ?>
            <img
            src="<?php echo $sef_media_content_logo['url'] ?>"
            alt="<?php echo $sef_media_content_logo['alt'] ?>"
            class="me-3"
            />
            <?php if (!empty($sef_media_content_link)) { ?></a><?php } ?>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if (!empty($sef_media_content_button)) { ?>
        <a href="<?php echo $sef_media_content_button['url'] ?>" class="btn theme-btn"><?php echo $sef_media_content_button['title'] ?></a>
      <?php } ?>
    </div>
  </div>
</div>
</div>
</section>

<?php } ?>

<?php if ($sef_media_content_style === 'Style 2') { ?>

  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> neutobot-data nautobot-landing community" style="background-color: <?php echo $sef_media_content_bg_color; ?>">
    <div class="container">
      <div class="row">
        <?php if (!empty($sef_media_content_title )) { ?>
          <div class="col-md-12 title-box">
            <h3 class="section-title">
              <?php echo $sef_media_content_title; ?>
            </h3>
          </div>
        <?php } ?>
        <?php if( have_rows('sef_media_content_descriptions') ): ?>
          <div
          class="col-lg-5 order-2 d-flex justify-content-center align-item-center"
          >
          <div
          class="community-content title-box text-start wow animate__animated animate__fadeInUp delay3"
          >
          <?php if( have_rows('sef_media_content_descriptions') ): ?>
            <?php while( have_rows('sef_media_content_descriptions') ) : the_row(); 
              $sef_media_content_description = get_sub_field('sef_media_content_description');
              ?>
              <div>
                <?php echo $sef_media_content_description; ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (!empty($sef_media_content_image)) { ?>
      <div
      class="col-lg-7 order-1 text-start text-mb-center wow animate__animated animate__fadeInUp delay3"
      >
      <img
      src="<?php echo $sef_media_content_image['url'] ?>"
      class="img-fluid w-75"
      alt="ntc img"
      />
    </div>
  <?php } ?>
</div>
</div>
</section>

<?php } ?>
<?php if ($sef_media_content_style === 'Style 3') { ?>
 <!-- Free training videos start -->
 <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> training-video" style="background-color: <?php echo $sef_media_content_bg_color; ?>">
  <div class="container">
    <div class="row">
      <?php if (!empty($sef_media_main_title  || $sef_media_content_sub_title )) { ?>
        <div class="col-md-12 mb-5">
          <div class="title-box">
            <?php if (!empty($sef_media_main_title  )) { ?>
              <h2 class="section-title wow animate__animated animate__fadeInUp">
                <?php echo $sef_media_main_title ; ?>
              </h2>
            <?php } ?>
            <?php if (!empty($sef_media_content_sub_title )) { ?>
              <h5 class="sub-title wow animate__animated animate__fadeInUp delay1">
                <?php echo $sef_media_content_sub_title; ?>
              </h5>
            <?php } ?>
          </div>
        </div>
      <?php } ?>

      <div class="col-md-12">
        <div class="video-box">
          <div class="row">
            <div class="col-md-6 <?php if ($sef_iframe_position === 'right') { ?>order-1 order-md-2<?php } ?>">
              <div
              class="yt-video wow animate__animated animate__fadeIn animate__slower"
              >
              <iframe
              src="<?php echo $sef_media_iframe; ?>"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="col-md-6 d-flex align-item-center <?php if ($sef_iframe_position === 'right') { ?>order-2 order-md-1<?php } ?>">
            <div class="training-vd-content">
              <h3 class="wow animate__animated animate__fadeInUp">
                <?php echo $sef_media_content_heading; ?>
              </h3>
              <p class="wow animate__animated animate__fadeInUp delay1">
                <?php echo $sef_media_content_text; ?></p>

                <?php if (!empty($sef_media_content_buttons)) { ?>

                  <div class="mt-2 wow animate__animated animate__fadeInUp delay2">
                    <?php if( have_rows('sef_media_content_buttons') ): ?>
                      <?php while( have_rows('sef_media_content_buttons') ) : the_row(); 
                        $sef_media_content_button = get_sub_field('sef_media_content_button');
                        ?>
                        <a href="<?php echo $sef_media_content_button['url'] ?>" class="btn theme-btn me-md-3 mb-3 wow animate__animated animate__fadeInUp delay3" target="<?php echo $sef_media_content_button['target'] ?>"><?php echo $sef_media_content_button['title'] ?></a>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>