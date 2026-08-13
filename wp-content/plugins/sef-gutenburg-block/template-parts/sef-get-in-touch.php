<?php

/**
* Layout of sef Get in touch.
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

$sef_get_in_touch_background_color = get_field('sef_get_in_touch_background_color');
$sef_get_in_touch_background_image = get_field('sef_get_in_touch_background_image');
$sef_get_in_touch_icon = get_field('sef_get_in_touch_icon');
$sef_get_in_touch_heading = get_field('sef_get_in_touch_heading');
$sef_get_in_touch_description = get_field('sef_get_in_touch_description');
$get_in_touch_form = get_field('get_in_touch_form','options');
// $get_in_touch_form_html = get_field('get_in_touch_form_html','options');

?>

<section class="contact" style="background: <?php echo $sef_get_in_touch_background_color; ?>">
      <img
        src="<?php echo $sef_get_in_touch_background_image['url']; ?>"
        class="contact-bg wow animate__animated animate__slower animate__fadeIn delay1"
        alt="ntc img"
      />
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4 mb-txt-center">
            <img
              src="<?php echo $sef_get_in_touch_icon['url']; ?>"
              class="img-fluid wow animate__animated animate__slower animate__fadeIn delay1"
              alt="ntc img"
            />

            <div
              class="title-box text-start wow animate__animated animate__fadeInUp delay3"
            >
              <h3 class="section-title text-white mt-3">
                <?php echo $sef_get_in_touch_heading; ?>
              </h3>
              <p class="">
                <?php echo $sef_get_in_touch_description; ?>
              </p>
            </div>
          </div>
          <div
            class="col-lg-6 col-md-8 wow animate__animated animate__slower animate__fadeInUp delay1"
          >
            
            <?php //echo $get_in_touch_form; //do_shortcode( '[gravityform id="5" title="false" ajax="true"]'); ?>
            <?php //echo $get_in_touch_form_html; ?>
             <?php echo $get_in_touch_form; ?>

          </div>
        </div>
      </div>
    </section>