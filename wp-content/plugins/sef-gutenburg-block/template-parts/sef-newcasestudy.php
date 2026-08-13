<?php

/**
* Layout of sef Tab view for workflow automation.
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
?>
<section class="<?php echo $className; ?> key-solution" style="background-color: #fef7f0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title-box wow animate__ animate__fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
				<h3 class="section-title">Case Studies</h3>                  
			</div>
			<div class="col-md-12">
				<div class="key-cards">
					<div class="row g-5">
						<?php $args = array('post_type' => 'study', 'posts_per_page' => 3, 'tax_query'      => [ [ 'taxonomy' => 'study-category', 'field'    => 'slug', 'terms'    => 'ntc', ], ]);
						$resData = new WP_Query($args);
						if ($resData->have_posts()) :
							while ($resData->have_posts()) :
								$resData->the_post();
								$Fimg = get_the_post_thumbnail_url();
								$title = get_the_title();
								?>
								<div class="col-sm-6 col-md-4  wow animate__ animate__fadeInUp">
									<div class="single-key-card">
										<img decoding="async" src="<?php echo $Fimg; ?>" class="img-fluid lazyloaded" alt="<?php echo $title; ?>">
										<h6><?php echo $title; ?></h6>
										<p><a href="<?php echo get_permalink(); ?>" class="btn btn-learn  me-md-3 mb-3 wow animate__ animate__fadeInUp delay3">Read Now <i class="bi bi-arrow-right"></i></a></p>
									</div>
								</div>
								<?php
							endwhile;
						else:
							echo '<h2>No case studies found<h2>';
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>