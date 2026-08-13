<?php
// Avoid redeclare issues
if (!function_exists('get_current_url')) {
    function get_current_url() {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' 
                    || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }
}

$id = 'iframe_' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$it_is_podcast = get_field('it_is_podcast');

// $url   = get_current_url();
// $path  = parse_url($url, PHP_URL_PATH);
// $parts = array_filter(explode('/', trim($path, '/')));
?>
<section id="<?php echo esc_attr($id); ?>" class="training-faq blog-details vcs-transcript <?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-box">
                <h2 class="section-title"><?php echo esc_html(get_field('transcript_highlight_title')); ?></h2>
            </div>

            <div class="col-md-4">
                <div class="sidebar sticky-sidebar">
                    <div class="toc-card-body">
                        <h5 class="card-title">
                            <span class="title-text">Contents</span>
                            <span class="mobile-toc-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
                            <path id="Vector 31" d="M1 1.5L5.5 5L1 8.5" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </span>
                        </h5>
                        <div class="title-list noListStyle"><ul></ul></div>
                        <div id="toc" class="noListStyle transcript-index-ul"><ul></ul></div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="blog-detail">
                    <div class="blog_inner_detail">
                        <?php while (have_rows('transcript_highlights')): the_row(); ?>
                            <div class="vcs-transcript__block">
                                <h2 class="wp-block-heading to-lower"><?php echo esc_html(get_sub_field('title')); ?></h2>
                                <p><?php echo esc_html(get_sub_field('description')); ?></p>

                                <?php if (get_sub_field('jump_to_time')): ?>
                                    <div class="download-btn">
                                        <?php if ($it_is_podcast) : ?>
                                            <a onclick="jumpTo(<?php echo (int)get_sub_field('jump_to_time_in_seconds'); ?>)" href="javascript:;" class="btn btn-learn">
                                                Jump to <?php echo esc_html(get_sub_field('jump_to_time')); ?> <i class="bi bi-arrow-right"></i>
                                            </a>
                                        <?php else: ?>
                                            <a onclick="seekToTime(<?php echo (int)get_sub_field('jump_to_time_in_seconds'); ?>)" href="javascript:;" class="btn btn-learn">
                                                Jump to <?php echo esc_html(get_sub_field('jump_to_time')); ?> <i class="bi bi-arrow-right"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
