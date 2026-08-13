<?php 

/**
* Layout of Single Image Section.
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

$card_block_heading = get_field('card_block_heading');
$card_block_subheading = get_field('card_block_subheading');
$card_cta = get_field('card_cta');
$desktop_image = get_field('desktop_image');
$mobile_image = get_field('mobile_image');
?>

<section id="<?php echo $id ?>" class="<?php echo $className; ?> sada-assessment">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title-box mb-3 wow animate__animated animate__fadeInUp mb-3 sec-heading">
				<?php if ($card_block_heading): ?>
					<h3 class="section-title hed"><?php echo $card_block_heading; ?></h3>
				<?php endif ?>
				<div class="sub-title col-lg-8 offset-lg-2">
					<?php echo $card_block_subheading; ?>
				</div>
				
				<?php /*if ($card_cta): ?>
					<div class="mt-2 wow animate__animated animate__fadeInUp delay2 cta-btndwn">
						<a href="<?php echo $card_cta['url'] ?>" class="btn   btn-learn  me-md-3 mb-3 wow animate__animated animate__fadeInUp delay3 download-btn" target="<?php echo $card_cta['target'] ?>" ><?php echo $card_cta['title'] ?> <i class="bi bi-arrow-right"></i></a>
					</div>
				<?php endif */ ?>
			</div>
			<div class="one-img">
				<?php if($desktop_image):?>
				<div class="desktop-img">
					<img src="<?php echo $desktop_image['url'];?>" alt="<?php echo $desktop_image['alt'];?>" title="<?php echo $desktop_image['title'];?>" />
				</div>
				<?php endif;?>
				<?php if($mobile_image):?>
				<div class="mobile-img">
					<img src="<?php echo $mobile_image['url'];?>" alt="<?php echo $mobile_image['alt'];?>" title="<?php echo $mobile_image['title'];?>" />
				</div>
				<?php endif;?>
			</div>

			<div class="network-auto" style="background: transparent;padding-top: 22px;">
				<div class="p-75 wow animate__animated animate__fadeInUp delay1">
	                <div class="talk-box">
	                  <p>Ready to Unlock The Full Potential of Network Automation <br />and Accelerate Your ROI?</p>
	                  	<?php if ($card_cta): ?>
	                  		<a href="<?php echo $card_cta['url'] ?>" target="<?php echo $card_cta['target'] ? $card_cta['target'] : '_self'; ?>" class="btn theme-btn"><?php echo $card_cta['title'] ?></a>
	                 	<?php endif ?>
	                </div>
	            </div>
            </div>

		</div>
	</div>
</section>