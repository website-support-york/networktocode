<?php

/**
* Layout of York Related Webinar Video
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
<section id="<?php echo esc_attr($id); ?>" class="webinar-related nautobot-video <?php echo esc_attr($className); ?>">

	<!-- Video Case Studies Recommandation -->
	<div class="container">
		<div class="row g-lg-4">
			<div class="col-md-12 title-box mb-2">
				<h2 class="section-title"><?php echo get_field('related_video_webinar_title'); ?></h2>
			</div>

			<?php

            $video_case_studies = array(
                'post_status'    => 'publish',
                'post_type'      => 'post',
                'posts_per_page' => 3, 
                'orderby'        => 'DATE',
                'order'          => 'DESC',
                'post__not_in'   => array( get_the_ID() ),
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'category',         // Replace with your taxonomy name
                        'field'    => 'slug',             // or 'term_id'
                        'terms'    => 'webinars',     // Replace with your category/term slug
                    ),
                ),
            );

			$related = new WP_Query( $video_case_studies );

			if( $related->have_posts() ) :
				while( $related->have_posts() ): $related->the_post();
			?>
			<div class="col-md-4 col-sm-6">
				<div class="video-box">
					<a href="<?php echo get_the_permalink( get_the_ID() ); ?>" target="_blank" rel="noopener">
						<div class="position-relative">
							<img class="img-fluid w-100" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>"/>
							<div class="video-overlay">
								<!-- <span><i class="bi bi-play-circle-fill"></i></span> -->
								<!-- put image icon of play button from assets/images -->
								 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-icon.svg" alt="Play Button" class="play-button-icon">

							</div>
						</div>
						<h5 class="video-title"><?php echo wp_trim_words( get_the_title(), 10, '...' );?></h5>
					</a>
				</div>
			</div>
			<?php
		    	endwhile;
		    endif;
		    wp_reset_postdata();
		    ?>
			
		    <!-- <div class="download-btn text-center">
  				<a href="/resources/webinars/" class="btn theme-btn mt-3">Explore all Webinars</a>
			</div> -->
		</div>
	</div>
    
</section>
