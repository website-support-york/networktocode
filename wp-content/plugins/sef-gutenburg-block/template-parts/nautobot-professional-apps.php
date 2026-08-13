<?php
/**
* Layout For Nautobot Professional Apps
**/

// Create id attribute allowing for custom "anchor" value.
$id = 'nb_professional_app_' . $block['id'];
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
<section id="<?php echo $id; ?>" class="professional-apps <?php echo $className; ?>">
    <div class="container">
        <?php if ($section_title) : ?>
            <div class="col-md-12 title-box">
                <h2 class="section-title"><?php echo $section_title; ?></h2>                                
            </div>
        <?php endif; ?>
        <?php

            $args = [
                'post_type'      => 'apps', 
                'posts_per_page' => 5,
                'post_status'    => 'publish',
                'tax_query'      => [
                    [
                        'taxonomy' => 'apps-category',
                        'field'    => 'slug',
                        'terms'    => 'professional-apps', 
                    ],
                ],
            ];
            $query = new WP_Query($args);

            $banner_apps = [];
            $coming_apps = [];

            if ($query->have_posts()) {

                while ($query->have_posts()) {
                    $query->the_post();

                    $post_id = get_the_ID();

                    $banner = get_field('app_banner_image', $post_id);
                    $coming = get_field('coming_soon', $post_id);

                    if (!empty($banner)) {
                        $banner_apps[] = $post_id;
                    } else {
                        $coming_apps[] = $post_id;
                    }
                }

                wp_reset_postdata();
            }
        ?>


        <div class="featured-professional-apps oss-apps-list">
            <?php foreach ($banner_apps as $post_id) :

                $banner    = get_field('app_banner_image', $post_id);
                $thumbnail = get_the_post_thumbnail($post_id, 'medium');
                $excerpt   = get_the_excerpt($post_id);
                $permalink = get_permalink($post_id);
                $coming_soon = get_field('coming_soon', $post_id);
                    $updated = get_field('updated', $post_id);
            ?>

                <div class="single-pf-app app-card has-banner <?php echo $coming_soon ? "app-new" : ""; ?><?php echo $updated ? "app-updated" : ""; ?>">
                    <?php if ($banner) : ?>
                        <div class="app-image">
                            <figure>
                                <img src="<?php echo esc_url($banner['url']); ?>" alt="<?php echo esc_url($banner['alt']); ?>">
                            </figure>
                            <?php if ($thumbnail) : ?>
                                <?php echo $thumbnail; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <h3><?php echo esc_html(get_the_title($post_id)); ?></h3>
                    <?php if ($excerpt) : ?>
                        <p><?php echo esc_html($excerpt); ?></p>
                    <?php endif; ?>
                    <a target="_blank"  href="<?php echo esc_url($permalink); ?>">Learn More →</a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="coming-soon-apps">
            <?php foreach ($coming_apps as $post_id) : $excerpt = get_the_excerpt($post_id);
                $banner    = get_field('app_banner_image', $post_id);
                $thumbnail = get_the_post_thumbnail($post_id, 'medium');
                $excerpt   = get_the_excerpt($post_id);
                $permalink = get_permalink($post_id);
                $coming_soon = get_field('coming_soon', $post_id);
                    $updated = get_field('updated', $post_id);
                 ?>
                <div class="single-coming-soon-app  <?php echo $coming_soon ? "app-new" : ""; ?><?php echo $updated ? "app-updated" : ""; ?>">
                    <!-- <span class="badge">Coming Soon</span> -->
                    <?php if ($thumbnail): ?>
                    <div class="app-image">
                        <?php echo get_the_post_thumbnail($post_id, 'medium'); ?>
                    </div>                        
                    <?php endif ?>

                    <h5><?php echo esc_html(get_the_title($post_id)); ?></h5>
                    <?php if ($excerpt) : ?>
                        <p><?php echo esc_html($excerpt); ?></p>
                    <?php endif; ?>
                    <?php if ($permalink): ?>
                        <a target="_blank" href="<?php echo esc_url($permalink); ?>" class="btn btn-learn">Learn More →</a>
                    <?php endif ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>