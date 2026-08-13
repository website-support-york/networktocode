<?php

/**
* Layout of top banner.
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

$banner_sub_title = get_field("banner_sub_title");
$banner_main_title = get_field("banner_main_title");
$banner_background_color = get_field("banner_background_color");
$top_banner_img1 = get_field("top_banner_img1");
$top_banner_img2 = get_field("top_banner_img2");
$show_breadcrumb = get_field("show_breadcrumb");

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> leadership-title main-breadscrumb" style="background-color: <?php echo $banner_background_color; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-12 title-box text-center">
            <?php if( $banner_main_title ): ?>
              <h1 class="section-title wow animate__animated animate__fadeInUp delay1"><?php echo $banner_main_title; ?></h1>
            <?php endif; ?>
			<?php if( $banner_sub_title ): ?>
              <h3 class="wow animate__animated animate__fadeInUp"><?php echo $banner_sub_title; ?></h3>
            <?php endif; ?>
            <?php if( $show_breadcrumb === 'yes' ): ?>
			<div class="top-banner"><?php echo get_hansel_and_gretel_breadcrumbs(); ?></div>
			<?php endif; ?>
          </div>
        </div>
      </div>
      <?php if( $top_banner_img1 ): ?>
        <img class="gt_bg wow animate__animated animate__fadeIn delay animate__slower" src="<?php echo $top_banner_img1; ?>" alt="" />
      <?php endif; ?>
      <?php if( $top_banner_img2 ): ?>
        <img class="cicle_bg wow animate__animated animate__fadeIn animate__slower" src="<?php echo $top_banner_img2; ?>" alt="" />
      <?php endif; ?>
</section>