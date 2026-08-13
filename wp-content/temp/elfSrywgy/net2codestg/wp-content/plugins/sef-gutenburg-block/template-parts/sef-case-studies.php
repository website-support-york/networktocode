<?php

/**
* Layout of sef Case Studies.
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

$sef_background_color = get_field("sef_background_color");
$sef_case_studies_section_title = get_field('sef_case_studies_section_title');
$sef_case_studies_button_title = get_field('sef_case_studies_button_title');


?>

<section class="mb-case-study" style="background: <?php echo $sef_background_color; ?>">
      <div class="text-center title-box">
        <h3 class="section-title"><?php echo $sef_case_studies_section_title ?></h3>
      </div>
      <div class="container">
        <div class="owl-carousel owl-theme case-study-carousel">
          
        <?php 

          $case_studies = get_posts(array(
            "status" => "publish",
            "post_type" => "study",
            // "posts_per_page" => "6",
            "orderby"   => "ID",
            "order"     => "DESC"
          ));

          

          if( $case_studies ): ?>
    
            <?php foreach( $case_studies as $case_study ): 
        
              //setup_postdata( $case_study 
        
            ?>
            <div class="item">
              <div class="row">
                <div class="col-md-6 order-2 order-md-1 d-flex align-item-center">
                  <div class="text-start" data-cursor="-opaque">
                    <h4><?php echo get_the_title($case_study->ID); ?></h4>
                    
                      <?php $my_postid = $case_study->ID;//This is page id or post id
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]&gt;', $content);
                        echo $content; ?>
                    
                    <a href="<?php echo get_the_permalink($case_study->ID); ?>" class="btn theme-btn"><?php echo $sef_case_studies_button_title ?></a>
                  </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                  <img
                    src="<?php echo get_the_post_thumbnail_url($case_study->ID); ?>"
                    class="case-study-img"
                    alt="ntc img"
                  />
                </div>
              </div>
            </div>
            <?php endforeach; ?>
    
            <?php wp_reset_postdata(); ?>

          <?php endif; ?>

          
        </div>
      </div>
    </section>