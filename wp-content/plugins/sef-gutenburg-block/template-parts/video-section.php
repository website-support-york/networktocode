<?php

/**
* Layout of Video Section
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

$video_section_heading = get_field('video_section_heading');
$video_section_description = get_field('video_section_description');
$video_overlay_image = get_field('video_overlay_image');
$video_embeded = get_field('video_embeded');
$video_section_title = get_field('video_section_title');
$video_section_cta_link = get_field('video_section_cta_link');
$sef_background_color = get_field('video_section_bg_color');
?>
<section class="video-sec <?php echo $className; ?>" style="background-color: <?php echo $sef_background_color; ?>">
	<div class="container">
		<div class="bg-color" style="background-color: <?php echo $sef_background_color; ?>">

			<?php if($video_section_title): ?>
			<div class="mb-4">
          <div class="title-box">
            <h2 class="section-title"><?php echo $video_section_title; ?></h2>
          </div>
        </div>
    	<?php endif; ?>

			<div class="row">
				
				<div class="col-sm-4">
					<?php if ($video_section_heading): ?>
						<h3 class="section-title mt-3 sec-heading"><?php echo $video_section_heading; ?></h3>
					<?php endif ?>
					<?php if ($video_section_description): ?>
						<h5 class="sub-title mb-3"><?php echo $video_section_description; ?></h5>
					<?php endif ?>

					<?php if ($video_section_cta_link): ?>
					<a href="<?php echo $video_section_cta_link['url']; ?>" target="<?php echo $video_section_cta_link['target']; ?>" class="btn theme-btn wow animate__ animate__fadeInUp delay4"><?php echo $video_section_cta_link['title']; ?></a>
            		<?php endif; ?>

				</div>
				<div class="col-sm-6">
					<?php /*if ($video_overlay_image): ?>
						<img src="<?php echo $video_overlay_image['url']; ?>" alt="<?php echo $video_overlay_image['alt']; ?>">
					<?php endif*/ ?>
					<?php echo $video_embeded; ?>
				</div>
			</div>
		</div>
	</div>
</section>