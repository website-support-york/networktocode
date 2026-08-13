<?php

/**
* Layout of sef Media and Content.
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

$sef_icon_list_style = get_field('sef_icon_list_style');
$icon_list_bg_color = get_field("icon_list_bg_color");
$sef_icon_main_title = get_field("sef_icon_main_title");
?>

<?php if( have_rows('sef_icon_list') ): ?>
<?php while( have_rows('sef_icon_list') ) : the_row(); 
?>

<?php $row1 = 1; if( have_rows('left_side_icon_list') ):  
 while( have_rows('left_side_icon_list') ) : the_row();
  $row1++; endwhile; 
endif; ?>

<?php $row2 = 1; if( have_rows('right_side_icon_list') ):  
 while( have_rows('right_side_icon_list') ) : the_row();
  $row2++; endwhile; 
endif; ?>

<?php endwhile; endif; ?>


<?php if ($sef_icon_list_style === 'Style 1') { ?>

<?php if( have_rows('sef_icon_list') ): ?>
<section class="network-telemetry-details bg_secondary" style="background: <?php echo $icon_list_bg_color; ?>">
      <div class="container">
        <div class="row gy-4 gy-md-5 gx-lg-5">
          <?php if( $sef_icon_main_title ): ?>
            <div class="col-md-12 title-box">
              <h3 class="section-title wow animate__animated animate__fadeInUp">
                <?php echo $sef_icon_main_title; ?>
              </h3>
            </div>
          <?php endif; ?>
          <?php if( have_rows('sef_icon_list') ): ?>
              <?php while( have_rows('sef_icon_list') ) : the_row(); 
              ?>
              
              <?php if( have_rows('left_side_icon_list') ): ?>
                <div class="<?php if( $row2 > 1 ){ ?>col-md-6<?php } else { ?>col-md-12<?php } ?>">
                  <div class="row gy-4">
                    <?php while( have_rows('left_side_icon_list') ) : the_row();
                    $sef_left_icon = get_sub_field('sef_left_icon');
                    $sef_left_heading = get_sub_field("sef_left_heading");
                    $sef_icon_content = get_sub_field("sef_icon_content");
                    $sef_left_icon_postion = get_sub_field('sef_left_icon_postion');
                    ?>
                    <div class="col-md-12 wow animate__animated animate__fadeInUp delay1">
                      <div data-magnetic class="telemetry-detail-box <?php if($sef_left_icon_postion == "second"){ ?> d-flex<?php } ?> gap-3" data-magnetic >
                        <div class="telemetry-img">
                          <?php if( $sef_left_icon ): ?>
                            <img src="<?php echo $sef_left_icon; ?>" alt="" class="img-fluid" />
                          <?php endif; ?>
                        </div>
                        <?php if( $sef_left_heading || $sef_icon_content): ?>
                        <div class="telemetry-content">
                          <?php if( $sef_left_heading ): ?>
                            <h4><?php echo $sef_left_heading; ?></h4>
                          <?php endif; ?>
                          <?php if( $sef_icon_content ): ?>
                            <p><?php echo $sef_icon_content; ?></p>
                          <?php endif; ?>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endwhile; ?>
                  </div>
                </div>

               
              <?php endif; ?>

              <?php if( have_rows('right_side_icon_list') ): ?>
                <div class="<?php if( $row1 > 1 ){ ?>col-md-6<?php } else { ?>col-md-12<?php } ?>">
                  <div class="row gy-4 gy-md-5 gx-lg-5">
                    <?php while( have_rows('right_side_icon_list') ) : the_row();
                    $sef_right_icon = get_sub_field('sef_right_icon');
                    $sef_right_heading = get_sub_field("sef_right_heading");
                    $sef_right_icon_content = get_sub_field("sef_right_icon_content");
                    $sef_right_icon_postion = get_sub_field('sef_right_icon_postion');
                    ?>
                    <div class="col-md-12 wow animate__animated animate__fadeInUp delay1">
                      <div data-magnetic class="telemetry-detail-box <?php if($sef_right_icon_postion == "second"){ ?> d-flex<?php } ?> gap-3" data-magnetic>
                        <div class="telemetry-img">
                          <?php if( $sef_right_icon ): ?>
                            <img src="<?php echo $sef_right_icon; ?>" alt="" class="img-fluid" />
                          <?php endif; ?>
                        </div>
                        <?php if( $sef_right_heading || $sef_right_icon_content): ?>
                        <div class="telemetry-content">
                          <?php if( $sef_right_heading ): ?>
                            <h4><?php echo $sef_right_heading; ?></h4>
                          <?php endif; ?>
                          <?php if( $sef_right_icon_content ): ?>
                            <p><?php echo $sef_right_icon_content; ?></p>
                          <?php endif; ?>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endwhile; ?>
                  </div>
                </div>

               
              <?php endif; ?>


            <?php endwhile; ?>
          <?php endif; ?>

        </div>


      </div>
    </section>
  <?php endif; ?>
<?php } ?>

<?php if ($sef_icon_list_style === 'Style 2') { ?>

   <!-- What You Bring section -->
    <section class="brings-you network-telemetry-details bg_light pb-0" style="background: <?php echo $icon_list_bg_color; ?>">
      <div class="container">
        <div class="row gy-4 gy-md-5 gx-lg-5">
          <?php if( $sef_icon_main_title ): ?>
            <div class="col-md-12 title-box">
              <h2 class="section-title wow animate__animated animate__fadeInUp">
                <?php echo $sef_icon_main_title; ?>
              </h2>
            </div>
          <?php endif; ?>

            <?php if( have_rows('sef_icon_lists') ): ?>
                <?php while( have_rows('sef_icon_lists') ) : the_row();
                $sef_icon = get_sub_field("sef_icon");
                $sef_heading = get_sub_field("sef_heading");
                $sef_content = get_sub_field("sef_content");
                $count = count(get_field('sef_icon_lists'));
                ?>
                    <div class="col-md-6 wow animate__animated animate__fadeInUp delay<?php echo $count; ?>">
                        <div data-magnetic class="telemetry-detail-box d-flex gap-3" data-magnetic >
                          <div class="telemetry-img">
                            <?php if( $sef_icon ): ?>
                              <img src="<?php echo $sef_icon; ?>" alt="" class="img-fluid" />
                            <?php endif; ?>
                          </div>
                        <?php if( $sef_heading || $sef_content): ?>
                          <div class="telemetry-content">
                            <?php if( $sef_heading ): ?>
                              <h4><?php echo $sef_heading; ?></h4>
                            <?php endif; ?>
                            <?php if( $sef_content ): ?>
                              <p><?php echo $sef_content; ?></p>
                            <?php endif; ?>
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>


        </div>
      </div>
    </section>
  
<?php } ?>