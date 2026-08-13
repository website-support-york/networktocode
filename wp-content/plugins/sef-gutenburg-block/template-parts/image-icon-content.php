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

$tci_heading = get_field('tci_heading');
$add_image_left = get_field('add_image_left_');
?>
<section class="<?php echo $className; ?> twocol-icon-content industries-main vision-mission" style="background-color: rgb(234, 242, 249);">
	<div class="container">
		<div class="title-box">
			<?php if ($tci_heading): ?>
				<h3 class="section-title wow animate__ animate__fadeInUp mb-5"><?php echo $tci_heading; ?></h3>
			<?php endif ?>
		</div>
		<div class="row main-box">
			<div class="col-sm-6">
				<?php if ($add_image_left): ?>
					<img src="<?php echo $add_image_left['url']; ?>" alt="<?php echo $add_image_left['alt']; ?>">
				<?php endif ?>
			</div>
			<div class="col-md-6 d-flex">
				<div class="main-list">
					<?php 
					while( have_rows('add_content_row') ): the_row(); 
						$add_icon = get_sub_field('add_icon');
						$title = get_sub_field('title');
						$description = get_sub_field('description');
						$link = get_sub_field('link');
						?>
						<div class="main-single wow animate__ animate__fadeInUp animated">
							<?php if ($add_icon): ?>
								<img src="<?php echo $add_icon['url'] ?>" alt="<?php echo $add_icon['alt'] ?>" />
							<?php endif ?>
							<div class="contents">
								<p><?php echo $title; ?></p>
								<span style="display: block;"><?php echo $description; ?></span>
								<?php if ($link): ?>
									<a class="btn   btn-learn  me-md-3 mb-3 wow animate__ animate__fadeInUp delay3" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?> <i class="bi bi-arrow-right"></i></a>
								<?php endif ?>
							</div>
						</div>
						<?php
					endwhile;
					?>
				</div>
			</div>
		</div>
	</div>
</section>