<?php

/**
* Layout of sef earned numbers.
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

$sef_earned_number_background = get_field('sef_earned_number_background');
$sef_earned_number_title = get_field('sef_earned_number_title');
$sef_earned_number_description = get_field('sef_earned_number_description');

$sef_earned_number_card = get_field('sef_earned_number_card');

?>

<section class="earned-number" style="background: <?php echo $sef_earned_number_background; ?>">
      <div class="container">
        <div class="row">
          <div
            class="col-md-4 offset-md-1 d-flex justify-content-center align-item-center"
          >
            <div class="earn-content-box title-box text-start">
              <h3
                class="section-title wow animate__animated animate__fadeInUp delay1"
              >
              <?php echo $sef_earned_number_title;  ?>
              </h3>
              <p class="wow animate__animated animate__fadeInUp delay2">
              <?php echo $sef_earned_number_description;  ?>
              </p>
            </div>
          </div>
          <?php if (!empty($sef_earned_number_card)) { ?>
          <div class="col-md-7">
            <div class="earn-num-box">
              <div class="row" id="counter">
                
              <?php 
                foreach ($sef_earned_number_card as $sef_earned_number_card) {            
                $sef_earned_number_card_number = $sef_earned_number_card['sef_earned_number_card_number'];
                $sef_earned_number_card_content = $sef_earned_number_card['sef_earned_number_card_content'];
                $sef_earned_number_card_symbol = $sef_earned_number_card['sef_earned_number_card_symbol'];
              ?>
                <div
                  class="col-md-4 col-6 wow animate__animated animate__fadeInUp delay1"
                >
                  <div class="num-box" data-magnetic data-cursor="-opaque">
                    <p class="count percent" data-count="<?php echo $sef_earned_number_card_number; ?>"></p>
                    <p><?php echo $sef_earned_number_card_symbol; ?></p>
                    <span
                      ><?php echo $sef_earned_number_card_content;  ?></span
                    >
                  </div>
                </div>
                <?php } ?>
                
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>