<?php

/**
* Layout of Sef Roadmap Block.
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

$sef_roadmap_title = get_field('sef_roadmap_title');
$sef_roadmap_content = get_field('sef_roadmap_content');
$sef_roadmap_cards = get_field('sef_roadmap_cards');


?>

<!-- roadmap section -->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> apps-solition bg_secondary py_80">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-8 offset-lg-2 title-box mb-4 wow animate__animated animate__fadeInUp"
          >
            <?php if (!empty($sef_roadmap_title)) { ?><h2 class="section-title"><?php echo $sef_roadmap_title; ?></h2><?php } ?>
            <?php if (!empty($sef_roadmap_content)) { ?><h5 class="sub-title">
              <?php echo wp_strip_all_tags( $sef_roadmap_content); ?>
            </h5><?php } ?>
          </div>
          <?php if( have_rows('sef_roadmap_cards') ): ?>
          <div class="col-md-12">
            <div class="app-box mb-4">
              <div
                class="row gy-4 wow animate__animated animate__fadeInUp delay2"
              >

              <?php while( have_rows('sef_roadmap_cards') ) : the_row(); 
                $sef_roadmap_card_title = get_sub_field("sef_roadmap_card_title");
                $sef_roadmap_card_content = get_sub_field("sef_roadmap_card_content");
                $sef_roadmap_card_author = get_sub_field("sef_roadmap_card_author");
                $sef_roadmap_card_date = get_sub_field("sef_roadmap_card_date");
                $sef_roadmap_card_button = get_sub_field("sef_roadmap_card_button");
                $count = count(get_field('sef_roadmap_cards'));
              ?>
                <div class="col-lg-3 col-md-6">
                  <div class="app-card bg-light">
                    <?php if (!empty($sef_roadmap_card_author || $sef_roadmap_card_date || $sef_roadmap_card_title || $sef_roadmap_card_content)) { ?>
                    <div>
                      <?php if (!empty($sef_roadmap_card_title)) { ?><h5 class="fw-600"><?php echo $sef_roadmap_card_title; ?></h5><?php } ?>
                      <?php if (!empty($sef_roadmap_card_content)) { ?><p class="text-center">
                        <?php echo wp_strip_all_tags( $sef_roadmap_card_content); ?>
                      </p><?php } ?>
                      <?php if (!empty($sef_roadmap_card_author || $sef_roadmap_card_date)) { ?>
                      <h6 class="text-center">
                        <?php if (!empty($sef_roadmap_card_author)) { ?><?php echo $sef_roadmap_card_author; ?><?php } ?>
                        <?php if (!empty($sef_roadmap_card_date)) { ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-angle.svg" alt="" />
                        <?php echo $sef_roadmap_card_date; ?><?php } ?>
                      </h6>
                      <?php } ?>
                    </div>
                    <?php } ?>
                    <?php if (!empty($sef_roadmap_card_button)) { ?>
                    <div>
                      <a class="btn btn-learn" href="<?php echo $sef_roadmap_card_button['url']; ?>" target="<?php echo $sef_roadmap_card_button['target'] ? $sef_roadmap_card_button['target'] : '_self'; ?>">
                        <?php echo $sef_roadmap_card_button['title']; ?> <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <?php endwhile; ?>
              
              </div>
            </div>
          </div>
          <?php endif;?>
        </div>
      </div>
    </section>