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

$single_img_style = get_field("single_img_style");
$single_img_bg = get_field("single_img_bg");
$single_img = get_field("single_img");
$single_img_left_image = get_field("single_img_left_image");
$single_img_left_button = get_field("single_img_left_button");
$single_img_right_image = get_field("single_img_right_image");
$single_img_right_button = get_field("single_img_right_button");

?>

<?php if( $single_img_style == "Style 1" ) { ?>
  <?php if( $single_img ) { ?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> text-center" style="background: <?php echo $single_img_bg; ?>;">
        <img src="<?php echo $single_img; ?>" class="img-fluid wow animate__animated animate__fadeIn animate__slower" alt="" />
      </section>

  <?php } ?>
<?php } ?>

<?php if( $single_img_style == "Style 2" ) { ?>
  <!-- Nautobot Apps & Ecosystem Integrations section  -->
  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> text-center" style="background: <?php echo $single_img_bg; ?>;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="cloud-img-box text-center">
            <div class="row">
              <?php if (!empty($single_img_left_image)) { ?>
              <div class="col-sm-6">
                <img
                  src="<?php echo $single_img_left_image['url']; ?>"
                  alt="<?php echo $single_img_left_image['alt']; ?>"
                  class="img-fluid"
                  draggable="false"
                />
                <?php if ($single_img_left_button['url'] != "#") { ?>
                <a href="<?php echo $single_img_left_button['url']; ?>" class="btn btn-learn" data-cursor="-color-orange">
                <?php echo $single_img_left_button['title']; ?> <i class="bi bi-arrow-right"></i>
                </a>
                <?php } ?>
                <?php if ($single_img_left_button['url'] == "#") { ?>
                <p><?php echo $single_img_left_button['title']; ?></p>
                <?php } ?>
              </div>
              <?php } ?>
              <?php if (!empty($single_img_right_image)) { ?>
              <div class="col-sm-6">
                <img
                  src="<?php echo $single_img_right_image['url']; ?>"
                  draggable="false"
                  class="img-fluid"
                  alt=""
                />
                <?php if ($single_img_right_button['url'] != "#") { ?>
                <a href="<?php echo $single_img_right_button['url']; ?>" class="btn btn-learn" data-cursor="-color-orange">
                  <?php echo $single_img_right_button['title']; ?> <i class="bi bi-arrow-right"></i>
                </a>
                <?php } ?>
                <?php if ($single_img_right_button['url'] == "#") { ?>
                <p><?php echo $single_img_right_button['title']; ?></p>
                <?php } ?>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>