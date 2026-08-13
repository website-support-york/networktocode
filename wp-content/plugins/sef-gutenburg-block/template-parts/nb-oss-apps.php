<?php
/**
 * Layout of Open Source Apps Listing
 * 
 * Logic:
 * - Exclude apps selected in ACF field `oss_apps`
 * - Fetch all remaining published apps
 * - Order by latest publish date (DESC)
 * - Apps WITH `app_banner_image` appear first
 * - Apps WITHOUT banner appear after
 */

// ------------------------------------------------------
// Block ID & Class Setup
// ------------------------------------------------------

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

// ------------------------------------------------------
// Section Title
// ------------------------------------------------------

$section_title = get_field('section_title');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> oss-apps">
    <div class="container">

        <?php if ($section_title): ?>
            <div class="col-md-12 title-box">
                <h2 class="section-title">
                    <?php echo esc_html($section_title); ?>
                </h2>
            </div>
        <?php endif; ?>

        <?php
        // ------------------------------------------------------
        // Get Excluded Apps from ACF Field
        // ------------------------------------------------------

        $excluded_apps = get_field('oss_apps');
        $exclude_ids = [];

        // Convert ACF relationship field to pure ID array
        if (!empty($excluded_apps)) {
            foreach ($excluded_apps as $app) {
                $exclude_ids[] = is_object($app) ? $app->ID : $app;
            }
        }

        // ------------------------------------------------------
        // Query All Apps (Except Excluded)
        // ------------------------------------------------------

        $args = [
            'post_type'      => 'apps',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'post__not_in'   => $exclude_ids,
            //'orderby'        => 'date',
            'order'          => 'DESC',
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()):

            // Arrays to separate apps
            $apps_with_banner = [];
            $apps_without_banner = [];

            // ------------------------------------------------------
            // Loop Through Posts & Categorize
            // ------------------------------------------------------

            while ($query->have_posts()):
                $query->the_post();

                $app_id = get_the_ID();

                // ACF banner image field
                $banner = get_field('app_banner_image', $app_id);
                $coming_soon = get_field('coming_soon', $post_id);
                    $updated = get_field('updated', $post_id);

                // Prepare structured app data
                $app_data = [
                    'ID'        => $app_id,
                    'title'     => get_the_title(),
                    'permalink' => get_the_permalink(),
                    'excerpt'   => wp_trim_words(get_the_excerpt(), 20),
                    'banner'    => $banner,
                    'thumbnail' => get_the_post_thumbnail($app_id, 'medium'),
                ];

                // Separate based on banner existence
                if (!empty($banner)) {
                    $apps_with_banner[] = $app_data;
                } else {
                    $apps_without_banner[] = $app_data;
                }

            endwhile;

            // Merge arrays (banner apps first)
            $final_apps = array_merge($apps_with_banner, $apps_without_banner);

            echo '<div class="oss-apps-list">';

            // ------------------------------------------------------
            // Final Output Loop
            // ------------------------------------------------------

            foreach ($final_apps as $app):
                ?>
                <div class="app-card <?php echo !empty($app['banner']) ? 'has-banner' : 'no-banner'; ?>">

                    

                    <div class="app-image">
                        <?php
                        // Show Banner Image (if exists)
                        if (!empty($app['banner']) && isset($app['banner']['url'])) {
                            echo '<figure>';
                            echo '<img src="' . esc_url($app['banner']['url']) . '" alt="' . esc_attr($app['banner']['alt'] ?? $app['title']) . '">';
                            echo '</figure>';
                        }

                        // Show Featured Image
                        if (!empty($app['thumbnail'])) {
                            echo $app['thumbnail'];
                        }
                        ?>
                    </div>

                    <h3><?php echo esc_html($app['title']); ?></h3>
                    <p><?php echo esc_html($app['excerpt']); ?></p>

                    <a target="_blank"  href="<?php echo esc_url($app['permalink']); ?>">
                        Learn More →
                    </a>

                </div>
                <?php
            endforeach;

            echo '</div>';

            // Reset Post Data
            wp_reset_postdata();

        endif;
        ?>

    </div>
</section>