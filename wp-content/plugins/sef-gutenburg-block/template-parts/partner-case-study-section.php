<?php

/**
* Layout of Partner Case Study
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



?>

<section class="partner-case-study">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-box">
                <?php if ( $partner_heading = get_field( 'partner_heading' ) ) : ?>
                    <h3 class="section-title no-lazy">
                        <?php echo esc_html( $partner_heading ); ?>
                    </h3>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tab-pane container active fade show blog-media" id="news">
                <div class="blogs">
    <?php 
    $study_posts = get_posts(array(
        'post_status'    => 'publish',
        'post_type'      => 'study',
        'posts_per_page' => -1,
        'orderby'        => 'DATE',
        'order'          => 'DESC',
        'tax_query'      => array(
            array(
                'taxonomy' => 'study-category', // Update if needed
                'field'    => 'slug',
                'terms'    => 'partners',
            ),
        ),
    ));

    if( $study_posts ): 
        foreach( $study_posts as $study_post ): 
    ?>
    <div class="media-box d-flex align-item-top">
        <img
            src="<?php echo get_the_post_thumbnail_url($study_post->ID); ?>"
            class="event-img"
            alt="ntc img"
        />
        <div class="single-blog">
            <h6 class="blog-title zilla mb-0 one-line-text">
                <?php echo get_the_title($study_post->ID); ?>
            </h6>
            <p class="theme-para w-100 mb-0">
                <?php echo get_the_excerpt($study_post->ID); ?>
            </p>

            <?php
$link = get_field('post_button_detail', $study_post->ID);

if ($link && !empty($link['url'])) {
    $link_url = $link['url'];
    $link_title = !empty($link['title']) ? $link['title'] : 'Read More';
    $link_target = !empty($link['target']) ? $link['target'] : '_self';
} else {
    $link_url = get_permalink($study_post->ID);
    $link_title = 'Read More';
    $link_target = '_self';
}
?>

<a class="btn btn-learn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
    <?php echo esc_html($link_title); ?> <i class="bi bi-arrow-right"></i>
</a>

        </div>
    </div>
    <?php 
        endforeach;
        wp_reset_postdata();
    else: 
    ?>
    <p>No case studies found in 'partners' category.</p>
    <?php endif; ?>
</div>

                </div>
            </div>
        </div>
    </div>
</section>