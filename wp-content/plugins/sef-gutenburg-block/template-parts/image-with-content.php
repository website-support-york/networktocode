<?php

/**
* Layout of Table of Content
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

$heading_image = get_field('heading_image');
$style = get_field('style');
$heading = get_field('heading');
$short_content = get_field('short_content');
$image = get_field('image');
$title = get_field('title');
$bullets_points = get_field('bullets_points');
$learn_more = get_field('learn_more');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-color: rgba(243, 249, 254, 1);">
    <div class="">
        <div class="container">

            <!-- Use the layout with bullets points -->
            <?php if ( $style == 'Image with bullets points' ): ?>
                <div class="image-with-bullets">
                    <div class="row">

                        <div class="heading title-box">
                            <!-- Nautobot Heading Image -->
                            <?php if(!empty($heading_image)):?>
                                <img src="<?php echo esc_url( $heading_image['url'] ); ?>" alt="<?php echo esc_attr( $heading_image['alt'] ); ?>" title="<?php echo esc_attr( $heading_image['title'] ); ?>" style="width: 120px" />
                            <?php endif; ?>
                            <!-- Main Heading -->
                            <?php if(!empty($heading)):?>
                                <h3 class="section-title"><?php echo esc_html( $heading ); ?></h3>
                            <?php endif; ?>
                            <!-- Subheading -->
                            <?php if(!empty($short_content)):?>
                                <div class="short-content">
                                    <h5 class="sub-title"><?php echo esc_html( $short_content ); ?></h5>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-6">
                            <!-- Left Column title -->
                            <?php if(!empty($title)):?>
                                <span><?php echo $title;?></span>
                            <?php endif; ?>
                            <!-- Left Column bullet points -->
                            <?php if(!empty($bullets_points)):?>
                                <p><?php echo $bullets_points;?></p>
                            <?php endif; ?>
                            <!-- Check for CTA -->
                            <?php if(!empty($learn_more)):?>
                                <a class="btn theme-btn" href="<?php echo esc_url( $learn_more['url'] ); ?>" target="<?php echo esc_attr( $learn_more['target'] ); ?>">
                                    <?php echo esc_html( $learn_more['title'] ); ?>
                                </a>
                            <?php endif ?>
                        </div>
                        <div class="col-sm-6">
                            <!-- Check for an image -->
                            <?php if(!empty($image)):?>
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" title="<?php echo esc_attr( $image['title'] ); ?>" />
                            <?php endif ?>
                        </div>
                    </div>
                </div>

                <!-- Use the layout with image & content -->
                <?php elseif ( $style == 'Image with content' ): ?>
                 <div class="image-with-content">

                    <!-- Main Heading -->
                    
                    <div class="heading title-box">
                        <?php if(!empty($heading)):?><h3 class="section-title"><?php echo esc_html( $heading ); ?></h3><?php endif ?>
                        <?php if(!empty($short_content)):?><div class="short-content"><p><?php echo ( $short_content ); ?></p></div><?php endif; ?>
                    </div>
                    
                    <!-- Subheading -->
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Check for an image -->
                            <?php if(!empty($image)):?>
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" title="<?php echo esc_attr( $image['title'] ); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if( have_rows('content') ):
                                while( have_rows('content') ) : the_row();
                                    $icon = get_sub_field('icon');
                                    $title = get_sub_field('title');
                                    $short_content = get_sub_field('short_content');
                                    ?>
                                    <div class="icon-items">

                                        <!-- Add icons with heading -->
                                        <?php if(!empty($icon)):?>
                                            <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>" title="<?php echo $icon['title'];?>" />
                                        <?php endif; ?>

                                        <!-- Title/heading used with icon -->
                                        <?php if(!empty($title)):?><span><?php echo $title;?></span><?php endif; ?>

                                        <!-- short description -->
                                        <?php if(!empty($short_content)):?><p><?php echo $short_content;?></p><?php endif; ?>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?>
                        <?php endif; ?>
                    </div>
                </div>
            </div> 
        </div>

    </div>
</section>