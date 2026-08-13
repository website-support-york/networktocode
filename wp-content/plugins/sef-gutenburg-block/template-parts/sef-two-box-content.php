<?php
/**
 * Layout of Sef Two box content 
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

$heading       = get_field('heading');
$short_content = get_field('short_content');
$button       = get_field('button'); 


?>
<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $className ); ?>">
    <div class="container">
        <div class="row">
            <div class="heading title-box text-start">
                <?php if ( ! empty( $heading ) ) : ?>
                    <h3 class="section-title"><?php echo esc_html( $heading ); ?></h3>
                <?php endif; ?>
                <?php if ( ! empty( $short_content ) ) : ?>
                <div class="short-content">
                    <h5 class="sub-title"><?php echo esc_html( $short_content ); ?></h5>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php if( have_rows('box_one') ):?>
                    <div class="na-wrap">
                        <?php while( have_rows('box_one') ) : the_row();
                            $box_1_title = get_sub_field('box_1_title');
                            $box_1_short_text = get_sub_field('box_1_short_text');
                            ?>
                            <?php if(!empty($box_1_title)):?><h4><?php echo $box_1_title;?></h4><?php endif;?>
                            <?php if(!empty($box_1_short_text)):?><span><?php echo $box_1_short_text;?></span><?php endif;?>
                            <div class="innerWrap-box">
                                <?php if( have_rows('box_1_content') ):?>
                                    <?php while( have_rows('box_1_content') ) : the_row();
                                        $icon = get_sub_field('box_1_icon');
                                        $title = get_sub_field('box_1_title');
                                        $content = get_sub_field('box_1_content');
                                        ?>
                                        <div class="bx-content">
                                            <?php if(!empty($icon)):?><img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>" title="<?php echo $icon['title'];?>" /><?php endif;?>
                                            <?php if(!empty($title)):?><h4><?php echo $title;?></h4><?php endif;?>
                                            <?php if(!empty($content)):?><p><?php echo $content;?></p><?php endif;?>
                                        </div>
                                    <?php endwhile;?>
                                <?php endif;?>
                            </div>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
            </div>
            
            <div class="col-lg-6">
                <?php if( have_rows('box_two') ):?>
                    <div class="na-wrap">
                        <?php while( have_rows('box_two') ) : the_row();
                            $box_2_title = get_sub_field('box_2_title');
                            $box_2_short_text = get_sub_field('box_2_short_text');
                            ?>
                            <?php if(!empty($box_2_title)):?><h4><?php echo $box_2_title;?></h4><?php endif;?>
                            <?php if(!empty($box_2_short_text)):?><span><?php echo $box_2_short_text;?></span><?php endif;?>
                            <div class="innerWrap-box">
                                <?php if( have_rows('box_2_content') ):?>
                                
                                    <?php while( have_rows('box_2_content') ) : the_row();
                                        $box_2_icon = get_sub_field('box_2_icon');
                                        $box_2_title = get_sub_field('box_2_title');
                                        $box_2_content = get_sub_field('box_2_content');
                                        ?>
                                        <div class="bx-content">
                                        <?php if(!empty($box_2_icon)):?><img src="<?php echo $box_2_icon['url'];?>" alt="<?php echo $box_2_icon['alt'];?>" title="<?php echo $box_2_icon['title'];?>" /><?php endif;?>
                                        <?php if(!empty($box_2_title)):?><h4><?php echo $box_2_title;?></h4><?php endif;?>
                                        <?php if(!empty($box_2_content)):?><p><?php echo $box_2_content;?></p><?php endif;?>
                                        </div>
                                    <?php endwhile;?>
                                <?php endif;?>
                            </div>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
            </div>
            <?php if(!empty($button)):?>
            <div class="text-center mt-5">
                <a href="<?php echo $button['url'];?>" class="btn theme-btn wow animate__ animate__fadeInUp delay4" target="<?php echo $button['target'];?>">
                    <?php echo $button['title'];?>              
                </a>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>
