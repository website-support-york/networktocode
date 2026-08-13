<?php

/**
* Layout of sef Text block.
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

$txt_block_heading = get_field("txt_block_heading");
$heading_sizes = get_field('heading_sizes');

$show_arrow_icon = get_field("show_txt_icon");
$sef_primary_button = get_field("sef_primary_button");
$primary_popup = get_field("primary_popup");
$sef_secondary_button = get_field("sef_secondary_button");
$secondary_button_popup = get_field("secondary_button_popup");
$sef_third_button = get_field('sef_third_button');
$third_button_popup = get_field('third_button_popup');
$sef_block_background = get_field('sef_block_background');
$primary_button_style = get_field('primary_button_style');
$secondary_button_style = get_field('secondary_button_style');
$third_button_style = get_field('third_button_style');
$popup_name = get_field('popup_name');
$popup_designation = get_field('popup_designation');
$popup_content = get_field('popup_content');

                

?>

<?php $row1 = 1; if( have_rows('txt_block_content') ):  
 while( have_rows('txt_block_content') ) : the_row();
  $row1++; endwhile; 
endif; ?>



<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> only-text"  style="background: <?php echo $sef_block_background; ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="px-lg-5"> 
              <?php if( $txt_block_heading ): ?>
                <h3 class="<?php if($show_arrow_icon == "no"){ ?> remove-arrow<?php } ?> <?php if (!empty($heading_sizes)) { ?> <?php echo esc_attr($heading_sizes); ?> <?php } ?> wow animate__animated animate__fadeInUp"><?php echo $txt_block_heading; ?></h3>
              <?php endif; ?>

              <?php if( have_rows('txt_block_content') ): ?>
                <?php while( have_rows('txt_block_content') ) : the_row(); 
                $sef_img_text = get_sub_field("txt_block_txt");
                $count = count(get_field('txt_block_content'));
              ?>
                 <p class="wow animate__animated animate__fadeInUp delay<?php echo $count; ?>">
                  <?php echo $sef_img_text; ?>
                </p>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if (!empty($sef_primary_button)) { ?>

              <div class="mt-2 wow animate__animated animate__fadeInUp delay2">
                <?php if (!empty($sef_primary_button)) { ?>
                  <a href="<?php echo $sef_primary_button['url'] ?>" class="btn <?php if( $primary_button_style == 'Style 1' ): ?>theme-btn <?php endif; ?> <?php if( $primary_button_style == 'Style 2' ): ?> btn-learn <?php endif; ?> <?php if( $primary_button_style == 'Style 3' ): ?> secondary-btn <?php endif; ?>me-md-3 mb-3 wow animate__animated animate__fadeInUp delay3" target="<?php echo $sef_primary_button['target'] ?>" <?php if( $primary_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_primary_button['url'] ?>" <?php endif; ?>><?php echo $sef_primary_button['title'] ?> <?php if( $primary_button_style == 'Style 2' ): ?><i class="bi bi-arrow-right"></i><?php endif; ?></a>
                <?php } ?>

                <?php if (!empty($sef_secondary_button)) { ?>
                  <a href="<?php echo $sef_secondary_button['url'] ?>" <?php if( $secondary_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_secondary_button['url'] ?>" <?php endif; ?> class="btn <?php if( $secondary_button_style == 'Style 1' ): ?> theme-btn <?php endif; ?> <?php if( $secondary_button_style == 'Style 2' ): ?> btn-learn <?php endif; ?> <?php if( $secondary_button_style == 'Style 3' ): ?> secondary-btn <?php endif; ?> me-md-3 mb-3 wow animate__animated animate__fadeInUp delay3" target="<?php echo $sef_secondary_button['target'] ?>"><?php echo $sef_secondary_button['title'] ?> <?php if( $secondary_button_style == 'Style 2' ): ?><i class="bi bi-arrow-right"></i><?php endif; ?></a>
                <?php } ?>

				<?php if (!empty($sef_third_button)) { ?>
                  <a href="<?php echo $sef_third_button['url'] ?>" <?php if( $third_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_third_button['url'] ?>" <?php endif; ?> class="btn <?php if( $third_button_style == 'Style 1' ): ?> theme-btn <?php endif; ?> <?php if( $third_button_style == 'Style 2' ): ?> btn-learn <?php endif; ?> <?php if( $third_button_style == 'Style 3' ): ?> secondary-btn <?php endif; ?> me-md-3 mb-3 wow animate__animated animate__fadeInUp delay3" target="<?php echo $sef_third_button['target'] ?>"><?php echo $sef_third_button['title'] ?> <?php if( $third_button_style == 'Style 2' ): ?><i class="bi bi-arrow-right"></i><?php endif; ?></a>
                <?php } ?>
              </div>
              <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </section>

	<?php if( $primary_popup ): ?>
	<div
      class="modal modal-left fade founder-msg-modal"
      id="popup"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/x.svg" alt="" />
          </button>
          <div class="modal-body msg-content">
            <?php if (!empty($popup_name)) { ?><h4><?php echo $popup_name; ?></h4><?php } ?>
            
            <?php if (!empty($popup_designation)) { ?><h6><?php echo $popup_designation; ?></h6><?php } ?>
            
             <?php if (!empty($popup_content)) { ?><?php echo $popup_content; ?><?php } ?>
          </div>
        </div>
      </div>
    </div>
	<?php endif; ?>