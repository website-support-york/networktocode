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
$sef_key_solution_sub_text = get_field('sef_key_solution_sub_text');
$sef_key_solution_card = get_field('sef_key_solution_card');
$sef_card_column = get_field('sef_card_column');

$sef_key_solution_button = get_field('sef_key_solution_button');
$sef_key_solution_button_popup = get_field('sef_key_solution_button_popup');
$sef_key_solution_bg_color = get_field('sef_key_solution_bg_color');
$sef_key_solution_card_color = get_field('sef_key_solution_card_color');
$bottom_text = get_field('bottom_text');
$style = get_field('select_style') ? get_field('select_style') : 'style 1';
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> key-solution" style="background-color: <?php echo $sef_key_solution_bg_color; ?>">
    <div class="container">
      <div class="row">
        <div
          class="col-md-12 title-box wow animate__animated animate__fadeInUp"
        >
          <?php if (!empty($key_solution_text)) { ?><h2 class="section-title"><?php echo $key_solution_text; ?></h2><?php } ?>
          <?php if (!empty($sef_key_solution_sub_text)) { ?><h3><?php echo $sef_key_solution_sub_text;?></h3><?php } ?>
          <?php if(!empty($key_solution_description)):?>
              <div class="short-content">
                  <h5 class="sub-title"><?php echo  $key_solution_description; ?></h5>
              </div>
          <?php endif; ?>
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
                $sef_key_solution_card_subtitle = $sef_key_solution_card['sef_key_solution_card_subtitle'];
                $sef_key_solution_card_description = $sef_key_solution_card['sef_key_solution_card_content'];
                $sef_key_solution_card_button = $sef_key_solution_card['sef_key_solution_card_button'];
                $sef_key_solution_card_button_popup = $sef_key_solution_card['sef_key_solution_card_button_popup'];
                $sef_show_new_badge = $sef_key_solution_card['show_badge'];
              ?>
              <div class=" <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '4 Column' ) { ?>col-lg-3 col-md-4 col-sm-6<?php } ?> <?php if ($sef_card_column === '3 Column' ) { ?>col-sm-6 col-md-4<?php } ?> <?php if ($sef_card_column === '2 Column' ) { ?>col-md-6<?php } ?><?php } ?> wow animate__animated animate__fadeInUp">
                <div class="single-key-card <?php echo ( $sef_show_new_badge === 'new' ) ? 'app-new' : ''; ?><?php echo ( $sef_show_new_badge === 'updated' ) ? 'app-updated' : ''; ?>" id="section_category_<?php echo $i; ?>" style="background-color: <?php echo $sef_key_solution_card_color; ?>" data-magnetic>
                  <?php if (!empty ($sef_key_solution_card_icon )) {
                    $alt = get_post_meta(
                    $sef_key_solution_card_icon['ID'],
                    '_wp_attachment_image_alt',
                    true
                );  ?>
                <?php if($style != 'Style 2') { ?>
                 
                    <img
                      src="<?php echo $sef_key_solution_card_icon['url'] ?>"
                      class="img-fluid"
                      alt="<?php echo $alt ? $alt : $sef_key_solution_card_title; ?>"
                    />
                   
                <?php }else{ ?>
                    <div class="image-hover-wrapper <?php echo $style; ?>">
                      <img
                        src="<?php echo $sef_key_solution_card_icon['url'] ?>"
                        class="img-fluid"
                        alt="<?php echo $alt ? $alt : $sef_key_solution_card_title; ?>"
                      />
                      <div class="image-overlay">
                        <span class="learn-more-text"><a href="<?php echo $sef_key_solution_card_button['url'] ?>" target="<?php echo esc_attr($sef_key_solution_card_button['target'] ?? '_self'); ?>"><?php echo $sef_key_solution_card_button['title'] ?></a></span>
                      </div>
                    </div>
                  <?php } ?>
                  <? } ?>
                  <?php if (!empty ($sef_key_solution_card_title )) { ?>
                  <h6><?php echo $sef_key_solution_card_title; ?></h6>
                  <? } ?>
                  <?php if (!empty ($sef_key_solution_card_subtitle )) { ?>
                  <h5><?php echo $sef_key_solution_card_subtitle; ?></h5>
                  <? } ?>
                  <?php if (!empty ($sef_key_solution_card_description )) { ?>
                  <p>
                    <?php echo $sef_key_solution_card_description; ?>
                  </p>
                  <? } ?>
                  <?php if (!empty ($sef_key_solution_card_button )) { ?>
                  <?php if($style != 'Style 2') { ?>
                    <a
                        href="<?php echo $sef_key_solution_card_button['url'] ?>"
                        target="<?php echo esc_attr($sef_key_solution_card_button['target'] ?? '_self');?>"
                        <?php if( $sef_key_solution_card_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_key_solution_card_button['url'] ?>" <?php endif; ?>
                        class="btn btn-learn"
                        data-cursor="-color-orange"
                        data-cursor="-opaque"
                      >
                        <?php echo $sef_key_solution_card_button['title'] ?> <i class="bi bi-arrow-right"></i>
                      </a>
                    <?php } 
                    //else{
                      //echo '<div class="key-overlay"></div> ';
                    //}?>
                  <? } ?>
                </div>
              </div>
              <?php
              $i++;
              } ?>

              
            </div>
            <?php if (!empty($sef_key_solution_button)) { ?>
              <div class="w-100 d-flex align-item-center justify-content-center">
                  <a href="<?php echo $sef_key_solution_button['url']; ?>" target="<?php echo esc_attr($sef_key_solution_button['target'] ?? '_self');?>" <?php if( $sef_key_solution_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_key_solution_button['url'] ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_key_solution_button['title']; ?></a>
              </div>
            <?php } ?>
            <?php if (!empty($bottom_text)) { ?>
              <div class="w-100 d-flex align-item-center justify-content-center">
                <p><?php echo $bottom_text; ?></p>
              </div>
            <?php } ?>

          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>