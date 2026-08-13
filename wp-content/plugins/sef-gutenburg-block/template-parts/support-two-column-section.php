<?php

/**
* Layout of Support two Column
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
<section id="<?php echo esc_attr($id); ?>" class="support-info only-text <?php echo esc_attr($className); ?>">
    
	<div class="container">
	  	<div class="row justify-content-center">

	  		<?php if(get_field('section_title')): ?>
			<div class="col-12 title-box">
				<h2 class="fs-34"><?php echo get_field('section_title'); ?></h2>
				<h5 class="sub-title col-lg-8 offset-lg-2"><?php echo get_field('section_sub_title'); ?></h5>
			</div>
			<?php endif; ?>

			<?php while(have_rows('supports')): the_row(); ?>
			<div class="col-lg-6">
				<div class="support-block text-center">
					<i>
						<?php if(get_sub_field('icon')): ?>
						<img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>">
						<?php endif; ?>
					</i>
					<h3><?php echo get_sub_field('title'); ?></h3>
					<figure>
						<?php if(get_sub_field('image')): ?>
						<img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
						<?php endif; ?>
					</figure>

					<?php if(get_sub_field('cta')): ?>
					<a href="<?php echo get_sub_field('cta')['url']; ?>" target="<?php echo get_sub_field('cta')['target']; ?>">
						<span><?php echo get_sub_field('cta')['title']; ?></span>
						<span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.99379e-05 8.49949L2.73255 8.49949L16.0663 8.49949C16.1187 8.49677 16.1712 8.49677 16.2236 8.49949C16.3345 8.51218 16.4972 8.44328 16.5437 8.54302C16.5902 8.64277 16.4364 8.72438 16.3649 8.80236C14.789 10.4043 13.2107 12.0039 11.63 13.601C11.3564 13.8785 11.3582 13.8785 11.63 14.1578C11.9465 14.4806 12.2594 14.8053 12.5723 15.1299L12.626 15.1299C13.0885 14.6547 13.5528 14.1802 14.0189 13.7062L19.8033 7.85024C20.0555 7.59453 20.0555 7.59271 19.8033 7.33337C17.4848 4.9854 15.1663 2.63502 12.8477 0.282222C12.6689 0.100866 12.5527 0.0645949 12.3703 0.282222C12.1414 0.55063 11.8768 0.790022 11.6282 1.04211C11.3797 1.29419 11.3618 1.31414 11.6282 1.58618C13.2137 3.193 14.7991 4.79982 16.3845 6.40664C16.4561 6.47918 16.5633 6.5354 16.5776 6.64966C16.5151 6.72583 16.4292 6.69862 16.3559 6.69862L2.97805e-05 6.69862L2.99379e-05 8.49949Z" fill="#E07807"/></svg></span>
					</a>
					<?php endif; ?>

				</div>
			</div>
			<?php endwhile; ?>
			
    	</div>
  	</div>

</section>