<?php

/**
* Layout of sef Icon with Text.
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


$icon_txt_bg_color = get_field("icon_txt_bg_color");
$icon_txt_banner = get_field("icon_txt_banner");

$template_up = array(
	
);


?>

<?php if( have_rows('add_icon_box') ): ?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> service-detail pt-0<?php if( !$icon_txt_banner ): ?> no-img<?php endif; ?>" style="background: <?php echo $icon_txt_bg_color; ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="row gy-md-5 gx-md-5">
              <div class="col-md-12 z-1">
                <?php if( $icon_txt_banner ): ?>
                <img src="<?php echo $icon_txt_banner; ?>" alt="" class="w-100 br_10 img-fluid wow animate__animated animate__fadeIn delay1" />
                <?php endif; ?>
              </div>

              <?php while( have_rows('add_icon_box') ) : the_row(); 
                $icon_box_width = get_sub_field("icon_box_width");
                $icon_txt_icon = get_sub_field("icon_txt_icon");
                $icon_txt_heading = get_sub_field("icon_txt_heading");
                $icon_txt_content = get_sub_field("icon_txt_content");
                $sef_box_button = get_sub_field('sef_box_button');
                $sef_button_popup = get_sub_field('button_popup');
              ?>
              <div class="<?php if($icon_box_width == "Half"){ ?>col-md-6<?php } else { ?>col-md-12<?php } ?>">
                <div class="detail-box wow animate__animated animate__fadeInUp" data-magnetic >
                  <?php if( $icon_txt_heading ): ?>
                  <h3>
                    <?php if( $icon_txt_icon ): ?>
                    <img src="<?php echo $icon_txt_icon; ?>" alt="" />
                    <?php endif; ?>
                    <?php echo $icon_txt_heading; ?>
                  </h3>
                  <?php endif; ?>
                  <?php if (!empty($icon_txt_content)) { ?>
                    <?php echo $icon_txt_content; ?>
                  <?php } ?>
                  <?php if (!empty($sef_box_button)) { ?>
                  <a href="<?php echo $sef_box_button['url'] ?>" <?php if( $sef_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_box_button['url'] ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_box_button['title'] ?></a>
                  <?php } ?>
                </div>
              </div>
              <?php endwhile; ?>
                <?php if (!empty($template_up)) { ?>
                <?php echo '<InnerBlocks template_up="' . esc_attr( wp_json_encode( $template_up ) ) . '" />'; ?>
              <?php } ?>
            
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>