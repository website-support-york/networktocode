<?php

/**
* Layout of sef Image with text.
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
$sef_image_with_text_style = get_field('sef_image_with_text_style');
$sef_bg_color = get_field("sec_background_color");
$sef_img_txt = get_field("sef_img_txt");
$img_txt_position = get_field("img_txt_position");
$sef_img_heading = get_field("sef_img_heading");
$sef_show_arrow_icon = get_field('sef_show_arrow_icon');

$sef_img_btn = get_field("sef_img_btn");
$sef_img_btn_popup = get_field('sef_img_btn_popup');
$sef_img_btn2 = get_field("sef_img_btn2");
$sef_img_btn_popup2 = get_field('sef_img_btn_popup2');
$sef_main_title = get_field('sef_main_title');
$sef_image_with_content = get_field('sef_image_with_content');
$img_shadow = get_field('image_shadow');

$section_title = get_field('image_with_text_section_title');
$section_sub_title = get_field('image_with_text_section_sub_title');

$template = array(
	
);

?>

<?php $row1 = 1; if( have_rows('sef_img_content') ):  
while( have_rows('sef_img_content') ) : the_row();
  $row1++; endwhile; 
endif; ?>

<?php if ($sef_image_with_text_style === 'Style 1') { ?>

  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>cs-align img-content" style="background: <?php echo $sef_bg_color; ?>">
    <div class="container">

      <?php if($section_title): ?>
      <div class="col-md-12 title-box mb-5 mt-5 wow animate__ animate__fadeInUp animated">
          <h3 class="section-title"><?php echo $section_title; ?></h3>
          <h5 class="sub-title col-lg-8 offset-lg-2"><?php echo $section_sub_title; ?></h5>
      </div>
      <?php endif; ?>

      <div class="row gx-lg-5">
        <?php if( $sef_img_txt ): ?>
          <div class="<?php if( !$sef_img_heading || !$row1 ) { ?>col-sm-12<?php } else { ?>col-lg-6<?php } ?><?php if($img_txt_position == "Right"){ ?> img-rgt<?php } ?>">
            <img src="<?php echo $sef_img_txt['url']; ?>" class="img-fluid wow animate__animated animate__fadeIn animate__slower" alt="<?php echo $sef_img_txt['alt']; ?>"/>
          </div>
        <?php endif; ?>
        <div class="<?php if( $sef_img_txt ): ?>col-lg-6<?php endif; ?> <?php if( !$sef_img_txt ): ?>col-sm-12<?php endif; ?> d-flex align-item-center">
          <div class="content-box <?php if($sef_show_arrow_icon == "no"){ ?>arrow-none<?php } ?>">
            <?php if( $sef_img_heading ): ?>
              <h3 class="section_title wow animate__animated animate__fadeInUp"><?php echo $sef_img_heading; ?></h3>
            <?php endif; ?>
            

            <?php if( have_rows('sef_img_content') ): ?>
              <?php while( have_rows('sef_img_content') ) : the_row(); 
                $sef_img_text = get_sub_field("sef_img_text");
                $count = count(get_field('sef_img_content'));
                ?>
                <div class="content-data wow animate__animated animate__fadeInUp delay<?php echo $count; ?>">
                  <?php echo $sef_img_text; ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>

            <?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />'; ?>

            <?php if( $sef_img_btn ): 
              $sef_img_btn_url = $sef_img_btn['url'];
              $sef_img_btn_title = $sef_img_btn['title'];
              $sef_img_btn_target = $sef_img_btn['target'] ? $sef_img_btn['target'] : '_self';
              ?>
              <a href="<?php echo $sef_img_btn_url; ?>" <?php if( $sef_img_btn_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_img_btn_url; ?>" <?php endif; ?> class="btn theme-btn mt-2 wow animate__animated animate__fadeInUp delay3" target="<?php echo $sef_img_btn_target; ?>"><?php echo $sef_img_btn_title; ?></a>
            <?php endif; ?>
            
            <?php if( $sef_img_btn2 ): 
              $sef_img_btn_url2 = $sef_img_btn2['url'];
              $sef_img_btn_title2 = $sef_img_btn2['title'];
              $sef_img_btn_target2 = $sef_img_btn2['target'] ? $sef_img_btn2['target'] : '_self';
              ?>
              <a href="<?php echo $sef_img_btn_url2; ?>" <?php if( $sef_img_btn_popup2 ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_img_btn_url2; ?>" <?php endif; ?> class="btn secondary-btn mt-2 wow animate__animated animate__fadeInUp delay3" target="<?php echo $sef_img_btn_target2; ?>"><?php echo $sef_img_btn_title2; ?></a>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php if ($sef_image_with_text_style === 'Style 2') { ?>

  <!-- Img content side by side section start -->
  <section class="<?php echo esc_attr($className); ?> img-content company" style="background-color: <?php echo $sef_bg_color; ?>">
    <div class="container">
      <?php if (!empty($sef_main_title)) { ?>
        <div class="row gx-lg-5">
          <div
          class="col-md-12 title-box wow animate__animated animate__fadeInUp animated"
          >
          <h2 class="section-title"><?php echo $sef_main_title; ?></h2>
        </div>
      </div>
    <?php } ?>

    <?php if ($sef_image_with_content) { ?>
      <?php 
      $i = 0;
      $len = count($sef_image_with_content);
      foreach ($sef_image_with_content as $sef_image_with_content) {            
        $sef_image = $sef_image_with_content['sef_image'];
        $sef_title = $sef_image_with_content['sef_title'];
        $sef_img_position = $sef_image_with_content['sef_img_position'];
        $sef_heading = $sef_image_with_content['sef_heading'];
        $sef_content = $sef_image_with_content['sef_content'];
        $sef_btn = $sef_image_with_content['sef_btn'];
        $sef_btn_popup = $sef_image_with_content['sef_btn_popup'];
        ?>
        <div class="row gx-lg-5 <?php if ($i == 0) { ?> mt-md-5 pb-md-4 <?php } if ($i != 0 && $i != $len - 1 ) {?> mt-md-5 py-md-4 <?php } ?> <?php if ($i == $len - 1) {?> mt-md-5 <?php } ?>">
          <?php if (!empty($sef_image)) { ?>
            <div class="col-md-6 <?php if($sef_img_position == "Right"){ ?>order-1 order-md-2 <?php } ?><?php if($sef_img_position == "Left"){ ?>order-1 order-md-1 <?php } ?>">
              <img
              src="<?php echo $sef_image['url']; ?>"
              class="img-fluid <?php if ($img_shadow == "Yes") { ?> img-shadow <?php } ?> wow animate__animated animate__fadeIn animate__slower"
              alt=""
              />
              <?php if (!empty($sef_title)) { ?><span
              class="sandbox-img-title wow animate__animated animate__fadeInUp delay2"
              > <?php echo $sef_title; ?> </span
              > <?php } ?>
            </div>
          <?php } ?>
          <div class="col-md-6 d-flex align-item-center <?php if($sef_img_position == "Right"){ ?>order-2 order-md-1 <?php } ?><?php if($sef_img_position == "Left"){ ?>order-2 order-md-2 <?php } ?>">
            <div class="content-box">
              <?php if (!empty($sef_heading)) { ?><h3
              class="remove-arrow section_title wow animate__animated animate__fadeInUp"
              >
              <?php echo $sef_heading; ?>
              </h3><?php } ?>
              
              <?php if (!empty($sef_content)) { ?>
                <?php 
                foreach ($sef_content as $sef_content) {            
                  $sef_img_text = $sef_content['sef_img_text'];
                  ?>
                  <div
                  class="content-data wow animate__animated animate__fadeInUp delay1"
                  >
                  <?php echo $sef_img_text; ?>
                </div>
                <?php if (!empty($sef_btn)) { ?>
                  <a href="<?php echo $sef_btn['url']; ?>" <?php if( $sef_btn_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_btn['url']; ?>" <?php endif; ?> class="btn btn-learn wow animate__animated animate__fadeInUp delay2" target="<?php echo $sef_btn['target']; ?>"><?php echo $sef_btn['title']; ?><i class="bi bi-arrow-right"></i></a>
                <?php } ?>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
      <?php $i++; } ?>
    <?php } ?>
    
  </div>
</section>

<?php } ?>