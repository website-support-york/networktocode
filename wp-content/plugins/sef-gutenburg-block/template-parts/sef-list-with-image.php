<?php

/**
* Layout of sef List with Image.
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

$sef_list_with_image_heading = get_field('sef_list_with_image_heading');
$sef_list_with_image_content = get_field('sef_list_with_image_content');
$sef_list_with_image_content_below = get_field('sef_list_with_image_content_below');
$sef_list_with_image_list = get_field('sef_list_with_image_list');
$sef_list_with_image_list_content_left_s2 = get_field('sef_list_with_image_list');
$sef_list_with_image_list_content_right_s2 = get_field('sef_list_with_image_list');
$sef_list_with_image_pic = get_field('sef_list_with_image_pic');
$sef_list_with_image_background = get_field('sef_list_with_image_background');
$sef_list_with_image_style = get_field('sef_list_with_image_style');
$sef_list_with_image_list_heading_left = get_field('sef_list_with_image_list_heading_left');
$sef_list_with_image_list_heading_right = get_field('sef_list_with_image_list_heading_right');
$sef_list_with_image_left_button = get_field('sef_list_with_image_left_button');
$sef_list_with_image_right_button = get_field('sef_list_with_image_right_button');

?>
<?php if ($sef_list_with_image_style === 'Style 1') { ?>

<!-- SADA Assessment topics --> 
    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> sada-assessment" style="background: <?php echo $sef_list_with_image_background; ?>">
      <div class="container">
        <div class="row">
          <div
            class="col-md-12 title-box mb-5 wow animate__animated animate__fadeInUp"
          >
            <? if( $sef_list_with_image_heading ) { ?><h3 class="section-title"><?php echo $sef_list_with_image_heading; ?></h3> <? } ?>
			      <? if( $sef_list_with_image_content ) { ?><h5 class="sub-title"><?php echo $sef_list_with_image_content; ?></h5><? } ?>
          </div>
          <div class="col-lg-7 order-lg-1 order-2 d-flex align-item-center">
            <div class="sada-topics">
              <div class="row">

                <?php 
                  $counter = 0;
                  foreach ($sef_list_with_image_list as $sef_list_with_image_list) {            
                  $sef_list_with_image_list_content_left = $sef_list_with_image_list['sef_list_with_image_list_content_left'];
                  $sef_list_with_image_list_content_right = $sef_list_with_image_list['sef_list_with_image_list_content_right'];
                ?>
                <? if( $sef_list_with_image_list_content_left ) { ?>
                <div
                  class="col-md-6 col-sm-6 wow animate__animated animate__fadeInUp delay<?php echo $counter;?>"
                >
                  <p><?php echo $sef_list_with_image_list_content_left; ?></p>
                </div>
                <?php } ?>
                <? if( $sef_list_with_image_list_content_right ) { ?>
                <div
                  class="col-md-6 col-sm-6 wow animate__animated animate__fadeInUp delay<?php echo $counter;?>"
                >
                  <p><?php echo $sef_list_with_image_list_content_right; ?></p>
                </div>
                <?php } ?>
                <?php $counter++; } ?>

                <div class="col-md-12 order-3 title-box wow animate__animated animate__fadeInUp">
                  <? if( $sef_list_with_image_content_below ) { ?><h5 class="sub-title"><?php echo $sef_list_with_image_content_below; ?></h5><? } ?>
                </div>
                
              </div>
            </div>
          <? if( $sef_list_with_image_pic ) { ?>
          </div>
          <div class="col-lg-5 order-lg-2 order-1 pb-5 text-center">
            <img
              src="<?php echo $sef_list_with_image_pic['url']; ?>"
              class="img-fluid wow animate__animated animate__fadeIn delay4"
              alt="<?php echo $sef_list_with_image_pic['alt']; ?>"
            />
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
<?php } ?>

<?php if ($sef_list_with_image_style === 'Style 2') { ?>

  <!-- Sandbox detail section starts -->
  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> sandbox-details py_80" style="background: <?php echo $sef_list_with_image_background; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-12 title-box mb-4">
            <? if( $sef_list_with_image_heading ) { ?><h2 class="section-title"><?php echo $sef_list_with_image_heading; ?></h2><?php } ?>
          </div>
          <div class="col-md-4">
            <div class="sandbox-detial-box">
              <h4 class="sandbox-title"><?php echo $sef_list_with_image_list_heading_left; ?></h4>
              <ul>
                <?php 
                  foreach ($sef_list_with_image_list_content_left_s2 as $sef_list_with_image_list_content_left_s2) {            
                  $sef_list_with_image_list_content_left_s2 = $sef_list_with_image_list_content_left_s2['sef_list_with_image_list_content_left'];
                ?>
                <?php if (!empty($sef_list_with_image_list_content_left_s2)) { ?>
                  <li><?php echo $sef_list_with_image_list_content_left_s2; ?></li>
                <?php } ?>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="sandbox-detial-box">
              <h4 class="sandbox-title"><?php echo $sef_list_with_image_list_heading_right; ?></h4>
              <ul>
                <?php 
                  foreach ($sef_list_with_image_list_content_right_s2 as $sef_list_with_image_list_content_right_s2) {            
                  $sef_list_with_image_list_content_right_s2 = $sef_list_with_image_list_content_right_s2['sef_list_with_image_list_content_right'];
                ?>
                <?php if (!empty($sef_list_with_image_list_content_right_s2)) { ?>
                <li>
                  <?php echo $sef_list_with_image_list_content_right_s2; ?>
                </li>
                <?php } ?>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php } ?>


<?php if ($sef_list_with_image_style === 'Style 3') { ?>

  <!-- only text content section -->
  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> only-text py_80" style="background: <?php echo $sef_list_with_image_background; ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="px-lg-5">
              <? if( $sef_list_with_image_heading ) { ?>
              <h3 class="wow animate__animated animate__fadeInUp fs-34">
                <?php echo $sef_list_with_image_heading; ?>
              </h3>
              <?php } ?>

              <div class="row text-start pt-4 pb-4 gy-3">

                <?php 
                  foreach ($sef_list_with_image_list_content_left_s2 as $sef_list_with_image_list_content_left_s2) {            
                  $sef_list_with_image_list_content_left_s2 = $sef_list_with_image_list_content_left_s2['sef_list_with_image_list_content_left'];
                ?>
                <?php if (!empty($sef_list_with_image_list_content_left_s2)) { ?>
                <div class="col-md-6">
                  <p class="bullet-point">
                    <?php echo $sef_list_with_image_list_content_left_s2; ?>
                  </p>
                </div>
                <?php } ?>
                <?php } ?>

                <?php 
                  foreach ($sef_list_with_image_list_content_right_s2 as $sef_list_with_image_list_content_right_s2) {            
                  $sef_list_with_image_list_content_right_s2 = $sef_list_with_image_list_content_right_s2['sef_list_with_image_list_content_right'];
                ?>
                <?php if (!empty($sef_list_with_image_list_content_right_s2)) { ?>
                <div class="col-md-6">
                  <p class="bullet-point">
                    <?php echo $sef_list_with_image_list_content_right_s2; ?>
                  </p>
                </div>
                <?php } ?>
                <?php } ?>

              </div>
              <div class="d-flex gap-4 justify-content-center mt-1">
                <?php if (!empty($sef_list_with_image_left_button)) { ?><a href="<?php echo $sef_list_with_image_left_button['url']; ?>" class="btn theme-btn"><?php echo $sef_list_with_image_left_button['title']; ?></a><?php } ?>
                <?php if (!empty($sef_list_with_image_right_button)) { ?><a href="<?php echo $sef_list_with_image_right_button['url']; ?>" class="btn secondary-btn"><?php echo $sef_list_with_image_right_button['title']; ?></a><?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php } ?>