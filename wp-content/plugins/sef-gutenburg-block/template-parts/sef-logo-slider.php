<?php

/**
* Layout of sef Logo Slider.
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

$sef_logo_slider_title = get_field('sef_logo_slider_title');

$sef_logo_slider_card = get_field('sef_logo_slider_card');
$sef_logo_slider_background = get_field('sef_logo_slider_background');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> work-with" style="background: <?php echo $sef_logo_slider_background; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-12 title-box">
            <h3
              class="section-title wow animate__animated animate__fadeInUp delay1"
            >
            <?php echo $sef_logo_slider_title; ?>
            </h3>
            <?php if (!empty($sef_logo_slider_card)) { ?>
            <div class="owl-carousel owl-theme customer-carousel">
              
              <?php 
                foreach ($sef_logo_slider_card as $sef_logo_slider_card) {            
                $sef_logo_slider_card_logo = $sef_logo_slider_card['sef_logo_slider_card_logo'];
              ?>
              <div class="item">
                <img src="<?php echo $sef_logo_slider_card_logo['url']; ?>" alt="ntc img" />
              </div>
              <?php } ?>
              
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>