<?php
/**
* Layout For Nautobot Apps Slider
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

$component_one = get_field('popular_apps');
$section_title = get_field('section_title');
$exclude_ids = [];
?>
<section id="<?php echo $id; ?>" class="nb-app-slider <?php echo $className; ?>">
    
<?php if ($section_title) : ?>
<div class="col-md-12 title-box">
    <h2 class="section-title"><?php echo $section_title; ?></h2>                                  
</div>
<?php endif; ?>
    <div class="container-wrapper">
    <?php
    if ($component_one) :

        echo '<div class="component-wrapper"><div class="component-one-grid ss">';
        for ($i = 0; $i < 3; $i++) :
        foreach ($component_one as $app) :

            $app_id = $app;

            // Exclude if exists in component 2
            if (in_array($app_id, $exclude_ids)) {
                continue;
            }

            $banner = get_field('app_banner', $app_id);
            $coming_soon = get_field('coming_soon', $app_id);
            $updated = get_field('updated', $app_id);
            ?>
            
            <div class="app-card <?php echo $coming_soon ? "app-new" : ""; ?><?php echo $updated ? "app-updated" : ""; ?>">
                <h3><?php echo esc_html(get_the_title($app_id)); ?></h3>

                <div class="app-image">
                    <?php
                    if ($banner) {
                        echo '<img src="'.esc_url($banner['url']).'" alt="'.esc_attr($banner['alt']).'">';
                    } elseif (has_post_thumbnail($app_id)) {
                        echo get_the_post_thumbnail($app_id, 'medium');
                    }
                    ?>
                </div>

                <p><?php echo esc_html(wp_trim_words(get_the_excerpt($app_id), 20)); ?></p>

                <a target="_blank"  class="btn btn-learn" href="<?php echo esc_url(get_permalink($app_id)); ?>">
                    Learn More →
                </a>
            </div>
            

    <?php
        endforeach;
        endfor;
        echo '</div></div>';

    endif;
    ?>
    </div>
</section>
