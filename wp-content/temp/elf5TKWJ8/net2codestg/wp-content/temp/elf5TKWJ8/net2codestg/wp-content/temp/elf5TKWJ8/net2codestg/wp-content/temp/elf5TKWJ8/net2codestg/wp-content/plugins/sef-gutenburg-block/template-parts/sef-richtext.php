<?php

/**
* Layout of sef Richtext Solution.
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

$sef_richtext_bg_color = get_field('sef_richtext_bg_color');
$sef_richtext_title = get_field('sef_richtext_title');
$sef_richtext_text_field = get_field('sef_richtext_text_field');
$sef_richtext_button = get_field('sef_richtext_button');
$sef_richtext_button_popup = get_field('sef_richtext_button_popup');
$sef_richtext_style = get_field('sef_richtext_style');
$sef_richtext_image = get_field('sef_richtext_image');

?>

<?php if ($sef_richtext_style === 'Just Text') { ?>

  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> for-help quote wow animate__animated animate__fadeIn" style="background-color: <?php echo $sef_richtext_bg_color; ?>">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="help-box">
              <?php if (!empty ($sef_richtext_text_field )) { ?>
              <?php 
                  foreach ($sef_richtext_text_field as $sef_richtext_text_field) {            
                  $sef_richtext_text = $sef_richtext_text_field['sef_richtext_text'];
                  
                ?>
                <p class="mb-1 wow animate__animated animate__fadeInUp delay1">
                  <?php echo $sef_richtext_text; ?>
                </p>
                <?php } ?>
                <?php } ?>
                <?php if (!empty ($sef_richtext_button )) { ?>
                  <a href="<?php echo $sef_richtext_button['url']; ?>" target="<?php echo $sef_richtext_button['target'] ? $sef_richtext_button['target'] : '_self'; ?>" <?php if( $sef_richtext_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_richtext_button['url'] ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_richtext_button['title']; ?></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php } ?>

<?php if ($sef_richtext_style === 'Text with Image') { ?>

  <!-- transformation whitepaper section -->
  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> whitepaper bg_primary" style="background-color: <?php echo $sef_richtext_bg_color; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-7 title-box d-flex align-item-center">
            <div class="text-start">
              
              <h3
                class="section-title wow animate__animated animate__fadeInUp delay1"
              >
                <?php if (!empty ($sef_richtext_title )) { ?><?php echo $sef_richtext_title; ?><?php } ?>
              </h3>
              
              <?php if (!empty ($sef_richtext_text_field )) { ?>
              <?php 
                  foreach ($sef_richtext_text_field as $sef_richtext_text_field) {            
                  $sef_richtext_text = $sef_richtext_text_field['sef_richtext_text'];
                  
                ?>
                <h5
                  class="sub-title wow animate__animated animate__fadeInUp delay3"
                >
                  <?php echo $sef_richtext_text; ?>
                </h5>
              <?php } ?>
              <?php } ?>
              <?php if (!empty ($sef_richtext_button )) { ?>
              <a
                href="<?php echo $sef_richtext_button['url']; ?>"
                target="<?php echo $sef_richtext_button['target'] ? $sef_richtext_button['target'] : '_self'; ?>"
                <?php if( $sef_richtext_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_richtext_button['url'] ?>" <?php endif; ?>
                class="btn theme-btn mt-3 wow animate__animated animate__fadeInUp delay5"
                ><?php echo $sef_richtext_button['title']; ?></a
              >
              <?php } ?>
            </div>
          </div>
          <div class="col-md-5">
            <?php if (!empty ($sef_richtext_image )) { ?>
            <img
              src="<?php echo $sef_richtext_image['url']; ?>"
              alt=""
              class="whitePaper wow animate__animated animate__fadeIn delay4"
            />
            <?php } ?>
          </div>
        </div>
      </div>
    </section>

<?php } ?>

<?php if ($sef_richtext_style === 'Text with Image Style 1') { ?>

  <!-- center only content section -->
  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> center-only-content bg_secondary">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="text-center">
              <?php if (!empty ($sef_richtext_image )) { ?>
              <img
                src="<?php echo $sef_richtext_image['url']; ?>"
                class="max-w-250 wow animate__animated animate__fadeIn animate__slower"
                alt=""
              />
              <?php } ?>
              <?php if (!empty ($sef_richtext_text_field )) { ?>
              <?php 
                  foreach ($sef_richtext_text_field as $sef_richtext_text_field) {            
                  $sef_richtext_text = $sef_richtext_text_field['sef_richtext_text'];
                  
                ?>
              <p class="mb-1 wow animate__animated animate__fadeInUp">
                <?php echo $sef_richtext_text; ?>
              </p>
              <?php } ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php } ?>