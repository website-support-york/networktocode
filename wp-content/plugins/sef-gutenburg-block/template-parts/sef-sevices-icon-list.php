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

$sef_bg_color = get_field("sef_background_color");
$sef_main_title = get_field("sef_main_title");
$sef_sub_title = get_field("sef_sub_title");

?>

<?php if( have_rows('sef_services_list') ): ?>
  
<section class="why-managed-service" style="background: <?php echo $sef_bg_color; ?>">
      <div class="container">
        <div class="row">
          <?php if (!empty($sef_main_title)) { ?>
            <div class="col-md-12 mb-2">
              <div class="title-box">
                <h2 class="section-title wow animate__animated animate__fadeInUp">
                  <?php echo $sef_main_title; ?>
                </h2>

                <?php if($sef_sub_title): ?>
                <h5 class="sub-title col-lg-8 offset-lg-2"><?php echo $sef_sub_title; ?></h5>
                <?php endif; ?>

              </div>
            </div>
          <?php } ?>
          <div class="col-md-12 mt-4">
            <div class="managed-service-contain">
              <div class="row g-0">
                <?php while( have_rows('sef_services_list') ) : the_row(); 
                $sef_service_icon = get_sub_field("sef_service_icon");
                $sef_service_heading = get_sub_field("sef_service_heading");
                $sef_service_content = get_sub_field("sef_service_content");
              ?>
                <div class="col-md-4">
                  <div
                    class="managed-service-box wow animate__animated animate__fadeInUp"
                  >
                    <?php if (!empty($sef_service_icon)) { ?>
                      <img src="<?php echo $sef_service_icon['url']; ?>" alt="<?php echo $sef_service_icon['alt']; ?>" />
                    <?php } ?>

                    <?php if (!empty($sef_service_heading)) { ?>
                      <h4><?php echo $sef_service_heading; ?></h4>
                    <?php } ?>

                    <?php if (!empty($sef_service_content)) { ?>
                    <p> <?php echo $sef_service_content; ?> </p>
                    <?php } ?>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

