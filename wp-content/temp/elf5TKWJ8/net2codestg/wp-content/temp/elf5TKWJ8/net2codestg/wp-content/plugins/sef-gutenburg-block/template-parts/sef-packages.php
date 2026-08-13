<?php

/**
* Layout of sef Package.
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

$packages_heading = get_field("packages_heading");
$category_list = get_field("category_list");
$category_lists = get_term($category_list);
$category_list_name = $category_lists->slug;

$packages_cta_text = get_field("packages_cta_text");
$packages_cta_button_url = get_field("packages_cta_button_url");
$sef_package_background_color = get_field('sef_package_background_color');
$button_popup = get_field('button_popup');

?>


<section class="package-option" style="background: <?php echo $sef_package_background_color; ?>">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-12 mb-3 mb-md-5">
            <div class="title-box text-center wow animate__animated animate__fadeInUp">
              <?php if( $packages_heading ) { ?><h3 class="section-title"><?php echo $packages_heading; ?></h3><?php } ?>
            </div>
          </div>

          <?php 

                $course_cards = get_posts(array(
                "status" => "publish",
                "post_type" => "course",
                "posts_per_page" => "25",
                "course-category" => $category_list_name,
                "orderby"   => "ID",
                "order"     => "DESC"
                ));

                //echo "<pre> ";
                //print_r($teams);
                if( $course_cards ):
          ?>
          <?php $course_counter = 1 ?>
          <?php foreach( $course_cards as $course_card ): ?>
            <?php
                  //echo "<pre>";
                  //print_r($current_opening);
                  $post_slug = get_post_field( 'post_name', get_post($course_card->ID) ); 
                  
            ?>
          <div class="col-lg-4 col-md-6">
            <div data-magnetic class="single-package wow animate__animated animate__fadeInUp delay1">
              <span class="pack-num"><?php echo $course_counter; ?></span>
              <h3><?php echo get_the_title($course_card->ID); ?></h3>
              <p><?php echo get_the_excerpt($course_card->ID); ?></p>

              <?php if( $category_list_name === 'public' ) { ?>

              <a href="<?php echo get_home_url(); ?>/curriculum-library#<?php echo $post_slug; ?>" class="btn btn-learn" data-cursor="-color-orange">Learn more <i class="bi bi-arrow-right"></i></a>

              <?php } else {?>

                <a href="<?php echo get_permalink( $course_card->ID ); ?>" class="btn btn-learn" data-cursor="-color-orange">Learn more <i class="bi bi-arrow-right"></i></a>
              
              <?php } ?>

            </div>
          </div>
          <?php $course_counter++?>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

          <?php if( $packages_cta_text || $packages_cta_button_text ) { ?>
          <div class="col-md-12 mt_80 wow animate__animated animate__fadeInUp delay7">
            <div class="cta_box<?php if( !$packages_cta_text ) { ?> justify-content-center<?php } ?>">
            	<?php if( $packages_cta_text ) { ?>
              <p><?php echo $packages_cta_text; ?></p>
              <?php } ?>
              <?php if( $packages_cta_button_url ) { ?>
              <a href="<?php echo $packages_cta_button_url['url']; ?>" <?php if( $button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $packages_cta_button_url['url']; ?>" <?php endif; ?> class="btn theme-btn"><?php echo $packages_cta_button_url['title']; ?></a>
              <?php } ?>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </section>