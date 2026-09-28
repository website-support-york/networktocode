<?php

/**
* Layout of sef hero banner.
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

$sef_hero_banner_style              = get_field('sef_hero_banner_style');
$hero_banner_title                  = get_field('sef_hero_banner_title');
$hero_banner_description            = get_field('sef_hero_banner_description');
$hero_banner_button                 = get_field('sef_hero_banner_button');
$sef_hero_banner_button_2           = get_field('sef_hero_banner_button_2');
$sef_hero_banner_button_popup       = get_field('sef_hero_banner_button_popup');
$hero_banner_image                  = get_field('sef_hero_banner_image');
$sef_hero_banner_overlay_image      = get_field('sef_hero_banner_overlay_image');
$hero_banner_particle_motion        = get_field('sef_hero_banner_particle_motion');
$sef_hero_banner_slider_action        = get_field('sef_hero_banner_slider_action');
$sef_hero_banner_sliders_content    = get_field('sef_hero_banner_sliders');
$sef_hero_banner_sliders_image    = get_field('sef_hero_banner_sliders');
$sef_hero_banner_subtitle         = get_field('sef_hero_banner_subtitle');
$icon                             = get_field('icon');

?>

<?php if ($sef_hero_banner_style === 'Only content') { ?>
    <section id="<?php echo esc_attr($id); ?>" class="hero-section wow animate__animated animate__slower animate__fadeIn <?php echo esc_attr($className); ?>" style="background-image:url('<?php echo $hero_banner_image['url'] ?>')">
      <?php if ($hero_banner_particle_motion === "True") { ?>
        <div id="particles-js"></div>
      <? } ?>
      <h1 class="wow wow animate__animated animate__fadeInUp delay2">
        <?php echo $hero_banner_title;  ?>
      </h1>
      <?php if ($sef_hero_banner_subtitle) { ?>
        <h3 class="wow wow animate__animated animate__fadeInUp delay3">
          <?php echo $sef_hero_banner_subtitle;  ?>
        </h3>
      <?php } ?>
      <p class="wow animate__animated animate__fadeInUp delay4">
        <?php echo $hero_banner_description;  ?>
      </p>
      <?php if (!empty ($hero_banner_button )) { ?>
        <a
            href="<?php echo $hero_banner_button['url']  ?>"
            target="<?php echo $hero_banner_button['target']  ?>"
                class="btn theme-btn wow animate__animated animate__fadeInUp delay4"
                <?php if( $sef_hero_banner_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $hero_banner_button['url'] ?>" <?php endif; ?>
              >
                <?php echo $hero_banner_button['title']  ?>
              </a>
      <? } ?>
  <div class="hero-banner"><?php echo get_hansel_and_gretel_breadcrumbs(); ?></div>
      <div
        class="wrap-animation wow animate__animated animate__fadeIn delay4 animate__slower"
      >
        <button class="button_dw" id="scroll-btn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="" />
        </button>
      </div>
    </section>
<?php } ?>

<?php if ($sef_hero_banner_style === 'Content with Image') { ?>

  <section class="<?php echo $className; ?> hero-section nautobot-overview wow animate__animated animate__slower animate__fadeIn content-with-image" <?php if( !empty($hero_banner_image) ) {?> style="background-image:url('<?php echo $hero_banner_image['url'] ?>')" <?php }else{?> style="background: linear-gradient(#161616, #0938E1);" <?php }?>>
      <?php if ($hero_banner_particle_motion === "True") { ?>
        <div id="particles-js"></div>
      <? } ?>
        <div class="container">
          <div class="row">
            <div class= "col-lg-4 align-item-center">
              <?php if(!empty($icon)):?>
                <div class="icon">
                    <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>" title="<?php echo $icon['title'];?>">
                </div>
              <?php endif;?>
              <?php if(!empty($hero_banner_title)):?>
              <h1 class="wow wow animate__animated animate__fadeInUp delay2">
                <?php echo $hero_banner_title;  ?>
              </h1>
              <?php endif;?>
              <?php if ($sef_hero_banner_subtitle) { ?>
                <h3 class="wow wow animate__animated animate__fadeInUp delay3">
                  <?php echo $sef_hero_banner_subtitle;  ?>
                </h3>
              <?php } ?>
              <?php if ($hero_banner_description) { ?>
              <p class="wow animate__animated animate__fadeInUp delay3">
                <?php echo $hero_banner_description;  ?>
              </p>
              <?php }?>
              <div class="hero-btn">
              <?php if (!empty ($hero_banner_button )) { ?>
              <a
                  href="<?php echo $hero_banner_button['url']  ?>" target="<?php echo $hero_banner_button['target']  ?>" 
                class="btn theme-btn wow animate__animated animate__fadeInUp delay4" 
                <?php if( $sef_hero_banner_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $hero_banner_button['url'] ?>" <?php endif; ?>
              >
                <?php echo $hero_banner_button['title']  ?>
              </a>
              <? } ?>
                
              <?php if (!empty ($sef_hero_banner_button_2 )) { ?>
              <a
                href="<?php echo $sef_hero_banner_button_2['url']  ?>" target="<?php echo $sef_hero_banner_button_2['target']  ?>" 
                class="btn theme-btn wow animate__animated animate__fadeInUp delay4" 
              >
                <?php echo $sef_hero_banner_button_2['title']  ?>
              </a>
              <? } ?>
              </div>
              <?php if ( is_singular('apps') ) { global $post; ?>
                <!-- Custom Breadcrumb --->
                <div class="hero-banner">
                  <div class="breadcrumb">
                    <a href="<?php echo site_url(); ?>" rel="v:url" property="v:title">Home</a>
                    <img width="8" height="9" decoding="async" src="<?php echo site_url(); ?>/wp-content/uploads/2023/01/dual-arrow.svg" alt="Arrow">
                    <span typeof="v:Breadcrumb"><a rel="v:rel" property="v:title" href="/nautobot/">Nautobot</a></span>
                    <img width="8" height="9" decoding="async" src="<?php echo site_url(); ?>/wp-content/uploads/2023/01/dual-arrow.svg" alt="Arrow">
                    <span typeof="v:Breadcrumb"><a rel="v:rel" property="v:title" href="/nautobot/nautobot-apps/">Nautobot Apps</a></span>
                    <img width="8" height="9" decoding="async" src="<?php echo site_url(); ?>/wp-content/uploads/2023/01/dual-arrow.svg" alt="Arrow">
                    <span class="current"><?php echo get_the_title($post->ID); ?></span>
                  </div>
                </div>
                <style type="text/css">.breadcrumb a { font-size: 1.1rem;  }</style>
                <!-- Custom Breadcrumb end--->
              <?php } else { ?>
                <div class="hero-banner"><?php echo get_hansel_and_gretel_breadcrumbs(); ?></div>
              <?php } ?>
            </div>
            <?php if (!empty ($sef_hero_banner_overlay_image )) { ?>
            <div class="col-lg-7 offset-lg-1 wow animate__ animate__fadeIn animate__slower">
              <img src="<?php echo $sef_hero_banner_overlay_image['url']  ?>" class="img-fluid" alt="<?php echo $sef_hero_banner_overlay_image['alt']  ?>">
            </div>
            <?php } ?>
          </div>
        </div>
      <div
        class="wrap-animation wow animate__animated animate__fadeIn delay4 animate__slower"
      >
        <button class="button_dw" id="scroll-btn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="" />
        </button>
      </div>
    </section>

<?php } ?>

<?php if ($sef_hero_banner_style === 'Slider') { ?>

  <section class="hero-section wow animate__animated animate__slower animate__fadeIn " style="background-image:url('<?php echo $hero_banner_image['url'] ?>');">
     

      
        <div class="owl-carousel owl-theme hero-value-carousel <?php echo $sef_hero_banner_slider_action; ?>">
            <?php 
            $counter = 1;
              foreach ($sef_hero_banner_sliders_content as $sef_hero_banner_sliders_content) {            
              $sef_hero_banner_sliders_content_title        = $sef_hero_banner_sliders_content['sef_hero_banner_slider_title'];
              $sef_hero_banner_sliders_content_description  = $sef_hero_banner_sliders_content['sef_hero_banner_slider_description'];
              $sef_hero_banner_sliders_content_button       = $sef_hero_banner_sliders_content['sef_hero_banner_slider_button'];
              $sef_hero_banner_sliders_content_button_popup = $sef_hero_banner_sliders_content['sef_hero_banner_slider_button_popup'];
              $sef_hero_banner_slider_button_inside         = $sef_hero_banner_sliders_content['sef_hero_banner_slider_button_inside'];
              $sef_hero_banner_slider_second_button       = $sef_hero_banner_sliders_content['sef_hero_banner_slider_second_button'];
              $sef_hero_banner_slider_second_button_popup = $sef_hero_banner_sliders_content['sef_hero_banner_slider_second_button_popup'];
              $sef_hero_banner_slider_second_button_inside  = $sef_hero_banner_sliders_content['sef_hero_banner_slider_second_button_inside'];
               $sef_hero_banner_slider_image     = $sef_hero_banner_sliders_content['sef_hero_banner_slider_image'];
               $sef_hero_banner_slider_image_base64 = $sef_hero_banner_sliders_content['sef_hero_banner_slider_image_base64'];
               $sef_hero_banner_slider_inner_image = $sef_hero_banner_sliders_content['sef_hero_banner_slider_inner_image'];
               $sef_hero_banner_slider_inner_image_caption = $sef_hero_banner_slider_inner_image['caption'];
               $custom_class  = $sef_hero_banner_sliders_content['custom_class'];
               $sef_hero_banner_slider_image_mobile     = $sef_hero_banner_sliders_content['sef_hero_banner_slider_image_mobile'];
            ?>



  <div class="item <?php echo $custom_class; ?>">
    <?php if ($sef_hero_banner_slider_image_base64): ?>
      <img fetchpriority="high" width="720" height="360" decoding="async"  src="<?php echo $sef_hero_banner_slider_image_base64 ?>" alt="slideimg" />
    <?php elseif ($sef_hero_banner_slider_image['url'] != ''): ?>
      <img fetchpriority="high" width="720" height="360" decoding="async" loading="lazy" src="<?php echo $sef_hero_banner_slider_image['url'] ?>" alt="<?php echo $sef_hero_banner_slider_image['alt'] ?>"  />
    <?php endif ?>
    <?php if ($sef_hero_banner_slider_image_mobile): ?>
      <img fetchpriority="high" width="720" height="360" decoding="async" loading="lazy" src="<?php echo $sef_hero_banner_slider_image_mobile['url'] ?>" alt="<?php echo $sef_hero_banner_slider_image_mobile['alt'] ?>" class="mobile-img"  />
    <?php endif ?>
    <div class="item-content <?php if (!empty ($sef_hero_banner_slider_inner_image )) { ?> Half <? } ?>">
        <div class="container">
            <div class="item-content-inner">
                <div class="item-left">
                  <h1 class="">
                    <?php echo $sef_hero_banner_sliders_content_title;  ?>
                  </h1>
                    <?php echo $sef_hero_banner_sliders_content_description;  ?>

                    <?php if (!empty ($sef_hero_banner_slider_button_inside || $sef_hero_banner_slider_second_button_inside )) { ?>
                    <div class="hero-batton inside-button">
                      <?php if (!empty ($sef_hero_banner_slider_button_inside )) { ?>
                        <?php if (!empty ($sef_hero_banner_sliders_content_button )) { ?>
                        <a
                            href="<?php echo $sef_hero_banner_sliders_content_button['url']  ?>" target="<?php echo $sef_hero_banner_sliders_content_button['target'] ? $sef_hero_banner_sliders_content_button['target'] : '_self'; ?>"
                                class="btn theme-btn"
                                <?php if( $sef_hero_banner_sliders_content_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_hero_banner_sliders_content_button['url'] ?>" <?php endif; ?>
                              >
                                <?php echo $sef_hero_banner_sliders_content_button['title']  ?>
                        </a>
                        <?php } ?>
                      <?php } ?>

                      <?php if (!empty ($sef_hero_banner_slider_second_button_inside )) { ?>
                        <?php if (!empty ($sef_hero_banner_slider_second_button )) { ?>
                        <a
                            href="<?php echo $sef_hero_banner_slider_second_button['url']  ?>" target="<?php echo $sef_hero_banner_slider_second_button['target'] ? $sef_hero_banner_slider_second_button['target'] : '_self'; ?>"
                                class="btn theme-btn"
                                <?php if( $sef_hero_banner_slider_second_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_hero_banner_slider_second_button['url'] ?>" <?php endif; ?>
                              >
                                <?php echo $sef_hero_banner_slider_second_button['title']  ?>
                        </a>
                        <? } ?>
                      <?php } ?>
                    </div>
                    <?php } ?>


                </div>
                <?php if (!empty($sef_hero_banner_slider_inner_image)) { 
                $image_id = $sef_hero_banner_slider_inner_image['ID'];
                $medium_image = wp_get_attachment_image_src($image_id, 'medium');
                ?>
                <div class="item-right">
                    <picture>
                        <source 
                            media="(max-width: 767px)" 
                            srcset="<?php echo esc_url($medium_image[0]); ?>"
                        >

                        <img 
                            width="720" 
                            height="360" 
                            decoding="async" 
                            fetchpriority="high"
                            src="<?php echo esc_url($sef_hero_banner_slider_inner_image['url']); ?>"
                            class="img-fluid"
                            alt="<?php echo esc_attr($sef_hero_banner_slider_inner_image['alt']); ?>"
                        >
                    </picture>

                    <?php if (!empty($sef_hero_banner_slider_inner_image_caption)) { ?>
                        <h2><?php echo esc_html($sef_hero_banner_slider_inner_image_caption); ?></h2>
                    <?php } ?>
                </div>
            <?php } ?>


                <?php if (empty ($sef_hero_banner_slider_button_inside || $sef_hero_banner_slider_second_button_inside )) { ?>
                    <div class="hero-batton">
                      <?php if (empty ($sef_hero_banner_slider_button_inside )) { ?>
                        <?php if (!empty ($sef_hero_banner_sliders_content_button )) { ?>
                        <a
                            href="<?php echo $sef_hero_banner_sliders_content_button['url']  ?>" target="<?php echo $sef_hero_banner_sliders_content_button['target'] ? $sef_hero_banner_sliders_content_button['target'] : '_self'; ?>"
                                class="btn theme-btn"
                                <?php if( $sef_hero_banner_sliders_content_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_hero_banner_sliders_content_button['url'] ?>" <?php endif; ?>
                              >
                                <?php echo $sef_hero_banner_sliders_content_button['title']  ?>
                        </a>
                        <?php } ?>
                      <?php } ?>

                      <?php if (empty ($sef_hero_banner_slider_second_button_inside )) { ?>
                        <?php if (!empty ($sef_hero_banner_slider_second_button )) { ?>
                        <a
                            href="<?php echo $sef_hero_banner_slider_second_button['url']  ?>" target="<?php echo $sef_hero_banner_slider_second_button['target'] ? $sef_hero_banner_slider_second_button['target'] : '_self'; ?>"
                                class="btn theme-btn"
                                <?php if( $sef_hero_banner_slider_second_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_hero_banner_slider_second_button['url'] ?>" <?php endif; ?>
                              >
                                <?php echo $sef_hero_banner_slider_second_button['title']  ?>
                        </a>
                        <? } ?>
                      <?php } ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
  </div>
           
            <?php $counter++; ?>
            <?php } ?>
        </div>
        

        
       
        
         
        <!-- <div class="hero-banner"><?php echo get_hansel_and_gretel_breadcrumbs(); ?></div> -->
      <!-- <div class="wrap-animation wow animate__animated animate__fadeIn delay4 animate__slower">
        <button class="button_dw" id="scroll-btn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="" />
        </button>
      </div> -->
    </section>

<?php } ?>