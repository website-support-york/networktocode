<?php

/**
* Layout of sef Section.
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

$section_template_up = array(
	
);


?>

<!-- sections starts -->

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> policy">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      	<?php echo '<InnerBlocks section_template_up="' . esc_attr( wp_json_encode( $section_template_up ) ) . '" />'; ?>
      </div>
    </div>
  </div>
</section>