<?php

/**
* Layout of webinar quote. 
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
$blog_id = get_the_ID();
$quote = get_field('quote_content');
$speaker  = get_field('quote_speaker');

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> webinar-quote-section">
    <?php if ( !empty($quote) ) : ?>
        <blockquote>
            <p><?php echo wp_kses_post($quote); ?></p>
            <?php if ( !empty($speaker) ) : ?>
                <span class="webinar-quote-speaker"><?php echo wp_kses_post($speaker); ?></span>
            <?php endif; ?>
        </blockquote>
    <?php endif; ?>
</section>
