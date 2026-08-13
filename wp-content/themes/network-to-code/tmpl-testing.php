<?php
/*
 * Template Name: AJAX Code Test
*/
get_header();
echo "<p>Welcome</p>";
function migrate_nautobot_tags() {
    // Define the old and new term slugs
    $old_term_slug = 'nautobot-plugin';
    $new_term_slug = 'nautobot-app';

    // Get the term IDs for the old and new terms
    $old_term = get_term_by('slug', $old_term_slug, 'blog-category');
    $new_term = get_term_by('slug', $new_term_slug, 'blog-category');

    if (!$old_term || !$new_term) {
        return; // Exit if terms don't exist
    }

    // Query posts with the old term
    $args = array(
        'post_type' => 'blog',
        'tax_query' => array(
            array(
                'taxonomy' => 'blog-category',
                'field'    => 'slug',
                'terms'    => $old_term_slug,
            ),
        ),
        'posts_per_page' => -1, // Get all posts
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();

            // Get current terms for the post
            $current_terms = wp_get_post_terms($post_id, 'blog-category', array('fields' => 'ids'));

            // Remove the old term and add the new term
            if (($key = array_search($old_term->term_id, $current_terms)) !== false) {
                unset($current_terms[$key]); // Remove old term
            }
            $current_terms[] = $new_term->term_id; // Add new term

            // Update the post terms
            wp_set_post_terms($post_id, $current_terms, 'blog-category');
        }
    }

    // Reset post data
    wp_reset_postdata();
}

// Run the migration function
migrate_nautobot_tags();
echo "you exited here..";
exit();
$plugin_posts = get_posts([
    'post_type' => 'blog',
    'tax_query' => [
        [
            'taxonomy' => 'blog-category',
            'field'    => 'slug',
            'terms'    => 'nautobot-plugin',
        ],
    ],
    'numberposts' => -1
]);

$i = 0;
foreach ($plugin_posts as $post) {
  $i++;
  echo "<pre>"; print_r($post->post_title); echo "<br> updated...</pre>";
  wp_set_post_terms($post_id, 260, 'blog-category');  
  // wp_remove_object_terms($post->ID, 'nautobot-plugin', 'blog-category');
}

echo "<h3>Total Posts:  ".$i."</h3>";
exit; 

global $wpdb;

$search_term = 'nauto';
$posts_per_page = 12;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$offset = ($paged - 1) * $posts_per_page;

$total_sql = $wpdb->prepare(
    "SELECT COUNT(DISTINCT p.ID)
    FROM {$wpdb->posts} p
    LEFT JOIN {$wpdb->term_relationships} tr ON p.ID = tr.object_id
    LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
    LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id
    WHERE p.post_type = %s
      AND p.post_status = 'publish'
      AND (
          p.post_title LIKE %s
          OR p.post_content LIKE %s
          OR p.post_date LIKE %s
          OR (
              tt.taxonomy = %s
              AND t.name LIKE %s
          )
      )",
    'blog',
    '%' . $wpdb->esc_like($search_term) . '%',
    '%' . $wpdb->esc_like($search_term) . '%',
    '%' . $wpdb->esc_like($search_term) . '%',
    'blog-author',
    '%' . $wpdb->esc_like($search_term) . '%'
);
$total_posts = $wpdb->get_var($total_sql); // Total matching posts
$max_num_pages = ceil($total_posts / $posts_per_page); // Total pages



$sql = $wpdb->prepare(
    "SELECT DISTINCT p.*
    FROM {$wpdb->posts} p
    LEFT JOIN {$wpdb->term_relationships} tr ON p.ID = tr.object_id
    LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
    LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id
    WHERE p.post_type = %s
      AND p.post_status = 'publish'
      AND (
          p.post_title LIKE %s
          OR p.post_content LIKE %s
          OR p.post_date LIKE %s
          OR (
              tt.taxonomy = %s
              AND t.name LIKE %s
          )
      )
    LIMIT 12 OFFSET " . $offset,
    'blog',
    '%' . $wpdb->esc_like($search_term) . '%',
    '%' . $wpdb->esc_like($search_term) . '%',
    '%' . $wpdb->esc_like($search_term) . '%',
    'blog-author',
    '%' . $wpdb->esc_like($search_term) . '%'
);

