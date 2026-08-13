<?php

/**
* Layout of Get to know.
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


$sef_background_color = get_field("sef_background_color");
$sef_gtk_main_title = get_field("sef_gtk_main_title");
?>


    <!-- get to know us section starts -->
    <section class="get-to-know" style="background: <?php echo $sef_background_color; ?>">
      <div class="container">
        <div class="row gy-4">
          <?php if( $sef_gtk_main_title ): ?>
            <div class="col-md-12">
              <div class="title-box">
                <h2 class="section-title"><?php echo $sef_gtk_main_title; ?></h2>
              </div>
            </div>
          <?php endif; ?>
           <?php if( have_rows('get_to_know_us_blocks') ): ?>
              <?php while( have_rows('get_to_know_us_blocks') ) : the_row(); 
                $get_to_know_image = get_sub_field('get_to_know_image');
                $get_to_know_heading = get_sub_field('get_to_know_heading');
                $get_to_know_url = get_sub_field('get_to_know_url');
              ?>
              <div class="col-sm-6">
                <?php if (!empty($get_to_know_url)) { ?>
                  <a href="<?php echo $get_to_know_url['url'] ?>" target="_blank" class="get-box">
                  <?php } ?>
                  <div>
                    <?php if( $get_to_know_image ): ?>
                      <img src="<?php echo $get_to_know_image; ?>" alt="" class="w-100 img-fluid" />
                    <?php endif; ?>
                    <?php if( $get_to_know_heading ): ?>
                      <h5><?php echo $get_to_know_heading; ?></h5>
                    <?php endif; ?>
                    <i class="bi bi-arrow-right"></i>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>