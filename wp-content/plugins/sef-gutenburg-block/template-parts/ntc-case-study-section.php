<?php

/**
* Layout of NTC Case Study Section.
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



<section class="ntc-case-study">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-box">
                <?php if ( $ntc_heading = get_field( 'ntc_heading' ) ) : ?>
                    <h3 class="section-title no-lazy to-lower">
                        <?php echo esc_html( $ntc_heading ); ?>
                    </h3>
                <?php endif; ?>
            </div>
            
        
        </div>
        <div class="row">
            <?php
            $selected_category = get_field('selected_category');

            if ($selected_category && is_object($selected_category)) {
                $studies = get_posts(array(
                    'post_status'    => 'publish',
                    'post_type'      => 'study',
                    'posts_per_page' => 6,
                    'orderby'        => 'DATE',
                    'order'          => 'DESC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => $selected_category->taxonomy,
                            'field'    => 'term_id',
                            'terms'    => $selected_category->term_id,
                        ),
                    ),
                ));

                if ($studies): ?>
                    <?php foreach ($studies as $study): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="casestudy-block">
                                <div class="casestudy-img">
                                    <img src="<?php echo get_the_post_thumbnail_url($study->ID); ?>" class="img-fluid" alt="<?php echo get_the_title($study->ID); ?>" />
                                </div>
                                <div class="content-box">
                                    <h3 class="remove-arrow section_title">
                                        <?php echo get_the_title($study->ID); ?>
                                    </h3>
                                    <p class="content-data">
                                        <?php echo get_the_excerpt($study->ID); ?>
                                    </p>
                                    <a href="<?php echo get_permalink($study->ID); ?>" class="btn btn-learn" data-cursor="-color-orange">
                                        Read more <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif;
            } else {
                echo '<p>No category selected.</p>';
            }
            ?>

        </div>
    </div>
</section>