$results = $wpdb->get_results($sql);
echo "<p>".count($results)."</p>";
$i = 1;
foreach ($results as $key => $result) {
	echo do_shortcode('[get_blogs_by_id post_id="'.$result->ID.'"]');
        echo "<p>". $i . " - " . get_the_title($result->ID)."</p>";
        $i++;
// 	echo "<pre>";
// print_r($result->post_title);
// echo "</pre>";

}
 echo paginate_links(array(
        'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'format'    => '?paged=%#%',
        'current'   => max(1, $paged),
        'total'     => $max_num_pages,
        'prev_text' => __('« Previous'),
        'next_text' => __('Next »'),
    ));

 $pagination_args = array(
              'base' => @add_query_arg('paged', '%#%'),
              'format' => '',
              'current' => max(1, $paged),
              'total' => $max_num_pages,
              'prev_text' => __('&laquo; Previous'),
              'next_text' => __('Next &raquo;'),
              'mid_size' => 1, // Number of pagination links to show around the current page
              'end_size' => 1, // Number of pagination links at the beginning and end of pagination
              'type' => 'array', // Output pagination links as an array
          );
  $pagination_links = paginate_links($pagination_args);
		if ($pagination_links) {
              echo '<nav class="pagination">';
              foreach ($pagination_links as $link) {
                  echo '<span>' . $link . '</span>';
              }
              echo '</nav>';
          }
exit;


//Search fucnrtion to search terms from DB
function filter_search_box() {
	global $wpdb;

  // Prepare the response array
    $response = array(
        'html' => '',
        'pagination' => ''
    );
    $paged = isset($_POST['paged']) ? absint($_POST['paged']) : 1;
    $search_term = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $search_term = 'noto';

    $sql = $wpdb->prepare("SELECT DISTINCT p.* FROM {$wpdb->posts} p
    LEFT JOIN {$wpdb->term_relationships} tr ON p.ID = tr.object_id
    LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
    LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id
    WHERE p.post_type = %s
      AND p.post_status = 'publish'
      AND (
          p.post_title LIKE %s
          OR p.post_content LIKE %s
          OR p.post_date LIKE %s
          OR (
              tt.taxonomy = %s
              AND t.name LIKE %s
          )
      )
    LIMIT 12",
    'blog',
    '%' . $wpdb->esc_like($search_term) . '%',
    '%' . $wpdb->esc_like($search_term) . '%',
    '%' . $wpdb->esc_like($search_term) . '%',
    'blog-author',
    '%' . $wpdb->esc_like($search_term) . '%'
	);
	$results = $wpdb->get_results($sql);
	echo "<p>".count($results)."</p>";
	foreach ($results as $key => $result) {
		echo do_shortcode('[get_blogs_by_id post_id="'.$result->ID.'"]');
	}
}
add_action('wp_ajax_filter_search_box', 'filter_search_box');
add_action('wp_ajax_nopriv_filter_search_box', 'filter_search_box');



// $search = 'write us a quick line!';
// $args = array(
// 	'post_type' => 'blog',
// 	'posts_per_page' => 12,
// 	's' => $search,
// );
// $args['meta_query'] = array(
// 	'relation' => 'OR',
// 	array(
// 		'key' => 'conclusion_content',
// 		'value'    => $search,
// 		'compare' => 'LIKE', 
// 	),
// );
$search = 'write us a quick line!';

$args = array(
    'post_type'      => 'blog',         // Custom post type
    'posts_per_page' => 12,            // Number of posts per page
    // 'paged'          => $paged,        // Current page for pagination
    's'              => $search,       // Search query in title and content
    'meta_query'     => array(
        'relation' => 'OR',            // Match any of these conditions
        array(
            'key'     => 'conclusion_content',  // Replace with your custom field key
            'value'   => $search,               // Search term
            'compare' => 'LIKE',                // Partial match
        ),
    ),
);
echo "<pre>";
print_r($args);
echo "</pre>";
$query = new WP_Query($args);
while ($query->have_posts()) {
	$query->the_post();
	echo "<div class='mt-5 container'><h4>".get_the_title()."</h4>";
	echo "<p>".get_the_permalink()."</p></div>";
}
get_footer();