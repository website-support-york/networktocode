<?php

/**
* Layout of Sef Award.
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
            <div class="row <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '4 Column' ) { ?>g-4<?php } ?><?php if ($sef_card_column === '3 Column' ) { ?>g-5<?php } ?><?php if ($sef_card_column === '2 Column' ) { ?>g-5<?php } ?><?php } ?>">

              <?php
                $args = array(
                  'post_type' => 'award',
                  'posts_per_page' => 25,
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
              ?>
              <div class=" <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '4 Column' ) { ?>col-lg-3 col-md-4 col-sm-6<?php } ?> <?php if ($sef_card_column === '3 Column' ) { ?>col-sm-6 col-md-4<?php } ?> <?php if ($sef_card_column === '2 Column' ) { ?>col-md-6<?php } ?><?php } ?> wow animate__animated animate__fadeInUp">
                <div class="single-key-card awards-card" id="section_category" style="background-color: <?php echo $sef_key_solution_card_color; ?>" data-magnetic>
                  <div class="award-image">
                    <img
                      src="<?php echo get_the_post_thumbnail_url(); ?>"
                      class="img-fluid"
                      alt="ntc img"
                    />
                    <?php if ($image_overlay === 'yes') { ?>
                      <span><?php echo get_the_date( 'Y', get_the_ID() );  ?></span>
                    <?php } ?>
                  </div>
                  
                  <h6><?php echo get_the_title(); ?></h6>
                  
                  <p>
                    <?php echo $sef_key_solution_card_description; ?>
                  </p>

                  <?php
                      //echo "<pre>";
                      //print_r($current_opening);
                      //print_r(get_the_ID() . 'Post ID');
                      $post_button_detail = get_field('post_button_detail', get_the_ID());
                      $company_name = get_field('company_name', get_the_ID());
                    ?>

                    <?php if (!empty($company_name)) { ?>
                    <p>
                      <?php echo $company_name; ?>
                    </p>
                    <?php } ?>

                    <?php if (!empty($post_button_detail)) { ?>
                    <a href="<?php echo $post_button_detail['url']; ?>" target="_blank" class="btn btn-learn">
                      <?php echo $post_button_detail['title']; ?>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  <?php } ?>
                </div>
              </div>
              <?php
              endwhile;
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>