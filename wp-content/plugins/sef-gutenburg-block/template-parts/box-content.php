<?php
/**
 * Layout of Sef box content
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Fields
$color = get_field('color');
$style = get_field('style');
$title  = get_field('title');
$sub_content = get_field('sub_content');
$description = get_field('description');
$bottom_text = get_field('bottom_text');

?>

<?php if ($style === 'Style 1') : ?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> na-video na-popup-video deploy-options">
    <div class="container">
        <div class="row">

            <?php if (!empty($title)) : ?>
                <div class="heading title-box">
                    <h3 class="section-title"><?php echo esc_html($title); ?></h3>
                </div>
            <?php endif; ?>

            <?php if (have_rows('box_content')) : ?>
                    <?php while (have_rows('box_content')) : the_row();
                        $heading = get_sub_field('heading');
                        $image   = get_sub_field('image');
                        $video   = get_sub_field('url');
                    ?>
                        <div class="col-md-4 col-lg-4">
                            <div class="card-image">
                                <?php if(!empty($video)):?><a href="<?php echo $video['url'];?>" data-fancybox="" data-caption="<?php echo $heading;?>">
                                <?php if(!empty($image)):?><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" title="<?php echo $image['title'];?>" data-lazy-src="<?php echo $image['url'];?>" data-ll-status="loaded" class="entered lazyloaded"><noscript><img src="<?php echo $image['url'];?>"
                                                        alt="<?php echo $image['alt'];?>"
                                                        title="<?php echo $image['title'];?>"></noscript>
                                    <span>
                                        <svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M34.45 0.73c2.03 0 4.06 0 6.09 0.00 1.73 0.23 3.46 0.39 5.13 0.82 14.08 3.56 23.28 12.19 27.63 25.89 0.71 2.27 1.03 4.58 1.33 6.91v6.01c-0.23 1.71-0.39 3.41-0.82 5.07-3.61 13.89-12.35 22.99-26.21 27.27-2.29 0.69-4.66 1-7.03 1.28h-6.09c-1.73-0.23-3.46-0.39-5.13-0.82-14.08-3.56-23.28-12.19-27.63-25.89-0.71-2.27-1.03-4.58-1.33-6.91v-6.01c0.23-1.71 0.39-3.41 0.82-5.07C7.84 15.4 16.59 6.31 30.42 2.02c2.29-0.7 4.66-1 7.03-1.29Zm-7.05 36.6v14.96c0 0.87 0 0.87 0.74 0.45l27.0-15.54c0.68-0.39 0.68-0.45 0-0.84l-27.0-15.54c-0.74-0.42-0.74-0.42-0.74 0.45v16.06Z" fill="white"></path>
                                        </svg>
                                    </span>
                                </a>
                                <?php endif;?>
                                <?php endif;?>  
                                <?php if(!empty($heading)):?><p><?php echo $heading;?></p><?php endif;?>
                            </div>
                        </div>
                    <?php endwhile; ?>
            <?php endif; ?>


            <?php if (!empty($bottom_text)) : ?>
                <div class="col-md-12 col-lg-12">
                    <div class="key-cards text-center">
                        <p><?php echo $bottom_text; ?></p>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php else:?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> na-video na-popup-video deploy-options" style="background-color: <?php echo $color; ?>">
    <div class="container">
        <div class="row">

            <?php if (!empty($title)) : ?>
                <div class="heading title-box">
                    <h3 class="section-title"><?php echo esc_html($title); ?></h3>

                    <?php if (!empty($sub_content) || !empty($description) ) : ?>
                        <div class="short-content">
                            <h5 class="sub-title"><?php echo esc_html($sub_content); ?></h5>                
                            <p><?php echo esc_html($description); ?></p>          
                        </div>
                    <?php endif; ?>

                </div>
            <?php endif; ?>

            <?php if (have_rows('box_content')) : ?>
                <?php while (have_rows('box_content')) : the_row();
                    $heading = get_sub_field('heading');
                    $image   = get_sub_field('image');
                    $url   = get_sub_field('url');
                ?>
                <div class="col-md-4 col-lg-6">
                    <div class="card-image">
                        <?php if(!empty($url) || !empty($image) ):?><a href="<?php echo $url['url'];?>" target="<?php echo esc_attr($url['target'] ?? '_self');?>">
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" title="<?php echo $image['title'];?>" data-lazy-src="<?php echo $image['url'];?>" />
                        </a>
                        <?php endif;?>
                        <?php if(!empty($heading) || !empty($url) ):?>
                            <p><a href="<?php echo $url['url'];?>" target="<?php echo esc_attr($url['target'] ?? '_self');?>"><?php echo $heading;?></a></p>
                        <?php endif;?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

