<?php

/**
* Layout of sef Image with List.
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

$sef_image_with_list_bg_color = get_field('sef_image_with_list_bg_color');
$sef_image_with_list_heading = get_field('sef_image_with_list_heading');
$sef_image_with_list_image = get_field('sef_image_with_list_image');
$sef_image_with_lists = get_field('sef_image_with_lists');

?>

<!-- explore sandbox section -->
    <section class="industries-main vision-mission" <? if( $sef_image_with_list_bg_color ) { ?>style="background: <?php echo $sef_image_with_list_bg_color; ?>" <?php } ?>>
      <div class="container">
        <div class="row">
          <? if( $sef_image_with_list_heading ) { ?>
          <div
            class="col-lg-6 offset-lg-3 mb-4 pb-2 title-box wow animate__animated animate__fadeInUp delay1"
          >
            <h2 class="section-title above-arrow">
              <?php echo $sef_image_with_list_heading; ?>
            </h2>
          </div>
          <?php } ?>
          <div class="col-md-12">
            <div class="main-box">
              <div class="row">
                <? if( $sef_image_with_list_image ) { ?>
                <div class="col-md-6">
                  <img
                    src="<?php echo $sef_image_with_list_image['url']; ?>"
                    class="img-fluid br-15 wow animate__animated animate__fadeIn delay2 animate__slower"
                    alt=""
                  />
                </div>
                <?php } ?>

                <div class="col-md-6 d-flex">
                  <div class="main-list">
                <?php 
                  foreach ($sef_image_with_lists as $sef_image_with_list) {            
                  $sef_image_with_list_icon = $sef_image_with_list['sef_image_with_list_icon'];
                  $sef_image_with_list_title = $sef_image_with_list['sef_image_with_list_title'];
                  $sef_image_with_list_content = $sef_image_with_list['sef_image_with_list_content'];
                ?>
                
                    <div
                      class="main-single wow animate__animated animate__fadeInUp"
                    >
                    <? if( $sef_image_with_list_icon ) { ?><img src="<?php echo $sef_image_with_list_icon['url']; ?>" alt="" /><?php } ?>
                      <div>
                        <? if( $sef_image_with_list_title ) { ?><p><?php echo $sef_image_with_list_title; ?></p><?php } ?>
                        
                        <? if( $sef_image_with_list_content ) { ?>
                        <span><?php echo $sef_image_with_list_content; ?></span>
                        <?php } ?>

                      </div>
                    </div>
                    <?php }?>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>