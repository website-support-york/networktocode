<?php

/**
* Layout of Sef CTA.
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

$template_cta = array(
	
);

$sef_cta_background = get_field('sef_cta_background');
$sef_cta_content = get_field('sef_cta_content');
$sef_cta_link = get_field('sef_cta_link');
$sef_cta_popup = get_field('sef_cta_popup');
$sef_cta_image = get_field('sef_cta_image');

?>

<!-- CTA section starts -->
    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> package-option py_80" style="background: <?php echo $sef_cta_background; ?>">
      <div class="container">
        <div class="row g-0">
          <div class="col-md-12 wow animate__animated animate__fadeInUp">
            <div class="cta_box">
              <div class="cta-content">
                <?php if (!empty($sef_cta_image)) { ?>
                  <img
                  src="<?php echo $sef_cta_image['url']; ?>"
                  class="img-fluid"
                  alt="<?php echo $sef_cta_image['alt']; ?>"
                  />
                <?php } ?>
                <div>
                    <?php if (!empty($sef_cta_content)) { ?><?php echo $sef_cta_content; ?><?php } ?>
                    <?php echo '<InnerBlocks apps_template_up="' . esc_attr( wp_json_encode( $template_cta ) ) . '" />'; ?>
                </div>
              </div>
              <?php if (!empty($sef_cta_link)) { ?><a
                href="<?php echo $sef_cta_link['url']; ?>"
				target="<?php echo $sef_cta_link['target'] ? $sef_cta_link['target'] : '_self'; ?>"
                data-cursor="-opaque"
                <?php if( $sef_cta_popup ): ?>
                data-bs-toggle="modal"
                data-bs-target="<?php echo $sef_cta_link['url']; ?>"
                <?php endif; ?>
                class="btn theme-btn">
                <?php echo $sef_cta_link['title']; ?></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>