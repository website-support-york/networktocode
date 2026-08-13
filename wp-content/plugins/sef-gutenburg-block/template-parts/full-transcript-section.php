<?php

/**
* Layout of Full Transcript
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

$want_to_add_description = get_field('want_to_add_description');
$description = get_field('description');
?>
<section id="<?php echo esc_attr($id); ?>" class="vcs-timestamps <?php echo esc_attr($className); ?>">

	<!-- Video Case Studies Timestamps -->
	<div class="container">
		<div class="accordion accordion-flush" id="accordionFlushExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-heading1">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1" id="acrdn-btn-1"><?php echo get_field('full_transcript_title'); ?></button>
				</h2>
				<div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
					<div class="accordion-body">
						<?php
						if($want_to_add_description == 'No'):?>
						<?php while(have_rows('full_transcript_list')): the_row(); ?>
						<div class="ac-timestamp">
							<div class="time"><?php echo get_sub_field('time'); ?></div>
							<div class="content"><?php echo get_sub_field('description'); ?></div>
						</div>
						<?php endwhile; ?>						
						<?php endif;?>
						<?php if($want_to_add_description == 'Yes'):?>
						<div class="ac-content">
							<?php echo $description; ?>
						</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
    
</section>