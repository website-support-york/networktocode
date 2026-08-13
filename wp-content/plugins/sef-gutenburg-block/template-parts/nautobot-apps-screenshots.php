<?php
/**
* Layout For Nautobot Apps Screenshot
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

$section_title = get_field('section_title');
?>
<section id="<?php echo $id; ?>" class="nb-app-ss <?php echo $className; ?>">
    <div class="container">
        <div class="row">
            <?php if ($section_title) : ?>
                <div class="col-5">
                    <div class="title-box">
                        <h2 class="section-title"><?php echo $section_title; ?></h2>                                  
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-7">
                <div class="ss-wrap">
                    <?php if( have_rows('nautobot_app_screenshots') ) : ?>
                        
                        <?php while( have_rows('nautobot_app_screenshots') ) : the_row(); 
                            $image = get_sub_field('single_screenshots');
                        ?>
                            
                            <?php if( $image ) : ?>
                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery">
                                    <figure>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    </figure>
                                    <div class="img-overlay-btn">
                                        <span><i class="bi bi-arrows-fullscreen"></i></span>
                                    </div>
                                </a>
                            <?php endif; ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>