<?php

/**
* Layout of sef Richtext Solution.
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

$image    = get_field('image');
$title    = get_field('title');
$contents = get_field('contents');


?>

<!-- banner section -->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> cloud-banner">
  <div class="container">
    <div class="row justify-content-center align-item-center text-center">
      <div class="col-md-7">
        <div>
          <?php if (!empty ($image)) { ?><img src="<?php echo $image['url']; ?>" class="cloudn" alt="<?php echo $image['alt']; ?>"/><?php } ?>
          <?php if (!empty ($title )) { ?><h1><?php echo $title; ?></h1><?php } ?>
          <?php if (!empty ($contents )) { ?>
          <?php 
            foreach ($contents as $contents) {            
            $content = $contents['content'];
            
          ?>
            <?php echo $content; ?>
          <?php } ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud1.svg" class="cloud cloud1" alt="" />
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud1.svg" class="cloud cloud2" alt="" />
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud1.svg" class="cloud cloud3" alt="" />
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud1.svg" class="cloud cloud4" alt="" />
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud2.svg" class="cloud cloud5" alt="" />
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud3.svg" class="cloud cloud6" alt="" />
</section>