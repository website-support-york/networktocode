<?php

/**
* Layout of sef Rich Quote.
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

$sef_quote_style = get_field('sef_quote_style');
$Sef_background_color = get_field('Sef_background_color');
$sef_richquote_quote = get_field('sef_richquote_quote');
$sef_richquote_name = get_field('sef_richquote_name');

$sef_quote_title = get_field('sef_quote_title');
$sef_testimonial_cats = get_field('sef_testimonial_category');
$sef_testimonial_cat = get_term($sef_testimonial_cats);
$sef_testimonial_category = $sef_testimonial_cat->slug;

$ntc_testimonial_name = get_field('ntc_testimonial_name');
$quote_title_show = get_field('quote_title_show');

$richquote_company_icon = get_field('sef_richquote_company_icon');

?>
<?php if ($sef_quote_style === 'Single') { ?>
  <section id="<?php echo esc_attr($id); ?>" class="quote wow animate__animated animate__fadeIn" style="background-color: <?php echo $Sef_background_color; ?>">
    <div class="container">
      <div class="row">
        <?php if (!empty($sef_quote_title)) { ?>
          <div class="col-md-12 mb-5">
            <div class="title-box">
              <h2 class="section-title wow animate__animated animate__fadeInUp">
                <?php echo $sef_quote_title; ?>
              </h2>
            </div>
          </div>
        <?php } ?>

        <div class="col-md-12">
          <div class="quote-box">
            <?php if (!empty($sef_richquote_quote)) { ?>
              <p class="wow animate__animated animate__fadeInUp delay1">
                <?php echo $sef_richquote_quote;  ?>
              </p>
            <?php } ?>

            <?php if($richquote_company_icon): ?>
              <i class="mb-2 d-inline-block mt-md-0 mt-4"><img src="<?php echo $richquote_company_icon['url']; ?>" alt="<?php echo $richquote_company_icon['alt']; ?>" class=""></i>
            <?php endif; ?>

            <?php if (!empty($sef_richquote_name)) { ?>
              <span class="wow animate__animated animate__fadeInUp delay2">
                <?php echo $sef_richquote_name;  ?>
              </span>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php if ($sef_quote_style === 'Single 1') { ?>
  <section id="<?php echo esc_attr($id); ?>" class="quote wow animate__animated animate__fadeIn" style="background-color: <?php echo $Sef_background_color; ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="quote-box">
            <p class="wow animate__animated animate__fadeInUp delay1">
              <?php echo wp_strip_all_tags( $ntc_testimonial_name->post_content ); ?>
            </p>
            <?php if ($quote_title_show) {?><span class="wow animate__animated animate__fadeInUp delay2">
              <?php echo esc_html( $ntc_testimonial_name->post_title ); ?>
              </span><?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php if ($sef_quote_style === 'Slider') { ?>

    <!-- testimonial seection starts -->
    <section id="<?php echo esc_attr($id); ?>" class="testimonial quote wow animate__animated animate__fadeIn" style="background-color: <?php echo $Sef_background_color; ?>">
      <div class="container">
        <div class="row">
          <?php if (!empty($sef_quote_title)) { ?>
            <div class="col-md-12 mb-5">
              <div class="title-box">
                <h2 class="section-title wow animate__animated animate__fadeInUp">
                  <?php echo $sef_quote_title; ?>
                </h2>
              </div>
            </div>
          <?php } ?>

          <div class="col-md-12">
            <div class="owl-carousel owl-theme testimonial-carousel">
              <?php
              $testimonials = get_posts(array(
                "status" => "publish",
                "post_type" => "testimonial",
                "posts_per_page" => "25",
                "testimonial-category" => $sef_testimonial_category,
                "orderby"   => "ID",
                "order"     => "ASC"
              ));

              //echo "<pre> ";
              //print_r($testimonials);
              if( $testimonials ):
                ?>
                <?php $testimonials_counter = 1 ?>
                <?php foreach( $testimonials as $testimonial ): ?>

                  <div class="item">
                    <div class="quote-box">
                      <p class="wow animate__animated animate__fadeInUp delay<?php echo $testimonials_counter; ?>">
                        <?php echo wp_strip_all_tags( get_post_field('post_content', $testimonial->ID)); ?>
                      </p>
                      <?php if ($quote_title_show) {?><span class="wow animate__animated animate__fadeInUp delay<?php echo $testimonials_counter; ?>"><?php echo get_the_title($testimonial->ID); ?></span
                        ><?php } ?>
                      </div>
                    </div>
                    <?php $testimonials_counter++?>
                  <?php endforeach; ?>
                  <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </div>
            </div>

          </div>
        </div>
      </section>


    <?php } ?>

    <?php if ($sef_quote_style === 'Slider V2') { ?>
    <section id="<?php echo esc_attr($id); ?>" class=" only-text with-white-bg v2-testimonials <?php echo $className; ?>">
        <div class="container">
          <div class="p-5 bg-white">
            <div id="testimonial-carosal" class="owl-carousel owl-theme testi-carousel">
                <?php 
                if( have_rows('rich_quote') ):
                  while( have_rows('rich_quote') ) : the_row();
                    $logo = get_sub_field('logo');
                    $quote = get_sub_field('quote');
                    $user_icon = get_sub_field('user_icon');
                    $user_name = get_sub_field('user_name');
                    $user_designation = get_sub_field('user_designation');?>
                    <div class="slider-container">
                          <?php if ($logo): ?>
                            <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>" />
                          <?php endif ?>
                          <p><?php echo $quote;?></p>
                          <div class="user-details">
                            <div class="user-img">
                              <?php if ($user_icon): ?>
                                  <img src="<?php echo $user_icon['url'];?>" alt="<?php echo $user_icon['alt'];?>" />
                              <?php endif ?>
                            </div>
                            <div class="user-info">
                                <?php if(!empty($user_name)):?>
                                  <h4><?php echo $user_name;?></h4>
                                <?php endif ?>
                                <?php if(!empty($user_designation)):?>
                                  <span><?php echo $user_designation;?></span>
                                <?php endif ?>
                            </div> 
                          </div> 
                      </div>  
                  <?php endwhile;?>
                <?php endif;?>
              </div>
          </div>
        </div>
      </section>
      <?php } ?>