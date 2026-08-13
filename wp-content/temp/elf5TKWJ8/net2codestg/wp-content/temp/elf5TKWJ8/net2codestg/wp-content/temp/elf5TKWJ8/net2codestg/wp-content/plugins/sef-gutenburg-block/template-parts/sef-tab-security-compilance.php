<?php

/**
* Layout of sef Tab for security compilance.
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
$first_tab_add_image = get_field('first_tab_add_image');
$first_tab_heading = get_field('first_tab_heading');
$first_tab_content = get_field('first_tab_content');
$first_tab_text = get_field('first_tab_text');
$first_tab_button = get_field('first_tab_button');
$first_tab_full_width_section_bg = get_field('first_tab_full_width_section_bg'); 
$first_tab_bg_icon_with_content = get_field('first_tab_bg_icon_with_content'); 
$first_tab_icon = get_field('first_tab_icon');
$first_tab_icontitle = get_field('first_tab_icontitle');
$first_tab_description = get_field('first_tab_description');

$first_tab_tooltip = get_field('first_tab_tooltip');
$second_tab_tooltip = get_field('second_tab_tooltip');

?>



<!-- new tab view of security and compilance -->
<section class="platform-development blog-media pb-0">
      <div class="container-fluid px-0">
        <div class="container">
          <ul class="nav nav-tabs wow animate__animated animate__fadeInUp">
            <?php if (!empty($first_tab_title)) { ?>
            <li class="nav-item nav-blog">
              <a class="nav-link active" data-bs-toggle="tab" href="#firewall" data-toggle="tooltip" data-placement="top" title="<?php echo $first_tab_tooltip; ?>" rel="tooltip"><?php echo $first_tab_title; ?></a >
            </li>
            <?php } ?>
            <?php if (!empty($second_tab_title)) { ?>
            <li class="nav-item nav-event">
              <a class="nav-link" data-bs-toggle="tab" href="#securityVerification" data-toggle="tooltip" data-placement="top" title="<?php echo $second_tab_tooltip; ?>" rel="tooltip"><?php echo $second_tab_title; ?></a >
            </li>
            <?php } ?>



          </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active fade show" id="firewall">
            <?php if (!empty($first_tab_title)) { ?>
              <h3 class="tab-mb-title"><?php echo $first_tab_title; ?></h3>
            <?php } ?>
            <section class="img-mh-auto img-content mt-4 pb-5">
              <div class="container px-0 pb-4">
                <div class="row gx-lg-5">
                  <?php if (!empty($first_tab_add_image)) { ?>
                    <div class="col-lg-6 border-0">
                      <img alt="" class="img-fluid wow animate__animated animate__slower animate__fadeIn delay1" src="<?php echo $first_tab_add_image; ?>"/>
                    </div>
                  <?php } ?>
                  <div class="col-lg-6 d-flex align-item-center">
                    <div class="content-box">
                      <?php if (!empty($first_tab_heading)) { ?>
                        <h3 class="section_title wow animate__animated animate__fadeInUp">
                          <?php echo $first_tab_heading; ?>
                        </h3>
                      <?php } ?>
                      <?php 
                        foreach ($first_tab_content as $first_tab_content) {            
                        $first_tab_text = $first_tab_content['first_tab_text'];
                      ?>
                      <div class="content-data wow animate__animated animate__fadeInUp">
                        <p><?php echo $first_tab_text; ?></p>
                      </div>
                      <?php } ?>
                      <?php if (!empty($first_tab_button)) { ?>
                        <a href="<?php echo $first_tab_button['url']; ?>" data-cursor="-opaque" data-bs-toggle="modal" data-bs-target="#contact-us-form" class="btn theme-btn mt-2" target="<?php echo $first_tab_button['target'] ? $first_tab_button['target'] : '_self'; ?>" ><?php echo $first_tab_button['title']; ?></a>
                        <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="service-detail before-none bg_secondary pb-5 pt-5">
              <div class="col-lg-10 offset-lg-1 pb-2 pt-4">
                <div class="row gy-md-5 gx-md-5">
                  <?php 
                    foreach ($first_tab_bg_icon_with_content as $first_tab_bg_icon_with_content) {            
                    $first_tab_icon = $first_tab_bg_icon_with_content['first_tab_icon'];
                    $first_tab_icontitle = $first_tab_bg_icon_with_content['first_tab_icontitle'];
                    $first_tab_description = $first_tab_bg_icon_with_content['first_tab_description'];
                  ?>
                  <div class="col-md-6">
                    <div class="detail-box wow animate__animated animate__fadeInUp" data-magnetic >
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
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade" id="securityVerification">
            <?php if (!empty($second_tab_title)) { ?>
              <h3 class="tab-mb-title mt-5">
                <?php echo $second_tab_title; ?>
              </h3>
            <?php } ?>
            <?php 
            $second_tab_main_heading = get_field('second_tab_main_heading'); 
            $second_tab_main_description = get_field('second_tab_main_description');
            $second_tab_add_image = get_field('second_tab_add_image');
            $second_tab_bg_icon_with_content = get_field('second_tab_bg_icon_with_content');
            $second_tab_icon = get_field('second_tab_icon');
            $second_tab_icontitle = get_field('second_tab_icontitle');
            $second_tab_description = get_field('second_tab_description');
            ?>
            <section class="service-detail network-telemetry-details before-none">
              <section class="only-text">
                <div class="container">
                  <div class="row">
                    <?php if (!empty($second_tab_main_heading)) { ?>
                    <div class="col-lg-8 offset-lg-2">
                      <div class="px-lg-5">
                        <h3 class="mb-remove-arrow">
                          <?php echo $second_tab_main_heading; ?>
                        </h3>
                      </div>
                    </div>
                    <?php } ?>
                    <?php if (!empty($second_tab_main_description)) { ?>
                    <div class="col-lg-10 offset-lg-1">
                      <div class="px-lg-5 mb-5">
                        <p><?php echo $second_tab_main_description; ?> </p>
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
                        <?php if (!empty($second_tab_add_image)) { ?>
                        <div class="col-md-12 z-1">
                          <img src="<?php echo $second_tab_add_image; ?>" alt="" class="w-100 br_10 img-fluid"/>
                        </div>
                        <?php } ?>
                        <?php 
                          foreach ($second_tab_bg_icon_with_content as $second_tab_bg_icon_with_content) {            
                          $second_tab_icon = $second_tab_bg_icon_with_content['second_tab_icon'];
                          $second_tab_icontitle = $second_tab_bg_icon_with_content['second_tab_icontitle'];
                          $second_tab_description = $second_tab_bg_icon_with_content['second_tab_description'];
                        ?>
                        <div class="col-md-6">
                          <div class="detail-box wow animate__animated animate__fadeInUp" data-magnetic >
                             <?php if (!empty($second_tab_icon || $second_tab_icontitle)) { ?>
                              <h3>
                                <?php if (!empty($second_tab_icon)) { ?>
                                  <img src="<?php echo $second_tab_icon; ?>" alt=""/>
                                <?php } ?>
                                <?php if (!empty($second_tab_icontitle)) { ?>
                                  <?php echo $second_tab_icontitle; ?>
                                <?php } ?>
                              </h3>
                            <?php } ?>
                            <?php if (!empty($second_tab_description)) { ?>
                            <p><?php echo $second_tab_description; ?></p>
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