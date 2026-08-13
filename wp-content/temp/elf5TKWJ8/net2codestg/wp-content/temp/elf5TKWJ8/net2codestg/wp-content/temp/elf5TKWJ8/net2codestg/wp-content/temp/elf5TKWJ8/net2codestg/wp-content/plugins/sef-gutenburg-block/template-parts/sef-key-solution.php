<?php

/**
* Layout of sef Key Solution.
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

$key_solution_text = get_field('sef_key_solution_text');
$key_solution_description = get_field('sef_key_solution_description');

$sef_key_solution_card = get_field('sef_key_solution_card');
$sef_card_column = get_field('sef_card_column');

$sef_key_solution_button = get_field('sef_key_solution_button');
$sef_key_solution_button_popup = get_field('sef_key_solution_button_popup');
$sef_key_solution_bg_color = get_field('sef_key_solution_bg_color');
$sef_key_solution_card_color = get_field('sef_key_solution_card_color');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> key-solution" style="background-color: <?php echo $sef_key_solution_bg_color; ?>">
    <div class="container">
      <div class="row">
        <div
          class="col-md-12 title-box wow animate__animated animate__fadeInUp"
        >
          <?php if (!empty($key_solution_text)) { ?><h3 class="section-title"><?php echo $key_solution_text; ?></h3><?php } ?>
          <?php if (!empty($key_solution_description)) { ?><h5 class="sub-title col-lg-8 offset-lg-2"><?php echo $key_solution_description; ?></h5><?php } ?>
        </div>
        <?php if (!empty($sef_key_solution_card)) { ?>
        <div class="col-md-12">
          <div class="key-cards" >
            <div class="row <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '4 Column' ) { ?>g-4<?php } ?><?php if ($sef_card_column === '3 Column' ) { ?>g-5<?php } ?><?php if ($sef_card_column === '2 Column' ) { ?>g-5<?php } ?><?php } ?>">

              <?php 
                $i = 1;
                foreach ($sef_key_solution_card as $sef_key_solution_card) {            
                $sef_key_solution_card_icon = $sef_key_solution_card['sef_key_solution_card_icon'];
                $sef_key_solution_card_title = $sef_key_solution_card['sef_key_solution_card_title'];
                $sef_key_solution_card_description = $sef_key_solution_card['sef_key_solution_card_content'];
                $sef_key_solution_card_button = $sef_key_solution_card['sef_key_solution_card_button'];
                $sef_key_solution_card_button_popup = $sef_key_solution_card['sef_key_solution_card_button_popup'];
              ?>
              <div class=" <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '4 Column' ) { ?>col-lg-3 col-md-4 col-sm-6<?php } ?> <?php if ($sef_card_column === '3 Column' ) { ?>col-sm-6 col-md-4<?php } ?> <?php if ($sef_card_column === '2 Column' ) { ?>col-md-6<?php } ?><?php } ?> wow animate__animated animate__fadeInUp">
                <div class="single-key-card" id="section_category_<?php echo $i; ?>" style="background-color: <?php echo $sef_key_solution_card_color; ?>" data-magnetic>
                  <?php if (!empty ($sef_key_solution_card_icon )) { ?>
                  <img
                    src="<?php echo $sef_key_solution_card_icon['url'] ?>"
                    class="img-fluid"
                    alt="ntc img"
                  />
                  <? } ?>
                  <?php if (!empty ($sef_key_solution_card_title )) { ?>
                  <h6><?php echo $sef_key_solution_card_title; ?></h6>
                  <? } ?>
                  <?php if (!empty ($sef_key_solution_card_description )) { ?>
                  <p>
                    <?php echo $sef_key_solution_card_description; ?>
                  </p>
                  <? } ?>
                  <?php if (!empty ($sef_key_solution_card_button )) { ?>
                  <a
                      href="<?php echo $sef_key_solution_card_button['url'] ?>"
                      <?php if( $sef_key_solution_card_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_key_solution_card_button['url'] ?>" <?php endif; ?>
                      class="btn btn-learn"
                      data-cursor="-color-orange"
                      data-cursor="-opaque"
                    >
                      <?php echo $sef_key_solution_card_button['title'] ?> <i class="bi bi-arrow-right"></i>
                    </a>
                  <? } ?>
                </div>
              </div>
              <?php
              $i++;
              } ?>

              
            </div>
            <?php if (!empty($sef_key_solution_button)) { ?>
              <div class="w-100 d-flex align-item-center justify-content-center">
                  <a href="<?php echo $sef_key_solution_button['url']; ?>" <?php if( $sef_key_solution_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_key_solution_button['url'] ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_key_solution_button['title']; ?></a>
              </div>
            <?php } ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>