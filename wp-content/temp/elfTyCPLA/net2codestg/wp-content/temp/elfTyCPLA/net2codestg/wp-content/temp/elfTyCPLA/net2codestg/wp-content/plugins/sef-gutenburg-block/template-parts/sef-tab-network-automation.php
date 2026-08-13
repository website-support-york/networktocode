<?php

/**
* Layout of sef Tab view for Network automation.
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
$first_tab_title = get_field('first_tab_title');
$second_tab_title = get_field('second_tab_title');
$third_tab_title = get_field('third_tab_title');
$first_tab_heading = get_field('first_tab_heading');

$first_tab_tooltip = get_field('first_tab_tooltip');
$second_tab_tooltip = get_field('second_tab_tooltip');
$third_tab_tooltip = get_field('third_tab_tooltip');

$first_tab_bg_icon_with_content = get_field('first_tab_bg_icon_with_content');
$first_tab_bg_full_icon_with_content = get_field('first_tab_bg_full_icon_with_content');
$first_tab_add_image = get_field('first_tab_add_image');

?>

<!-- new tab view of network automation platform development -->
 <section class="platform-development blog-media">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <ul class="nav nav-tabs wow animate__animated animate__fadeInUp">
                <?php if (!empty($first_tab_title)) { ?>
                  <li class="nav-item nav-blog">
                    <a class="nav-link active" data-bs-toggle="tab" href="#network-source-of-truth" data-toggle="tooltip" data-placement="top" title="<?php echo $first_tab_tooltip; ?>" rel="tooltip"><?php echo $first_tab_title; ?> </a >
                  </li>
                <?php } ?>

                <?php if (!empty($second_tab_title)) { ?>
                  <li class="nav-item nav-event">
                    <a class="nav-link" data-bs-toggle="tab" href="#network-telemetry-analytics" data-toggle="tooltip" data-placement="top" title="<?php echo $second_tab_tooltip; ?>" rel="tooltip"><?php echo $second_tab_title; ?> </a >
                  </li>
                <?php } ?>
                
                <?php if (!empty($third_tab_title)) { ?>
                  <li class="nav-item nav-event">
                    <a class="nav-link" data-bs-toggle="tab" href="#self-services" data-toggle="tooltip" data-placement="top" title="<?php echo $third_tab_tooltip; ?>" rel="tooltip"><?php echo $third_tab_title; ?> </a >
                  </li>
                <?php } ?>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane container active fade show" id="network-source-of-truth">
                  <?php if (!empty($first_tab_title)) { ?>
                    <h3 class="tab-mb-title"><?php echo $first_tab_title; ?></h3>
                  <?php } ?>
                  <section class="service-detail before-none">
                    <div class="container">
                      <div class="row">
                        <?php if (!empty($first_tab_heading)) { ?>
                        <div class="col-lg-10 offset-lg-1">
                          <div class="px-lg-2 title-box mb-5">
                            <h4 class="fs-24 zilla text-center text-capitalize my-3 mb-remove-arrow">
                              <?php echo $first_tab_heading; ?>
                            </h4>
                          </div>
                        </div>
                        <?php } ?>
                        <div class="col-lg-12">
                          <div class="row gy-md-5 gx-md-5">
                            <?php 
                              foreach ($first_tab_bg_full_icon_with_content as $first_tab_bg_full_icon_with_content) {            
                              $first_tab_fullw_icon = $first_tab_bg_full_icon_with_content['first_tab_fullw_icon'];
                              $first_tab_fullw_icontitle = $first_tab_bg_full_icon_with_content['first_tab_fullw_icontitle'];
                              $first_tab_fullw_description = $first_tab_bg_full_icon_with_content['first_tab_fullw_description'];
                            ?>
                            <div class="col-md-12">
                              <div class="detail-box" data-magnetic>
                                <?php if (!empty($first_tab_fullw_icon || $first_tab_fullw_icontitle)) { ?>
                                  <h3>
                                    <?php if (!empty($first_tab_fullw_icon)) { ?>
                                      <img src="<?php echo $first_tab_fullw_icon; ?>" alt=""/>
                                    <?php } ?>
                                    <?php if (!empty($first_tab_fullw_icontitle)) { ?>
                                     <?php echo $first_tab_fullw_icontitle; ?>
                                    <?php } ?>
                                  </h3>
                                <?php } ?>
                                <?php if (!empty($first_tab_fullw_description)) { ?>
                                  <?php echo $first_tab_fullw_description; ?> 
                                <?php } ?>
                              </div>
                            </div>
                            <?php } ?>
                            <?php 
                              foreach ($first_tab_bg_icon_with_content as $first_tab_bg_icon_with_content) {            
                              $first_tab_icon = $first_tab_bg_icon_with_content['first_tab_icon'];
                              $first_tab_icontitle = $first_tab_bg_icon_with_content['first_tab_icontitle'];
                              $first_tab_description = $first_tab_bg_icon_with_content['first_tab_description'];
                            ?>
                            <div class="col-md-6">
                              <div class="detail-box" data-magnetic>
                                <?php if (!empty($first_tab_icon || $first_tab_icontitle)) { ?>
                                  <h3>
                                    <?php if (!empty($first_tab_icon)) { ?>
                                      <img src="<?php echo $first_tab_icon; ?>" alt=""/>
                                    <?php } ?>
                                    <?php if (!empty($first_tab_icontitle)) { ?>
                                      <?php echo $first_tab_icontitle; ?>
                                    <?php } ?>
                                  </h3>
                                <?php } ?>
                                <?php if (!empty($first_tab_description)) { ?>
                                <p><?php echo $first_tab_description; ?></p>
                                <?php } ?>
                              </div>
                            </div>
                            <?php } ?>
                            <?php if (!empty($first_tab_add_image)) { ?>
                              <div class="col-md-12">
                                <div class="bg-dark-animation">
                                  <img
                                    src="<?php echo $first_tab_add_image; ?>"
                                    class="w-50 d-block m-auto"
                                    alt=""
                                  />
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>

                <?php  
                $second_tab_main_heading = get_field('second_tab_main_heading');
                $second_tab_description = get_field('second_tab_description');
                $second_tab_bg_icon_with_content = get_field('second_tab_bg_icon_with_content');
                ?>
                <div class="tab-pane container fade" id="network-telemetry-analytics">
                  <?php if (!empty($second_tab_title)) { ?>
                    <h3 class="tab-mb-title mt-5"><?php echo $second_tab_title; ?></h3>
                  <?php } ?>
                  <section class="service-detail network-telemetry-details before-none">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                          <div class="px-lg-2 title-box mb-5">
                            <?php if (!empty($second_tab_main_heading)) { ?>
                              <h4 class="fs-24 zilla text-center text-capitalize my-3 mb-remove-arrow">
                                <?php echo $second_tab_main_heading; ?>
                              </h4>
                            <?php } ?>
                            <?php if (!empty($second_tab_description)) { ?>
                              <h5 class="sub-title">
                                <?php echo $second_tab_description; ?>
                              </h5>
                            <?php } ?>
                          </div>
                        </div>
                        <?php 
                          foreach ($second_tab_bg_icon_with_content as $second_tab_bg_icon_with_content) {            
                          $second_tab_main_image = $second_tab_bg_icon_with_content['second_tab_main_image'];
                          $second_tab_image_position = $second_tab_bg_icon_with_content['second_tab_image_position'];
                          $second_tab_icon = $second_tab_bg_icon_with_content['second_tab_icon'];
                          $second_tab_icontitle = $second_tab_bg_icon_with_content['second_tab_icontitle'];
                          $second_tab_description = $second_tab_bg_icon_with_content['second_tab_description'];
                        ?>
                        <div class="col-md-12 pb-5 pt-2 img-<?php echo $second_tab_image_position; ?>">
                          <div class="row gy-4">
                            <div class="<?php if($second_tab_image_position == "Right"){ ?>col-md-6 col-lg-5 align-center order-2 order-sm-1 <?php } ?><?php if($second_tab_image_position == "Left"){ ?>col-md-6 col-lg-5 offset-lg-1 align-center order-2 <?php } ?>">

                              <div class="telemetry-detail-box">
                                <div class="telemetry-content">
                                  <?php if (!empty($second_tab_icon || second_tab_icontitle)) { ?>
                                  <h4>
                                    <?php if (!empty($second_tab_icon)) { ?>
                                      <img src="<?php echo $second_tab_icon; ?>" alt="" class="img-fluid"/>
                                    <?php } ?>

                                    <?php if (!empty($second_tab_icontitle)) { ?>
                                      <?php echo $second_tab_icontitle; ?>
                                    <?php } ?>

                                  </h4>
                                  <?php } ?>
                                  <?php if (!empty($second_tab_description)) { ?>
                                    <p><?php echo $second_tab_description; ?></p>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                            <?php if (!empty($second_tab_main_image)) { ?>
                            <div class="<?php if($second_tab_image_position == "Right"){ ?>col-md-6 col-lg-6 offset-lg-1 order-1 order-sm-2 <?php } ?><?php if($second_tab_image_position == "Left"){ ?>col-md-6 col-lg-6  order-1 <?php } ?>">
                              <div class="image-box">
                                <a data-fancybox="gallery" data-caption="Intent-based Networking" href="<?php echo $second_tab_main_image; ?>">
                                  <div class="position-relative">
                                    <img class="img-fluid w-100 img-shadow" src="<?php echo $second_tab_main_image; ?>"/>
                                    <div class="img-overlay-btn">
                                      <span ><i class="bi bi-arrows-fullscreen"></i ></span>
                                    </div>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                        <?php } ?>
                        
                      </div>
                    </div>
                  </section>
                </div>
                <?php 
                $third_tab_main_heading = get_field('third_tab_main_heading');
                $third_tab_description = get_field('third_tab_description');
                $third_tab_icon_with_content = get_field('third_tab_icon_with_content');

                ?>
                <div class="tab-pane container fade" id="self-services">
                  <h3 class="tab-mb-title mt-4">Self Service</h3>
                  <section class="service-detail before-none">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                          <div class="px-lg-2 title-box mb-5">
                            <?php if (!empty($third_tab_main_heading)) { ?>
                            <h4 class="fs-24 text-center zilla text-capitalize my-3 mb-remove-arrow">
                              <?php echo $third_tab_main_heading; ?>
                            </h4>
                            <?php } ?>
                            <?php if (!empty($third_tab_description)) { ?>
                              <h5 class="sub-title text-center">
                                <?php echo $third_tab_description; ?>
                              </h5>
                            <?php } ?>
                          </div>
                        </div>
                        <?php 
                          foreach ($third_tab_icon_with_content as $third_tab_icon_with_content) {            
                          $third_tab_icon = $third_tab_icon_with_content['third_tab_icon'];
                          $third_tab_icontitle = $third_tab_icon_with_content['third_tab_icontitle'];
                          $third_tab_description = $third_tab_icon_with_content['third_tab_idescription'];
                        ?>
                        <div class="col-lg-12">
                          <div class="row gy-md-5 gx-md-5">
                            <div class="col-md-12">
                              <div class="detail-box" data-magnetic>

                                <?php if (!empty($third_tab_icon || $third_tab_icontitle)) { ?>
                                  <h3>
                                    <?php if (!empty($third_tab_icon)) { ?>
                                      <img src="<?php echo $third_tab_icon; ?>" alt=""/>
                                    <?php } ?>
                                    <?php if (!empty($third_tab_icontitle)) { ?>
                                      <?php echo $third_tab_icontitle; ?>
                                    <?php } ?>
                                  </h3>
                                <?php } ?>
                                <?php if (!empty($third_tab_description)) { ?>
                                <p><?php echo $third_tab_description; ?></p>
                                <?php } ?>

                              </div>
                            </div>
                          </div>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>