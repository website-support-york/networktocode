<?php

/**
* Layout of Open Source - Automation Block.
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
$bg_color = get_field('bg_color');
$sub_heading = get_field('sub_heading');
$sub_content = get_field('sub_content');
$explore_nautobot = get_field('explore_nautobot');
$nb_image = get_field('nb_image');
$image_alignment = get_field('image_alignment');

if($image_alignment === 'Left'){
    $cls = 'rvsr';
}else{
    $cls = '';
}
?>


<!--NS Automation Block Starts-->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> nsos-automation <?php echo $cls;?>" style="<?php echo $bg_color ? 'background-color:' . esc_attr($bg_color) . ';' : ''; ?>">
    <div class="container">
        <div class="title-box">
            <?php if(!empty($heading)):?><h2 class="section-title"><?php echo $heading;?></h2><?php endif;?>
            <div class="short-content">
                <?php if(!empty($sub_heading)):?><h5 class="sub-title"><?php echo $sub_heading;?></h5><?php endif;?>
                <?php if(!empty($sub_content)):?><p><?php echo $sub_content;?></p><?php endif;?>
                <?php if(!empty($explore_nautobot)):?><a target="<?php echo esc_attr($explore_nautobot['target'] ?? '_self' );?>" href="<?php echo $explore_nautobot['url'];?>"><?php echo $explore_nautobot['title'];?></a><?php endif;?>
            </div>
        </div>
        <div class="nsos-wrap">
            <?php if( have_rows('nautobot_list') ):?>
            <div class="nsos-blocks">
                <ul>
                    <?php while( have_rows('nautobot_list') ) : the_row();
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    ?>
                        <li><a href="<?php echo $title['url'];?>" target="<?php echo esc_attr($title['target'] ?? '_self' );?>"><img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>"><?php echo $title['title'];?></a></li>
                    <?php endwhile;?>
                </ul>
            </div>
            <?php endif;?>
            <?php if(!empty($nb_image)):?><div class="nsos-img"><figure><img src="<?php echo $nb_image['url'];?>" alt="<?php echo $nb_image['alt'];?>"></figure></div><?php endif;?>
        </div>
    </div>
</section>
<!--NS Automation Block Ends-->