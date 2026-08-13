<?php

/**
* Layout of York book description
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
$content = get_field('content');
$button_1 = get_field('button_1');
$button_2 = get_field('button_2');
$image = get_field('image');
?> 
<section class="<?php echo $className; ?>" id="<?php echo esc_attr($id); ?>">
    <div class="container">
        <?php if(!empty($heading) || !empty($content) ):?>
            <div class="book-desc">
                <h2><?php echo $heading;?></h2>
                <p><?php echo $content;?></p>
            </div>
        <?php endif;?>
        <div class="bookInfoWrap">
            <div class="bookContent">
                <?php if( have_rows('inner_content') ):?>
                    <?php while( have_rows('inner_content') ) : the_row();
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        ?>
                        <h2><?php echo $title;?></h2>
                        <p><?php echo $description;?></p>
                    <?php endwhile;?>
                <?php endif;?>
                <div class="btnWrap d-flex">
                    <?php if(!empty($button_1)):?>
                        <a class="btn theme-btn" href="<?php echo $button_1['url'];?>" target="<?php echo $button_1['target'];?>"><?php echo $button_1['title'];?></a>
                    <?php endif;?>
                    <?php if(!empty($button_2)):?>
                        <a class="btn theme-btn" href="<?php echo $button_2['url'];?>" target="<?php echo $button_2['target'];?>"><?php echo $button_2['title'];?></a>
                    <?php endif;?>
                </div>
            </div>
            <div class="bookCover">
                <?php if(!empty($image)):?><img class="bookImg" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"><?php endif;?>
            </div>
        </div>
    </div>
</section>