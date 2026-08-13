<?php

/**
* Layout of sef Tab.
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
$sef_tab_talk_background = get_field('sef_tab_talk_background');
$sef_tab_background_image = get_field('sef_tab_background_image');
$sef_tab_main_title = get_field('sef_tab_main_title');
$sef_tab_heading_one = get_field('sef_tab_heading_one');
$sef_tab_heading_two = get_field('sef_tab_heading_two');
$sef_tab_heading_three = get_field('sef_tab_heading_three');
$sef_tab_talk_heading = get_field('sef_tab_talk_heading');
$sef_tab_talk_button = get_field('sef_tab_talk_button');
$sef_tab_talk_button_popup = get_field('sef_tab_talk_button_popup');

$sef_tab_one_content = get_field('sef_tab_one_content');

$sef_tab_two_heading = get_field('sef_tab_two_heading');

$sef_tab_two_content = get_field('sef_tab_two_content');

$sef_the_value_slider = get_field('sef_the_value_slider');
$sef_the_value_mob_slider = get_field('sef_the_value_mob_slider');

?>
<section class="network-auto" style="background: <?php echo $sef_tab_talk_background; ?>">
      <img src="<?php echo $sef_tab_background_image['url']; ?>" alt="ntc img" class="why-bg" />
      <div class="container">
        <div class="row">
          <?php if (!empty($sef_tab_main_title)) { ?>
            <div class="col-md-12 title-box">
              <h3 class="section-title"><?php echo $sef_tab_main_title; ?></h3>
            </div>
          <?php } ?>
          <div class="col-md-12">
            <div class="row">
              <ul class="nav nav-tabs wow animate__animated animate__fadeInUp">
                <li class="nav-item nav-why-network">
                  <a
                    class="nav-link nav-value-network active"
                    data-bs-toggle="tab"
                    href="#the-value"
                    ><?php echo $sef_tab_heading_one; ?></a
                  >
                </li>
                <li class="nav-item nav-why-network">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#why-network"
                    ><?php echo $sef_tab_heading_two; ?></a
                  >
                </li>
                <li class="nav-item nav-how-network">
                  <a class="nav-link" data-bs-toggle="tab" href="#how-network"
                    ><?php echo $sef_tab_heading_three; ?></a
                  >
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">

                  
                <?php if (!empty($sef_the_value_slider)) { ?>
               <div class="tab-pane container active fade show" id="the-value">
                  <div class="the-vlue-box mt-4">
                    <div class="row">
                      <div class="owl-carousel owl-theme the-value-carousel">
                       <?php 
                          foreach ($sef_the_value_slider as $sef_the_value_slider) {            
                          $sef_the_value_tab_title = $sef_the_value_slider['sef_the_value_tab_title'];
                          $sef_the_value_sub_heading = $sef_the_value_slider['sef_the_value_sub_heading'];
                          $sef_the_value_image_slide = $sef_the_value_slider['sef_the_value_image_slide'];
                          $sef_the_value_popup_image = $sef_the_value_slider['sef_the_value_popup_image'];
                        ?>
                            <div class="item">
                              <a data-fancybox="gallery" data-caption="<?php echo $sef_the_value_tab_title; ?>" href="<?php echo $sef_the_value_popup_image; ?>" >
                                <div class="position-relative">
                                  <img src="<?php echo $sef_the_value_image_slide; ?>" class="d-block w-100" alt="the-value-slide" />
                                </div>
                              </a>
                            </div>
                        <?php } ?>

                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>

                
              

              <?php if (!empty($sef_tab_one_content)) { ?>
                <div
                  class="tab-pane container fade"
                  id="why-network"
                >
                  <div class="why-box mt-4">
                    <div class="row">
                      
                    <?php 
                      foreach ($sef_tab_one_content as $sef_tab_one_content) {            
                      $sef_tab_one_content_icon = $sef_tab_one_content['sef_tab_one_content_icon'];
                      $sef_tab_one_content_title = $sef_tab_one_content['sef_tab_one_content_title'];
                      $sef_tab_one_content_lists = $sef_tab_one_content['sef_tab_one_content_lists'];
                    ?>
                      <div
                        class="col-md-4 wow animate__animated animate__fadeInUp delay3"
                      >
                        <div class="single-why-network">
                          <img
                            src="<?php echo $sef_tab_one_content_icon['url']; ?>"
                            alt="ntc img"
                            class="img-fluid"
                          />
                          <h6><?php echo $sef_tab_one_content_title; ?></h6>
                          <ul>
                            <?php 
                              foreach ($sef_tab_one_content_lists as $sef_tab_one_content_lists) {            
                              $sef_tab_one_content_lists_content = $sef_tab_one_content_lists['sef_tab_one_content_lists_content'];
                            ?>

                            <li><?php echo $sef_tab_one_content_lists_content; ?></li>
                            
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                      <?php } ?>
                      
                      
                    </div>
                  </div>
                </div>
                <?php } ?>

                <div class="tab-pane container fade" id="how-network">
                  <div class="how-network-box">
                    <h6 class="how-title">
                      <?php echo $sef_tab_two_heading; ?>
                    </h6>
                    <?php if (!empty($sef_tab_two_content)) { ?>
                    <div class="row">
                      
                      <?php 
                        $counter = 1;

                        foreach ($sef_tab_two_content as $sef_tab_two_content) {            
                        $sef_tab_two_content_icon = $sef_tab_two_content['sef_tab_two_content_icon'];
                        $sef_tab_two_content_title = $sef_tab_two_content['sef_tab_two_content_title'];
                        $sef_tab_two_content_description = $sef_tab_two_content['sef_tab_two_content_description'];
                      ?>
                      <div class=" <?php if ($counter % 2 === 0) { echo "col-lg mt-curve"; } else { echo "col-lg"; }?>">
                        <div class="single-how">
                          <div class="how-img" data-magnetic>
                            <img src="<?php echo $sef_tab_two_content_icon['url']; ?>" alt="ntc img" />
                          </div>
                          <div class="single-how-content">
                            <h6><?php echo $sef_tab_two_content_title; ?></h6>
                            <span>
                              <?php echo $sef_tab_two_content_description; ?>
                            </span>
                          </div>
                        </div>
                      </div>
                      <?php $counter++; ?>
                      <?php } ?>

                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>

              <div class="p-75 wow animate__animated animate__fadeInUp delay1">
                <div class="talk-box">
                  <p><?php echo $sef_tab_talk_heading; ?></p>
                  <a href="<?php echo $sef_tab_talk_button['url']; ?>" target="<?php echo $sef_tab_talk_button['target'] ? $sef_tab_talk_button['target'] : '_self'; ?>" <?php if( $sef_tab_talk_button_popup ): ?> data-bs-toggle="modal" data-bs-target="<?php echo $sef_tab_talk_button['url']; ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_tab_talk_button['title']; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>