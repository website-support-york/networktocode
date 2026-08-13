<?php

/**
* Layout of Resource Box content
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
$heading = get_field('heading');
$heading_icon = get_field('heading_icon');
$sub_heading = get_field('sub_heading');
$sub_heading_icon = get_field('sub_heading_icon');
$cta_heading = get_field('cta_heading');
$cta_button = get_field('cta_button');
?>
<section class="recommandation <?php echo $className; ?>" id="<?php echo esc_attr($id); ?>">
    <div class="container">
        <div class="title-box">
            <?php if(!empty($heading) || !empty($heading_icon) ):?><span class="badge"><i class="star-icon"><img src="<?php echo $heading_icon['url'];?>" alt="<?php echo $heading_icon['alt'];?>" /></i><?php echo $heading;?></span><?php endif;?>
            <?php if(!empty($sub_heading_icon) || !empty($sub_heading) ):?><h2><span class="book-icon"><img src="<?php echo $sub_heading_icon['url'];?>" alt="<?php echo $sub_heading_icon['alt'];?>" /></span> <?php echo $sub_heading;?></h2><?php endif;?>
        </div>
        <?php if( have_rows('box_content') ):?>
        <div class="recommandation-block">
            <?php while( have_rows('box_content') ) : the_row();
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            ?>    
            <div class="single-recommandation-block">
                <?php if(!empty($title)):?><p><?php echo $title;?></p><?php endif;?>
                <?php if(!empty($content)):?><span><?php echo $content;?></span><?php endif;?>
            </div>
            <?php endwhile;?>
        </div>
        <?php endif;?>
        <div class="recommandation-cta">
            <?php if( !empty($cta_heading) ):?><p><?php echo $cta_heading;?></p><?php endif;?>
            <?php if(!empty($cta_button)):?><a href="<?php echo $cta_button['url'];?>" target="<?php echo $cta_button['target'];?>" class="btn theme-btn"><?php echo $cta_button['title'];?></a><?php endif;?>
        </div>
    </div>
</section>