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


$heading = get_field('heading');
?>
<section id="<?php echo esc_attr($id); ?>" class="nautobot-video <?php echo esc_attr($className); ?>">

	<!-- Video Case Studies Recommandation -->
	<div class="container">
		<div class="row g-lg-4">
			<?php if(!empty($heading)):?>
            <div class="col-md-12 title-box mb-2">
				<h2 class="section-title"><?php echo $heading; ?></h2>
			</div>
            <?php endif;?>
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
                        'terms'    => 'podcast',     // Replace with your category/term slug
                    ),
                ),
            );

			$related = new WP_Query( $video_case_studies );

			if( $related->have_posts() ) :
				while( $related->have_posts() ): $related->the_post();
                $post_button_detail = get_field('post_button_detail', get_the_ID());

			?>
			<div class="col-md-4 col-sm-6">
				<div class="video-box">
					<?php if(!empty($post_button_detail)):?><a href="<?php echo $post_button_detail['url']; ?>" target="<?php echo !empty($post_button_detail['target']) ? $post_button_detail['target'] : '_self'; ?>"><?php endif;?>
						<div class="position-relative">
							<img class="img-fluid w-100" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>"/>
							<div class="video-overlay">
								<span><i class="bi bi-play-circle-fill"></i></span>
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
		</div>
	</div>
    
</section>