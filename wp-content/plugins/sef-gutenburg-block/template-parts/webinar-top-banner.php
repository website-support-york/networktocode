<?php

/**
* Layout of top banner for webinars.
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
$blog_id = get_the_ID();
$banner_sub_title = get_field("description");
$banner_main_title = get_field("banner_title");
$show_breadcrumb = get_field("show_breadcrubs");
$is_webinar_detail = is_singular( 'post' ) && has_category( 'webinars' );
$cta = get_field("cta");

?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> leadership-title webinar-banner<?php echo $is_webinar_detail ? ' webinar-banner--detail' : ''; ?> main-breadscrumb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 title-box text-center">
            <?php if( $show_breadcrumb ): ?>
              <div class="top-banner "><?php echo get_hansel_and_gretel_breadcrumbs(); ?></div>
			<?php endif; ?>
           
              <h1 class="section-title wow animate__animated animate__fadeInUp delay1"><?php echo $banner_main_title; ?></h1>
           
			      <?php if( $banner_sub_title ): ?>
              <h3 class="wow animate__animated animate__fadeInUp"><?php echo $banner_sub_title; ?></h3>
            <?php endif; ?>
           
            <?php if( $cta ): ?>
              <div class="mt-4 webinar-top-button">
                <a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>" class="btn theme-btn"><?php echo $cta['title']; ?></a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
</section>
