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
$sef_hero_banner_button_popup       = get_field('sef_hero_banner_button_popup');
$hero_banner_image                  = get_field('sef_hero_banner_image');
$sef_hero_banner_overlay_image      = get_field('sef_hero_banner_overlay_image');
$hero_banner_particle_motion        = get_field('sef_hero_banner_particle_motion');
$sef_hero_banner_slider_action        = get_field('sef_hero_banner_slider_action');
$sef_hero_banner_sliders_content    = get_field('sef_hero_banner_sliders');
$sef_hero_banner_sliders_image    = get_field('sef_hero_banner_sliders');


?>

<?php if ($sef_hero_banner_style === 'Only content') { ?>
    <section class="hero-section wow animate__animated animate__slower animate__fadeIn " style="background-image:url('<?php echo $hero_banner_image['url'] ?>')">
      <?php if ($hero_banner_particle_motion === "True") { ?>
        <div id="particles-js"></div>
      <? } ?>
      <h1 class="wow wow animate__animated animate__fadeInUp delay2">
        <?php echo $hero_banner_title;  ?>
      </h1>
      <p class="wow animate__animated animate__fadeInUp delay3">
        <?php echo $hero_banner_description;  ?>
      </p>
      <?php if (!empty ($hero_banner_button )) { ?>
        <a
            href="<?php echo $hero_banner_button['url']  ?>"
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

  <section class="hero-section nautobot-overview wow animate__animated animate__slower animate__fadeIn content-with-image" style="background-image:url('<?php echo $hero_banner_image['url'] ?>')">
      <?php if ($hero_banner_particle_motion === "True") { ?>
        <div id="particles-js"></div>
      <? } ?>
        <div class="container">
          <div class="row">
            <div class= "col-lg-4 align-item-center">
              <h1 class="wow wow animate__animated animate__fadeInUp delay2">
                <?php echo $hero_banner_title;  ?>
              </h1>
              <p class="wow animate__animated animate__fadeInUp delay3">
                <?php echo $hero_banner_description;  ?>
              </p>
              <?php if (!empty ($hero_banner_button )) { ?>
              <a
                  href="<?php echo $hero_banner_button['url']  ?>"
                class="btn theme-btn wow animate__animated animate__fadeInUp delay4"
                <?php if( $sef_hero_banner_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $hero_banner_button['url'] ?>" <?php endif; ?>
              >
                <?php echo $hero_banner_button['title']  ?>
              </a>
              <? } ?>
              <div class="hero-banner"><?php echo get_hansel_and_gretel_breadcrumbs(); ?></div>
            </div>
            <div class="col-lg-7 offset-lg-1 wow animate__ animate__fadeIn animate__slower">
              <?php if (!empty ($sef_hero_banner_overlay_image )) { ?>
              <img src="<?php echo $sef_hero_banner_overlay_image['url']  ?>" class="img-fluid" alt="<?php echo $sef_hero_banner_overlay_image['alt']  ?>">
              <?php } ?>
            </div>
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

  <section class="hero-section wow animate__animated animate__slower animate__fadeIn " style="background-image:url('<?php echo $hero_banner_image['url'] ?>')">
     

      
        <div class="owl-carousel owl-theme hero-value-carousel <?php echo $sef_hero_banner_slider_action; ?>">
            <?php 
            $counter = 1;
              foreach ($sef_hero_banner_sliders_content as $sef_hero_banner_sliders_content) {            
              $sef_hero_banner_sliders_content_title        = $sef_hero_banner_sliders_content['sef_hero_banner_slider_title'];
              $sef_hero_banner_sliders_content_description  = $sef_hero_banner_sliders_content['sef_hero_banner_slider_description'];
              $sef_hero_banner_sliders_content_button       = $sef_hero_banner_sliders_content['sef_hero_banner_slider_button'];
              $sef_hero_banner_sliders_content_button_popup = $sef_hero_banner_sliders_content['sef_hero_banner_slider_button_popup'];
              $sef_hero_banner_slider_second_button       = $sef_hero_banner_sliders_content['sef_hero_banner_slider_second_button'];
              $sef_hero_banner_slider_second_button_popup = $sef_hero_banner_sliders_content['sef_hero_banner_slider_second_button_popup'];
               $sef_hero_banner_slider_image     = $sef_hero_banner_sliders_content['sef_hero_banner_slider_image'];
               $sef_hero_banner_slider_inner_image = $sef_hero_banner_sliders_content['sef_hero_banner_slider_inner_image'];
               $sef_hero_banner_slider_inner_image_caption = $sef_hero_banner_slider_inner_image['caption'];
            ?>
            <div class="item">

              <img src="<?php echo $sef_hero_banner_slider_image['url'] ?>" alt="<?php echo $sef_hero_banner_slider_image['alt'] ?>" />
              <div class="item-content <?php if (!empty ($sef_hero_banner_slider_inner_image )) { ?> Half <? } ?>">
                <div class="container">
                  <div class="item-content-inner">
                  <div class="item-left">
                <h1 class="">
                  <?php echo $sef_hero_banner_sliders_content_title;  ?>
                </h1>
                  <?php echo $sef_hero_banner_sliders_content_description;  ?>
               
             </div>
             <?php if (!empty ($sef_hero_banner_slider_inner_image )) { ?>
               <div class="item-right">

              <img src="<?php echo $sef_hero_banner_slider_inner_image['url']  ?>" class="img-fluid" alt="<?php echo $sef_hero_banner_slider_inner_image['alt']  ?>">
                <?php if (!empty ($sef_hero_banner_slider_inner_image_caption )) { ?>
                <h2><?php echo $sef_hero_banner_slider_inner_image_caption; ?></h2>
                <?php } ?>
              
               </div>
               <?php } ?>
                <div class="hero-batton">
                <?php if (!empty ($sef_hero_banner_sliders_content_button )) { ?>
                <a
                    href="<?php echo $sef_hero_banner_sliders_content_button['url']  ?>"
                        class="btn theme-btn"
                        <?php if( $sef_hero_banner_sliders_content_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_hero_banner_sliders_content_button['url'] ?>" <?php endif; ?>
                      >
                        <?php echo $sef_hero_banner_sliders_content_button['title']  ?>
                </a>
                 <? } ?>

                 <?php if (!empty ($sef_hero_banner_slider_second_button )) { ?>
                <a
                    href="<?php echo $sef_hero_banner_slider_second_button['url']  ?>"
                        class="btn theme-btn"
                        <?php if( $sef_hero_banner_slider_second_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_hero_banner_slider_second_button['url'] ?>" <?php endif; ?>
                      >
                        <?php echo $sef_hero_banner_slider_second_button['title']  ?>
                </a>
                 <? } ?>
               </div>

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