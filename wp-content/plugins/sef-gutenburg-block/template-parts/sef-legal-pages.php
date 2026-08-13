<?php

/**
* Layout of Sef Legal pages.
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

$sef_card_column = get_field('sef_card_column');


$sef_key_solution_bg_color = get_field('sef_award_bg_color');
$sef_key_solution_card_color = get_field('sef_award_card_color');
$image_overlay = get_field('image_overlay');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> key-solution awards" style="background-color: <?php echo $sef_key_solution_bg_color; ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="key-cards" >
            <?php
              $select_legal_pages = get_field('select_legal_pages');
              if( $select_legal_pages ): 
                $total_pages = count( $select_legal_pages ); // ✅ Count total items

    // ✅ Add class if total count is odd
    $container_class = ( $total_pages % 2 !== 0 ) ? 'justify-center' : '';
              ?>
            <div class="row <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '4 Column' ) { ?>g-4<?php } ?><?php if ($sef_card_column === '3 Column' ) { ?>g-5<?php } ?><?php if ($sef_card_column === '2 Column' ) { ?>g-5<?php } ?><?php } ?> <?php echo $container_class;?>">
                  <?php foreach( $select_legal_pages as $featured_post ): 
                      $permalink = get_permalink( $featured_post->ID );
                      $title = get_the_title( $featured_post->ID );
                      $short_content = get_field( 'short_content', $featured_post->ID );
                  ?>
                  <div class=" <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '4 Column' ) { ?>col-lg-3 col-md-4 col-sm-6<?php } ?> <?php if ($sef_card_column === '3 Column' ) { ?>col-sm-6 col-md-4<?php } ?> <?php if ($sef_card_column === '2 Column' ) { ?>col-md-6<?php } ?><?php } ?> wow animate__animated animate__fadeInUp">
                    <div class="single-key-card awards-card" id="section_category" style="background-color: <?php echo $sef_key_solution_card_color; ?>" data-magnetic>
                      <div class="award-image">
                        <img
                          src="<?php echo get_the_post_thumbnail_url($featured_post->ID); ?>"
                          class="img-fluid"
                          alt="ntc img"
                        />
                      </div>
                      
                        <h6><?php echo $title; ?></h6>
                        <p>
                            <?php echo $short_content; ?>
                        </p>
                        <a href="<?php echo $permalink; ?>" target="_self" class="btn btn-learn-more">
                          Read More
                          <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                  </div>
                  <?php endforeach; ?>
            </div>
            <?php
                endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Warning Popup HTML -->
<!-- <div id="warningPopup" class="popup-overlay">
  <div class="popup-box">
    <h2>⚠️ Restricted Content</h2>
    <p>
      This page and all items within this folder are <strong>restricted</strong>.<br>
      Do not modify, delete, or create new items without prior approval from
      <strong>NTC’s Legal Team (CFO)</strong>.<br><br>
      Unauthorized changes may result in compliance issues. Please contact the Legal Team before making updates.
    </p>
    <div class="popup-buttons">
      <button id="okBtn">OK</button>
      <button id="closeBtn">Close</button>
    </div>
  </div>
</div> -->