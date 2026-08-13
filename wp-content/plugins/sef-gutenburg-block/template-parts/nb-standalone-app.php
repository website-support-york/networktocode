<?php
/**
* Layout For Nautobot Apps Slider
**/

// Create id attribute allowing for custom "anchor" value.
$id = 'nb_standalone_app_' . $block['id'];
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
$standalone = get_field('standalone_app');

if ($standalone[0]) :

    $app_id = $standalone[0];
    $banner = get_field('app_banner_image', $app_id);
?>


    <section id="<?php echo $id; ?>" class="standalone-app <?php echo $className; ?>">
        <div class="container">
            <?php if ($section_title) : ?>
                <div class="col-md-12 title-box">
                    <h2 class="section-title"><?php echo $section_title; ?></h2>                                  
                </div>
            <?php endif; ?>
            <div class="standalone-wrapper">
                <div class="standalone-app__image">
                    <?php
                    if ($banner) {
                        echo '<img src="'.esc_url($banner['url']).'" alt="'.esc_attr($banner['alt']).'">';
                    } 
                    ?>
                </div>
    
                <div class="standalone-app__content">
                    <?php if (has_post_thumbnail($app_id)) {
                        echo get_the_post_thumbnail($app_id, 'large');
                    } ?>
                    <h2><?php echo esc_html(get_the_title($app_id)); ?></h2>
                    
                    <p><?php echo esc_html(wp_trim_words(get_the_excerpt($app_id), 20)); ?></p>
                    
                    <a target="_blank" href="<?php echo esc_url(get_permalink($app_id)); ?>" class="btn">
                        Learn More →
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>