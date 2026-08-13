





<?php
/**
 * Ironstrap - Pagination
 *
 * @package ironstrap
 */

global $wp_query;

$big = 999999999; // need an unlikely integer

$paginate = paginate_links([
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages
]);

if ($paginate) {
    echo '<div class="site-paginate">' . $paginate . '</div>';
}