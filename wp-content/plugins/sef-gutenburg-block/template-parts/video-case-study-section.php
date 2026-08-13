<?php

/**
* Layout of Video Case Study
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
<section class="video-case-study">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-box">
                <?php if ( $video_heading = get_field( 'video_heading' ) ) : ?>
                    <h3 class="section-title no-lazy">
                        <?php echo esc_html( $video_heading ); ?>
                    </h3>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
        <?php
$video_case_studies = get_posts(array(
    'post_status'    => 'publish',
    'post_type'      => 'video-case-study',
    'posts_per_page' => -1, // Show all
    'orderby'        => 'DATE',
    'order'          => 'DESC',
    'meta_key'       => 'exclude_from_listing',
    'meta_value'     => 'yes',
    'meta_compare'   => '!=',
));

$video_case_studies = array_reverse( $video_case_studies );

if ($video_case_studies):
    foreach ($video_case_studies as $study):
        // Get full post content
        $content = apply_filters('the_content', $study->post_content);
        // Extract the first <p>...</p>
        preg_match('/<p[^>]*>(.*?)<\/p>/', $content, $matches);
        $first_paragraph = isset($matches[0]) ? $matches[0] : '';
        ?>
        <div class="col-lg-6">
            <div class="casestudy-block">
                <div class="casestudy-img">
                    <a href="<?php echo get_permalink($study->ID); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($study->ID); ?>" class="img-fluid" alt="<?php echo esc_attr(get_the_title($study->ID)); ?>" />
                        <i class="bi bi-play-circle-fill"></i>
                    </a>
                </div>
                <div class="content-box">
                    <a href="<?php echo get_permalink($study->ID); ?>">
                        <h3 class="remove-arrow section_title">
                            <?php echo get_the_title($study->ID); ?>
                        </h3>
                    </a>
                    <div class="content-data">
                        <?php //echo $first_paragraph; ?>
                        <p><?php echo get_the_excerpt($study->ID); ?></p>
                    </div>
                    <div class="show-more">Show More</div>
                </div>
            </div>
        </div>
    <?php
    endforeach;
    wp_reset_postdata();
else:
    echo '<p>No video case studies found.</p>';
endif;
?>

</div>

    </div>
</section>