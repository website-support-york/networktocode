<?php 

/**
* Layout of sef Bootcamps.
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
$add_cards = get_field('add_cards');
$clsDiv = count($add_cards) > 2 ? "col-sm-4" : "col-sm-6";
$card_style = get_field('card_style_');

?>

<section id="<?php echo $id ?>" class="cosl-<?php echo count($add_cards); ?> <?php echo $className; ?> sada-assessment">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title-box mb-3 wow animate__animated animate__fadeInUp mb-3">
				<?php if ($card_block_heading): ?>
					<h3 class="section-title"><?php echo $card_block_heading; ?></h3>
				<?php endif ?>
				<div class="sub-title col-lg-8 offset-lg-2">
					<?php echo $card_block_subheading; ?>
				</div>
				
				<?php if ($card_cta): ?>
					<div class="mt-2 wow animate__animated animate__fadeInUp delay2">
						<a href="<?php echo $card_cta['url'] ?>" class="btn   btn-learn  me-md-3 mb-3 wow animate__animated animate__fadeInUp delay3" target="<?php echo $card_cta['target'] ?>" ><?php echo $card_cta['title'] ?> <i class="bi bi-arrow-right"></i></a>
					</div>
				<?php endif ?>
			</div>
			<?php 
			while( have_rows('add_cards') ) : the_row();
				$title = get_sub_field('title');
				$icon = get_sub_field('icon');
				$description = get_sub_field('description');
				$description = str_replace("<p></p>", "", $description);
				?>
				<div class="<?php echo $clsDiv; ?> mt-2">
					<div class="bg-orange orange-txt">
						<?php if($icon){ ?>
							<img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>">
						<?php } ?>
						<h5><?php echo $title; ?></h5>
						<?php if ($card_style == 'Style2'): 
							while( have_rows('add_sub_cards') ) : the_row();
								$title = get_sub_field('title');
								$description = get_sub_field('description');
								?>
								<div class="subcards">
									<h5><?php echo $title; ?></h5>
									<p><?php echo $description; ?></p>
								</div>
								<?php
							endwhile; 
						else:
							echo $description;
						endif ?>
					</div>
				</div>
				<?php
			endwhile; 
			?>
		</div>
	</div>
</section>