<?php

/**
* Layout of sef Hero Section.
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

$sef_hero_section_title = get_field('sef_hero_section_title');
$sef_hero_section_description = get_field('sef_hero_section_description');
$sef_hero_section_image = get_field('sef_hero_section_image');
$sef_hero_section_button = get_field('sef_hero_section_button');


?>

    <section class="services py-0">
      <img
        src="<?php echo $sef_hero_section_image['url'];  ?>"
        class="img-fluid wow animate__animated animate__fadeIn delay1"
        alt="ntc img"
      />
      <div class="container">
        <div
          class="service-box title-box wow animate__animated animate__fadeIn delay"
        >
          <?php if (!empty($sef_hero_section_title)) { ?>
          <h3
            class="section-title text-white wow animate__animated animate__fadeInUp delay1"
          >
          <?php echo $sef_hero_section_title;  ?>
          </h3>
          <?php } ?>
          <?php if (!empty($sef_hero_section_description)) { ?>
          <p class="wow animate__animated animate__fadeInUp delay2">
          <?php echo $sef_hero_section_description;  ?>
          </p>
          <?php } ?>
          <?php if (!empty($sef_hero_section_button)) { ?>
          <a
            href="<?php echo $sef_hero_section_button['url'];  ?>"
            class="btn btn-learn wow animate__animated animate__fadeInUp delay5"
          >
          <?php echo $sef_hero_section_button['title'];  ?> <i class="bi bi-arrow-right"></i>
          </a>
          <?php } ?>
        </div>
      </div>
    </section>