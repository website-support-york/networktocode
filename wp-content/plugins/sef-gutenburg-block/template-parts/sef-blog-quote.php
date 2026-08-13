<?php

/**
* Layout of sef Blog Quote.
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
$quote_content = get_field('quote_content');
$quote_image = get_field("quote_image");

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> custom-quote <?php if (empty($quote_image)) { ?>no-img-quote<?php } ?>">
  <?php if (!empty($quote_image)) { ?><img src="<?php echo $quote_image['url']; ?>" alt="<?php echo $quote_image['alt']; ?>"><?php } ?>
  <?php if (!empty($quote_content)) { ?><p><em><?php echo $quote_content; ?></em></p><?php } ?>
</div>