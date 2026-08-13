<?php

/**
* Layout of sef Key Solution.
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

$color = get_field('color');
$sef_card_column = get_field('no_of_col');
$heading = get_field('heading');
$short_content = get_field('short_content');
$sef_hero_banner_button_popup = get_field('sef_hero_banner_button_popup');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> key-solution" style="background-color: <?php echo $color; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-box wow animate__animated animate__fadeInUp">
            <?php if(!empty($heading)):?><h3 class="section-title"><?php echo $heading;?></h3><?php endif;?>
            <?php if(!empty($short_content)):?>
                <div class="short-content">
                    <h5 class="sub-title"><?php echo esc_html( $short_content ); ?></h5>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <div class="key-cards" >
                <div class="row <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '5 Column' ) { ?>g-5<?php } ?><?php if ($sef_card_column === '3 Column' ) { ?>g-5<?php } ?><?php } ?>">
                    <?php
                    if( have_rows('cards') ):
                        while( have_rows('cards') ) : the_row();
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $sef_hero_banner_button_popup = get_sub_field('sef_hero_banner_button_popup');
                            ?>
                            <div class=" <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '5 Column' ) { ?>col-lg-3 col-md-4 col-sm-6<?php } ?> <?php if ($sef_card_column === '3 Column' ) { ?>col-sm-6 col-md-4<?php } ?> <?php } ?> wow animate__animated animate__fadeInUp">
                                <?php if (!empty($title)) { 
                                    $href = $title['url'];
                                    if (strpos($href, '#') === 0) {
                                        $href = 'javascript:;';
                                    }
                                ?>
                                <a
                                    href="<?php echo $href; ?>"
                                    target="<?php echo $title['target'] ? $title['target'] : '_self'; ?>"
                                    data-cursor="-opaque"
                                    <?php if ($sef_hero_banner_button_popup): ?>
                                    data-bs-toggle="modal"
                                    data-bs-target="<?php echo $title['url']; ?>"
                                    <?php endif; ?>>
                                    <!-- <a target="<?php //echo $title['target'];?>" href="<?php //echo $title['url'];?>"  > -->
                                <div class="single-key-card" id="section_category_<?php echo $i; ?>" style="background-color: <?php echo $sef_key_solution_card_color; ?>" data-magnetic>
                                    <?php if (!empty ($icon )) { ?><img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>" /><?php }?>
                                    <?php if (!empty ($title )) { ?><h4><?php echo $title['title'];?></h4><?php }?>
                                </div>
                                </a>
                                <?php }?>
                            </div>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
  </section>