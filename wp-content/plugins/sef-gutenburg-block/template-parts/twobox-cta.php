<?php

/**
* Layout of Two box CTA
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
$cta_image = get_field('cta_image');
$cta_title = get_field('cta_title');
$cta_content = get_field('cta_content');
$cta_button = get_field('cta_button');
?> 
<section class="twobox-cta <?php echo $className; ?>" id="<?php echo esc_attr($id); ?>">
    <div class="container">
        <?php if(!empty($cta_image)):?>
        <div class="dl-cta-graphics">
            <figure><img src="<?php echo $cta_image['url'];?>" alt="<?php echo $cta_image['alt'];?>" title="<?php echo $cta_image['title'];?>"></figure>
        </div>
        <?php endif;?>
        <div class="dl-cta-content">
            <?php if(!empty($cta_title)):?><h4><?php echo $cta_title;?></h4><?php endif;?>
            <?php if(!empty($cta_content)):?><p><?php echo $cta_content;?></p><?php endif;?>
            <?php if(!empty($cta_button)):?><a href="<?php echo $cta_button['url'];?>" target="<?php echo $cta_button['target'];?>" class="cta-btn"><?php echo $cta_button['title'];?></a><?php endif;?>
        </div>
    </div>
</section>
