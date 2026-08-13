<?php

/**
* Layout of Dowload CTA Section
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
$select_layout_dcta = get_field('select_layout_dcta');
$download_cta_heading = get_field('download_cta_heading');
$download_cta_suheading = get_field('download_cta_suheading');
$download_cta_link = get_field('download_cta_link');
$download_cta_section_image = get_field('download_cta_section_image');
$cta_section_bg_image = get_field('cta_section_bg_image');
$mobile_section_bg_image = get_field('mobile_section_bg_image');

if ($select_layout_dcta == "Report CTA Style") { ?> 
	<section class="download-cta <?php echo $className; ?>" id="<?php echo esc_attr($id); ?>">
		<div class="container">
			<section class="whitepaper" style=" background-image: url(<?php echo $cta_section_bg_image['url'] ?>);">
				<div class="row" >
					<div class="col-md-6 title-box d-flex align-item-center">
						<div class="text-start">
							<h3 class="section-title wow animate__ animate__fadeInUp delay1 sec-heading"><?php echo $download_cta_heading ?></h3>
							<h5 class="sub-title wow animate__ animate__fadeInUp delay3 rich-text"><?php echo $download_cta_suheading ?></h5>
							<?php if ($download_cta_link): ?>
								<div class="download-btn">
									<a href="<?php echo $download_cta_link['url'] ?>" class="btn theme-btn mt-3 wow animate__ animate__fadeInUp delay5" target="<?php echo $download_cta_link['target'] ?>"><?php echo $download_cta_link['title'] ?></a>
								</div>
							<?php endif ?>
						</div>
					</div>
					<div class="col-md-6">
						<?php if ($download_cta_section_image): ?>
							<img src="<?php echo $download_cta_section_image['url']; ?>" alt="<?php echo $download_cta_section_image['alt']; ?>" >
						<?php endif ?>
					</div>
				</div>
			</section>
		</div>
	</section>
<?php } else if ($select_layout_dcta == "NautobotGPT") { ?>
	<section class="module-nautobotgpt download-cta <?php echo $className; ?>" id="<?php echo esc_attr($id); ?>">
		<div class="container">
			<section class="whitepaper" style=" background-image: url(<?php echo $cta_section_bg_image['url'] ?>);">
				<div class="mobile-img" style=" background-image: url(<?php echo $mobile_section_bg_image ?>);"></div>
				<div class="row" >
					<div class="col-md-6 title-box d-flex align-item-center">
						<div class="text-start">
							<h3 class="section-title wow animate__ animate__fadeInUp delay1 sec-heading"><?php echo $download_cta_heading ?></h3>
							<h5 class="sub-title wow animate__ animate__fadeInUp delay3 rich-text"><?php echo $download_cta_suheading ?></h5>
							<?php if ($download_cta_link): ?>
								<div class="download-btn">
									<a href="<?php echo $download_cta_link['url'] ?>" class="btn theme-btn mt-3 wow animate__ animate__fadeInUp delay5" target="<?php echo $download_cta_link['target'] ?>"><?php echo $download_cta_link['title'] ?></a>
								</div>
							<?php endif ?>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
<?php } else { ?>
<section class="download-cta <?php echo $className; ?>" id="<?php echo esc_attr($id); ?>">
	<div class="container">
		<section class="whitepaper" style=" background-image: url(<?php echo $cta_section_bg_image['url'] ?>);">
			<div class="row" >
				<div class="col-md-6 title-box d-flex align-item-center">
					<div class="text-start">
						<h3 class="section-title wow animate__ animate__fadeInUp delay1 sec-heading"><?php echo $download_cta_heading ?></h3>
						<h5 class="sub-title wow animate__ animate__fadeInUp delay3 rich-text"><?php echo $download_cta_suheading ?></h5>
						<?php if ($download_cta_link): ?>
							<div class="download-btn">
								<a href="<?php echo $download_cta_link['url'] ?>" class="btn theme-btn mt-3 wow animate__ animate__fadeInUp delay5" target="<?php echo $download_cta_link['target'] ?>"><?php echo $download_cta_link['title'] ?></a>
							</div>
						<?php endif ?>
					</div>
				</div>
				<div class="col-md-6">
					<?php if ($download_cta_section_image): ?>
						<img src="<?php echo $download_cta_section_image['url']; ?>" alt="<?php echo $download_cta_section_image['alt']; ?>" >
					<?php endif ?>
				</div>
			</div>
		</section>
	</div>
</section>
<?php } ?>