<?php

/**
* Layout of sef Journey.
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

$sef_journey_heading = get_field('sef_journey_heading');
$sef_journey_description = get_field('sef_journey_description');
$sef_journey_list = get_field('sef_journey_list');

?>
<!-- our journey starts -->
    <section class="our-journey bg_primary">
      <div class="container">
        <div class="row">
          <? if( $sef_journey_heading ) { ?>
          <div class="col-md-12 title-box">
            <? if( $sef_journey_heading ) { ?><h2 class="section-title"><?php echo $sef_journey_heading; ?></h2><?php } ?>
            <? if( $sef_journey_description ) { ?><p class="content-data"><?php echo $sef_journey_description; ?></p><?php } ?>
          </div>
          <?php } ?>
          <div class="col-md-12">
            <div class="timeline">
              <ul>

              <? if( $sef_journey_list ) { ?>
                <?php 
                  $counter = 0;
                  foreach ($sef_journey_list as $sef_journey_list) {            
                  $sef_journey_list_title = $sef_journey_list['sef_journey_list_title'];
                  $sef_journey_list_contents = $sef_journey_list['sef_journey_list_contents'];
                ?>
                <li class="wow animate__animated animate__fadeInUp">
                  <div class="content">
                    <? if( $sef_journey_list_title ) { ?>
                    <h6><?php echo $sef_journey_list_title; ?></h6>
                    <?php } ?>

                    <?php 
                      foreach ($sef_journey_list_contents as $sef_journey_list_contents) {            
                      $sef_journey_list_content = $sef_journey_list_contents['sef_journey_list_content'];
                   ?>
                    <? if( $sef_journey_list_content ) { ?>
                    <div>
                      <span class="dot"></span> <?php echo $sef_journey_list_content; ?>
                    </div>
                    <?php } ?>
                  <?php } ?>
                    
                  </div>
                </li>
                <?php } ?>
              <?php } ?> 

              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>