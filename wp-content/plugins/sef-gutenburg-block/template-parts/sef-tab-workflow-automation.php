<?php

/**
* Layout of sef Tab view for workflow automation.
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
$forth_tab_title = get_field('forth_tab_title');

$first_tab_tooltip = get_field('first_tab_tooltip');
$second_tab_tooltip = get_field('second_tab_tooltip');
$third_tab_tooltip = get_field('third_tab_tooltip');
$fourth_tab_tooltip = get_field('fourth_tab_tooltip');

$first_tab_add_image = get_field('first_tab_add_image');
$first_tab_heading = get_field('first_tab_heading');
$first_tab_content = get_field('first_tab_content');
$first_tab_button = get_field('first_tab_button');
$first_tab_full_width_section_bg = get_field('first_tab_full_width_section_bg');
$first_tab_bg_section_heading = get_field('first_tab_bg_section_heading');
$first_tab_bg_section_sub_heading = get_field('first_tab_bg_section_sub_heading');
$first_tab_right_side_image = get_field('first_tab_right_side_image');
$first_tab_left_content = get_field('first_tab_left_content');
$section_heading = get_field('section_heading_');
$section_subheading = get_field('section_subheading_');

$sec_tab_button = get_field('sec_tab_button');
$third_tab_button = get_field('third_tab_button'); 

?>



   <!-- new tab view of security and compilance -->
   <section class="<?php echo $className; ?> platform-development blog-media py-0">
      <div class="container-fluid px-0">
        <div class="container">
          <?php if ($section_heading): ?>
            <h3 class="mb-4 section-title"><?php echo $section_heading; ?></h3>
          <?php endif ?>
          <?php if ($section_subheading): ?>
            <p><?php echo $section_subheading ?></p>
          <?php endif ?>
          <ul class="nav nav-tabs wow animate__animated animate__fadeInUp">
            <?php if (!empty($first_tab_title)) { ?>
              <li class="nav-item nav-blog">
                <a class="nav-link active" data-bs-toggle="tab" href="#config-management" data-toggle="tooltip" data-placement="top" title="<?php echo $first_tab_tooltip; ?>" rel="tooltip"><?php echo $first_tab_title; ?></a>
              </li>
            <?php } ?>
            <?php if (!empty($second_tab_title)) { ?>
              <li class="nav-item nav-event">
                <a class="nav-link" data-bs-toggle="tab" href="#planning-design" data-toggle="tooltip" data-placement="top" title="<?php echo $second_tab_tooltip; ?>" rel="tooltip"><?php echo $second_tab_title; ?> </a>
              </li>
            <?php } ?>
            <?php if (!empty($third_tab_title)) { ?>
              <li class="nav-item nav-event">
                <a class="nav-link" data-bs-toggle="tab" href="#network-operations" data-toggle="tooltip" data-placement="top" title="<?php echo $third_tab_tooltip; ?>" rel="tooltip"><?php echo $third_tab_title; ?></a>
              </li>
            <?php } ?>
            <?php if (!empty($forth_tab_title)) { ?>
              <li class="nav-item nav-event">
                <a class="nav-link" data-bs-toggle="tab" href="#cloud-networking" data-toggle="tooltip" data-placement="top" title="<?php echo $fourth_tab_tooltip; ?>" rel="tooltip"><?php echo $forth_tab_title; ?></a>
              </li>
            <?php } ?>
          </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active fade show" id="config-management">
            <?php if (!empty($first_tab_title)) { ?>
              <h3 class="tab-mb-title"><?php echo $first_tab_title; ?></h3>
            <?php } ?>
            <section class="img-h-auto img-content mt-4 pb-5">
              <div class="container px-0">
                <div class="row gx-lg-5">
                  <div class="col-md-12">
                    <section class="configuration-management img-content mb-5">
                      <div class="container-fluid-old">
                        <div class="row gx-lg-5">
                          <?php if (!empty($first_tab_add_image)) { ?>
                            <div class="col-lg-6 border-0">
                              <img decoding="async" alt="<?php echo $first_tab_add_image['alt']; ?>" data-src="<?php echo $first_tab_add_image['url']; ?>" class="img-fluid wow animate__animated animate__fadeIn animate__slower" src="<?php echo $first_tab_add_image['url']; ?>"/>
                            </div>
                          <?php } ?>
                          <div class="col-lg-6 d-flex align-item-center border-0">
                            <div class="content-box">
                              <?php if (!empty($first_tab_heading)) { ?>
                                <h3 class="section_title wow animate__animated animate__fadeInUp before-mt-5">
                                  <?php echo $first_tab_heading; ?>
                                </h3>
                              <?php } ?>
                              <?php 
                                foreach ($first_tab_content as $first_tab_content) {            
                                $first_tab_text = $first_tab_content['first_tab_text'];
                              ?>
                              <div class="content-data wow animate__animated animate__fadeInUp delay4 ftdesc">
                                <p><?php echo $first_tab_text; ?></p>
                              </div>
                              <?php } ?>
                              <?php if (!empty($first_tab_button)) { ?>
                              <div class="readmore-btn">
                                <a href="<?php echo $first_tab_button['url']; ?>" data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $first_tab_button['url']; ?>" class="btn theme-btn mt-2 wow animate__animated animate__fadeInUp delay3" target="<?php echo $first_tab_button['target'] ? $first_tab_button['target'] : '_self'; ?>" style="visibility: visible; animation-name: fadeInUp; "><?php echo $first_tab_button['title']; ?></a>
                              </div>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>

                  <div class="col-12 pt-5 mt-4 pb-5" style="background: <?php echo $first_tab_full_width_section_bg; ?>">
                    <div class="container-fluid pb-sm-4 pt-sm-4">
                      <div class="row">
                        <div class="col-md-12 title-box wow animate__animated animate__fadeInUp delay1">
                          <?php if (!empty($first_tab_bg_section_heading)) { ?>
                            <h2 class="section-title fs-26">
                              <?php echo $first_tab_bg_section_heading; ?>
                            </h2>
                          <?php } ?>
                          <?php if (!empty($first_tab_bg_section_sub_heading)) { ?>
                            <h5 class="sub-title mb-5 mt-2">
                              <?php echo $first_tab_bg_section_sub_heading; ?>
                            </h5>
                          <?php } ?>
                        </div>
                        <div class="col-lg-6 d-flex align-item-center order-2 order-sm-1">
                          <div class="content-box">
                            <?php 
                              foreach ($first_tab_left_content as $first_tab_left_content) {            
                              $first_tab_content_title = $first_tab_left_content['first_tab_content_title'];
                              $first_tab_content_list = $first_tab_left_content['first_tab_content_list'];
                            ?>
                              <h3 class="section_title before-none fs-20 roboto">
                                <?php echo $first_tab_content_title; ?>
                              </h3>
                              <div class="content-data wow animate__animated animate__fadeInUp">
                                <ul>
                                  <?php 
                                      foreach ($first_tab_content_list as $first_tab_content_list) {            
                                      $first_tab_list = $first_tab_content_list['first_tab_list'];
                                    ?>
                                  <li><?php echo $first_tab_list; ?></li>
                                    <?php } ?>
                                </ul>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                        <?php if (!empty($first_tab_right_side_image)) { ?>
                        <div class="col-lg-6 border-0 d-flex order-1 order-sm-2">
                          <img
                            alt=""
                            class="img-fluid wow animate__animated animate__slower animate__fadeIn delay1"
                            src="<?php echo $first_tab_right_side_image['url']; ?>"
                          />
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <?php
              $second_tab_add_image = get_field('second_tab_add_image');
              $second_tab_main_heading = get_field('second_tab_main_heading');
              $second_tab_left_content = get_field('second_tab_left_content');
              $second_tab_text = get_field('second_tab_text');
              $second_tab_bg_section_heading = get_field('second_tab_bg_section_heading');
              $second_tab_bg_icon_with_content = get_field('second_tab_bg_icon_with_content');

           ?>
          <div class="tab-pane fade" id="planning-design">
            <?php if (!empty($second_tab_title)) { ?>
              <h3 class="tab-mb-title pt-5"> <?php echo $second_tab_title; ?></h3>
            <?php } ?>
            <section class="img-h-auto img-content mt-4 pb-5">
              <div class="container px-0 pb-4">
                <div class="row gx-lg-5">
                  <?php if (!empty($second_tab_add_image)) { ?>
                    <div class="col-lg-6 border-0 d-flex">
                      <img alt="<?php echo $second_tab_bg_section_heading; ?>" class="img-fluid" src="<?php echo $second_tab_add_image; ?>"/>
                    </div>
                  <?php } ?>
                  <div class="col-lg-6 d-flex align-item-center">
                    <div class="content-box">
                      <?php if (!empty($second_tab_main_heading)) { ?>
                        <h3 class="section_title">
                          <?php echo $second_tab_main_heading; ?>
                        </h3>
                      <?php } ?>


                      <div class="content-data secdesc">
                        <?php 
                          foreach ($second_tab_left_content as $second_tab_left_content) {            
                          $second_tab_text = $second_tab_left_content['second_tab_text'];
                        ?>
                        <p><?php echo $second_tab_text; ?></p>
                        <?php } ?>
                      </div>

                      <?php if (!empty($sec_tab_button)) { ?>
                        <div class="readmore-btn">
                          <a href="<?php echo $sec_tab_button['url']; ?>" data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sec_tab_button['url']; ?>" class="btn theme-btn mt-2 wow animate__animated animate__fadeInUp delay3" target="<?php echo $sec_tab_button['target'] ? $sec_tab_button['target'] : '_self'; ?>" style="visibility: visible; animation-name: fadeInUp; "><?php echo $sec_tab_button['title']; ?></a>
                        </div>
                        <?php } ?>

                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="service-detail before-none bg_secondary pb-5 pt-5">
              <div class="col-lg-10 offset-lg-1 pb-2 pt-4">
                <div class="row gy-md-5 gx-md-5">
                  <div class="col-lg-8 offset-lg-2 title-box wow animate__animated animate__fadeInUp delay1">
                    <?php if (!empty($second_tab_bg_section_heading)) { ?>
                      <h2 class="section-title fs-30"><?php echo $second_tab_bg_section_heading; ?> </h2>
                    <?php } ?>
                  </div>
                  
                  <?php 
                      foreach ($second_tab_bg_icon_with_content as $second_tab_bg_icon_with_content) {            
                      $second_tab_icon = $second_tab_bg_icon_with_content['second_tab_icon'];
                      $second_tab_icontitle = $second_tab_bg_icon_with_content['second_tab_icontitle'];
                      $second_tab_description = $second_tab_bg_icon_with_content['second_tab_description'];
                    ?>
                    <div class="col-md-6">
                      <div class="detail-box wow animate__animated animate__fadeInUp" data-magnetic
                      >
                      <?php if (!empty($second_tab_icon || $second_tab_icontitle)) { ?>
                        <h3>
                          <?php if (!empty($second_tab_icon)) { ?>
                          <img
                            src="<?php echo $second_tab_icon; ?>"
                            alt="ntc img"
                          />
                          <?php } ?>
                          <?php if (!empty($second_tab_icontitle)) { ?>
                            <?php echo $second_tab_icontitle; ?>
                          <?php } ?>
                        </h3>
                        <?php } ?>
                        <?php if (!empty($second_tab_description)) { ?>
                          <p>
                            <?php echo $second_tab_description; ?>
                          </p>
                        <?php } ?>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </section>
          </div>
          <?php
          $third_tab_add_image = get_field('third_tab_add_image');
          $third_tab_main_heading = get_field('third_tab_main_heading');
          $third_tab_left_content = get_field('third_tab_left_content');
          $third_tab_text = get_field('third_tab_text');
          $third_tab_bg_section_heading = get_field('third_tab_bg_section_heading');
          $third_tab_bg_icon_with_content = get_field('third_tab_bg_icon_with_content');

           ?>
          <div class="tab-pane fade" id="network-operations">
            <?php if (!empty($third_tab_title)) { ?>
              <h3 class="tab-mb-title pt-5"> <?php echo $third_tab_title; ?></h3>
            <?php } ?>
            <section class="img-h-auto img-content mt-4 pb-5">
              <div class="container px-0 pb-4">
                <div class="row gx-lg-5">
                  <?php if (!empty($third_tab_add_image)) { ?>
                    <div class="col-lg-6 border-0 d-flex">
                      <img alt="<?php echo $third_tab_bg_section_heading ?>" class="img-fluid" src="<?php echo $third_tab_add_image; ?>"/>
                    </div>
                  <?php } ?>
                  <div class="col-lg-6 d-flex align-item-center">
                    <div class="content-box">
                      <?php if (!empty($third_tab_main_heading)) { ?>
                        <h3 class="section_title">
                          <?php echo $third_tab_main_heading; ?>
                        </h3>
                      <?php } ?>

                      <div class="content-data thirddscbtn">
                        <?php 
                          foreach ($third_tab_left_content as $third_tab_left_content) {            
                          $third_tab_text = $third_tab_left_content['third_tab_text'];
                        ?>
                        <p><?php echo $third_tab_text; ?></p>
                        <?php } ?>
                      </div>

                      <?php if (!empty($third_tab_button)) { ?>
                      <div class="readmore-btn">
                        <a href="<?php echo $third_tab_button['url']; ?>" data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $third_tab_button['url']; ?>" class="btn theme-btn mt-2 wow animate__animated animate__fadeInUp delay3" target="<?php echo $third_tab_button['target'] ? $third_tab_button['target'] : '_self'; ?>" style="visibility: visible; animation-name: fadeInUp; "><?php echo $third_tab_button['title']; ?></a>
                      </div>
                      <?php } ?>

                              
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="service-detail before-none bg_secondary pb-5 pt-5">
              <div class="col-lg-10 offset-lg-1 pb-2 pt-4">
                <div class="row gy-md-5 gx-md-5">
                  <?php if (!empty($third_tab_bg_section_heading)) { ?>
                  <div class="col-lg-8 offset-lg-2 title-box wow animate__animated animate__fadeInUp delay1">
                    <h2 class="section-title fs-30">
                      <?php echo $third_tab_bg_section_heading; ?>
                    </h2>
                  </div>
                  <?php } ?>
                   <?php 
                      foreach ($third_tab_bg_icon_with_content as $third_tab_bg_icon_with_content) {            
                      $third_tab_icon = $third_tab_bg_icon_with_content['third_tab_icon'];
                      $third_tab_icontitle = $third_tab_bg_icon_with_content['third_tab_icontitle'];
                      $third_tab_description = $third_tab_bg_icon_with_content['third_tab_description'];
                    ?>
                      <div class="col-md-6">
                        <div class="detail-box wow animate__animated animate__fadeInUp" data-magnetic >
                          <h3>
                            <img
                              src="<?php echo $third_tab_icon; ?>"
                              alt=""
                            />
                            <?php echo $third_tab_icontitle; ?>
                          </h3>
                          <p><?php echo $third_tab_description; ?> </p>
                        </div>
                      </div>
                  <?php } ?>
                </div>
              </div>
            </section>
          </div>
          <?php
          $fourth_tab_main_heading = get_field('fourth_tab_main_heading');
          $fourth_tab_main_description = get_field('fourth_tab_main_description');
          $fourth_tab_add_image = get_field('fourth_tab_add_image');
          $fourth_tab_bg_icon_with_content = get_field('fourth_tab_bg_icon_with_content');

          $fourth_tab_bg_full_icon_with_content = get_field('fourth_tab_bg_full_icon_with_content');
           ?>
          <div class="tab-pane fade" id="cloud-networking">
            <?php if (!empty($forth_tab_title)) { ?>
              <h3 class="tab-mb-title pt-5"> <?php echo $forth_tab_title; ?></h3>
            <?php } ?>
            <section class="service-detail network-telemetry-details before-none">
              <section class="only-text">
                <div class="container">
                  <div class="row">
                    <?php if (!empty($fourth_tab_main_heading)) { ?>
                      <div class="col-lg-10 offset-lg-1">
                        <div class="px-lg-5">
                          <h3 class="mb-remove-arrow">
                            <?php echo $fourth_tab_main_heading; ?>
                          </h3>
                        </div>
                      </div>
                    <?php } ?>
                    <?php if (!empty($fourth_tab_main_description)) { ?>
                    <div class="col-lg-10 offset-lg-1">
                      <div class="px-lg-5 mb-5">
                        <p><?php echo $fourth_tab_main_description; ?> </p>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </section>

              <section class="service-detail pt-0 bg_secondary pb-5">
                <div class="container pb-3">
                  <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                      <div class="row gy-md-5 gx-md-5">
                        <?php if (!empty($fourth_tab_add_image)) { ?>
                        <div class="col-md-12 z-1">
                          <img src="<?php echo $fourth_tab_add_image; ?>" alt="" class="w-100 br_10 img-fluid"/>
                        </div>
                        <?php } ?>
                        <?php 
                          foreach ($fourth_tab_bg_icon_with_content as $fourth_tab_bg_icon_with_content) {            
                          $fourth_tab_icon = $fourth_tab_bg_icon_with_content['fourth_tab_icon'];
                          $fourth_tab_icontitle = $fourth_tab_bg_icon_with_content['fourth_tab_icontitle'];
                          $fourth_tab_description = $fourth_tab_bg_icon_with_content['fourth_tab_description'];
                        ?>
                        <div class="col-md-6">
                          <div class="detail-box wow animate__animated animate__fadeInUp" data-magnetic >
                            <?php if (!empty($fourth_tab_icon || $fourth_tab_icontitle)) { ?>
                              <h3>
                                <?php if (!empty($fourth_tab_icon)) { ?>
                                  <img src="<?php echo $fourth_tab_icon; ?>" alt=""/>
                                <?php } ?>
                                <?php if (!empty($fourth_tab_icontitle)) { ?>
                                  <?php echo $fourth_tab_icontitle; ?>
                                <?php } ?>
                              </h3>
                            <?php } ?>
                            <?php if (!empty($fourth_tab_description)) { ?>
                            <p><?php echo $fourth_tab_description; ?></p>
                            <?php } ?>
                          </div>
                        </div>
                        <?php } ?>
                        <?php 
                          foreach ($fourth_tab_bg_full_icon_with_content as $fourth_tab_bg_full_icon_with_content) {            
                          $fourth_tab_fullw_icon = $fourth_tab_bg_full_icon_with_content['fourth_tab_fullw_icon'];
                          $fourth_tab_fullw_icontitle = $fourth_tab_bg_full_icon_with_content['fourth_tab_fullw_icontitle'];
                          $fourth_tab_fullw_description = $fourth_tab_bg_full_icon_with_content['fourth_tab_fullw_description'];
                        ?>
                        <div class="col-md-12">
                          <div class="detail-box wow animate__animated animate__fadeInUp delay2" data-magnetic >
                            <?php if (!empty($fourth_tab_fullw_icon || $fourth_tab_fullw_icontitle)) { ?>
                              <h3>
                                <?php if (!empty($fourth_tab_fullw_icon)) { ?>
                                  <img src="<?php echo $fourth_tab_fullw_icon; ?>" alt=""/>
                                <?php } ?>
                                <?php if (!empty($fourth_tab_fullw_icontitle)) { ?>
                                 <?php echo $fourth_tab_fullw_icontitle; ?>
                                <?php } ?>
                              </h3>
                            <?php } ?>
                            <?php if (!empty($fourth_tab_fullw_description)) { ?>
                              <p><?php echo $fourth_tab_fullw_description; ?> </p>
                            <?php } ?>
                          </div>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </section>
          </div>
        </div>
      </div>
    </section> 
