<?php

/**
* Layout of Integration + Technology Partners
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

$logo_heading = get_field('logo_heading_');
$logo_description = get_field('logo_description_');
?>
<section class="<?php echo $className; ?> only-text" style="background: #fef7f0">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="px-lg-5"> 
					<?php if ($logo_heading): ?>
						<h3 class="  fs-34  wow animate__animated animate__fadeInUp"><?php echo $logo_heading; ?></h3>
					<?php endif ?>
					<?php if ($logo_description): ?>
						<p class="wow animate__animated animate__fadeInUp delay1"><?php echo $logo_description; ?></p>
					<?php endif ?>
				</div>
			</div>
			<div class="col-sm-12 grid-logos">
				<?php 
				/*if( have_rows('add_partnership_logos') ):
					while( have_rows('add_partnership_logos') ) : the_row();
						$add_logo = get_sub_field('add_logo');
						echo '<div class="p-logos"><a href="javascript;"><img alt="'.$add_logo['alt'].'" src="'.$add_logo['url'].'" /></a></div>';
					endwhile;
				endif; */
				?>
				<?php if (have_rows('add_partnership_logos')): 
					$count = 0;
    $total_rows = count(get_field('add_partnership_logos')); // Get total repeater rows
    ?>
    <div class="p-logos-wrapper">
    	<?php while (have_rows('add_partnership_logos')): the_row(); 
    		$add_logo = get_sub_field('add_logo'); 
    		$link = get_sub_field('link'); 
    		$target = "_blank";
    		if ($link == 'javascript;' || $link == '#' || $link == 'javascript:void(0)' ) {
    			$target = "_self";
    		}
    		?>
    		<div class="p-logos">
    			<a target="<?php echo $target; ?>" href="<?php echo $link ? $link : "javascript;"; ?>">
    				<img alt="<?php echo esc_attr($add_logo['alt']); ?>" src="<?php echo esc_url($add_logo['url']); ?>" />
    			</a>
    		</div>

    		<?php $count++;  
    		if ($count % 4 === 0 && $count < $total_rows): ?>
    		</div><div class="p-logos-wrapper">
    	<?php endif; ?>
    <?php endwhile; ?>
</div>
<?php endif; ?>


</div>
</div>
</div>
</section>