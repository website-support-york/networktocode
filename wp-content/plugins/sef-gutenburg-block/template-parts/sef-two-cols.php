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
$left_image = get_field('left_image');
$right_section_heading = get_field('right_section_heading');
$right_content = get_field('right_content');
$right_cta = get_field('right_cta');

?>
<section id="<?php echo $id; ?>" class=" <?php echo $className; ?> whitepaper bg_primary" style="background-color: white;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if ($left_image): ?>
					<img src="<?php echo $left_image['url']; ?>" alt="<?php echo $left_image['alt']; ?>" />
				<?php endif ?>
			</div>	
			<div class="col-md-6 title-box d-flex align-item-center">
				<div class="text-start">
					<h3 class="section-title wow animate__ animate__fadeInUp delay1 sec-heading" ><?php echo $right_section_heading ?></h3>
					<h5 class="sub-title wow animate__ animate__fadeInUp delay3 rich-text" ><?php echo $right_content; ?></h5>
					<?php if ($right_cta): ?>
                    <div class="download-btn">
						<a href="<?php echo $right_cta['url']; ?>" target="<?php echo $right_cta['target']; ?>" class="btn theme-btn mt-3 wow animate__ animate__fadeInUp delay5"><?php echo $right_cta['title']; ?></a>
                    </div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>