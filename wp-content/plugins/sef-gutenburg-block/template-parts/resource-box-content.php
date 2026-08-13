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
$sub_heading = get_field('sub_heading');
$sub_heading_icon = get_field('sub_heading_icon');

?>
<section class="study-lib <?php echo $className; ?>" id="<?php echo esc_attr($id); ?>">
        <div class="container">
            <?php if(!empty($heading)):?>
            <div class="title-box">
                <h3 class="section-title"><span class="chevron">››› </span><?php echo $heading;?></h3>
            </div>
            <?php endif;?>
            <div class="study-info">
                <?php if(!empty($sub_heading_icon) || !empty($sub_heading) ):?>
                    <div class="bk-ic">
                        <h3><span class="book-icon"><img src="<?php echo $sub_heading_icon['url'];?>" alt="<?php echo $sub_heading_icon['alt'];?>" /></span> <?php echo $sub_heading;?></h3>
                    </div>
                <?php endif;?>
                <?php if( have_rows('box_content') ):?>
                <div class="study-blocks">
                    <?php while( have_rows('box_content') ) : the_row();
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        ?>
                        <div class="single-study-block">
                            <?php if(!empty($title)):?><p><?php echo $title;?></p><?php endif;?>
                            <?php if(!empty($content)):?><span><?php echo $content;?></span><?php endif;?>
                        </div>
                    <?php endwhile;?>
                </div>
                <?php endif;?>  
            </div>
        </div>
</section>