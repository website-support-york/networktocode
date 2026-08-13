<?php

/**
* Layout of sef Apps Detail.
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

$apps_template_up = array(
	
);

	//echo "<pre>";
	//print_r($current_opening);
	$apps_ID = get_the_ID();
	$apps_author = get_field('apps_author', $apps_ID);
	$apps_initial_release_version = get_field('apps_initial_release_version', $apps_ID);
	$apps_release_date = get_field('apps_release_date', $apps_ID);
	$apps_link = get_field('apps_link', $apps_ID);
	$apps_button_popup = get_field('apps_button_popup');
	$apps_support_contents = get_field('apps_support_contents', $apps_ID);  


?>

<!-- apps overview sections stats -->
	<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> training-faq">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div
              class="curriculum mt-4 pb-0 wow animate__animated animate__fadeInUp delay2 border-bottom-0"
            >
				<?php if (!empty($apps_release_date)) { ?><span>Release Date: <b><?php echo $apps_release_date; ?></b></span><?php } ?>
				<?php if ($apps_button_popup) {?>
					<?php if (!empty($apps_link)) { ?>
					<span><?php echo $apps_link['title']; ?>:
					<b>
					<a
						target="<?php echo $apps_link['target'] ? $apps_link['target'] : '_self'; ?>"
						href="<?php echo $apps_link['url']; ?>"
						class="td-none"
						><?php echo $apps_link['title']; ?></a
					></b>
					</span>
					<?php } ?>
				<?php } else { ?>
					<?php if (!empty($apps_link)) { ?><span
					><?php echo $apps_link['title']; ?>:
					<b
					><a
						target="<?php echo $apps_link['target'] ? $apps_link['target'] : '_self'; ?>"
						href="<?php echo $apps_link['url']; ?>"
						class="td-none"
						><?php echo $apps_link['url']; ?></a
					></b
					></span
				><?php } ?>
			  <?php } ?>
              <hr />
              <ul class="theme-ul">
			  	<?php foreach ($apps_support_contents as $apps_support_contents) {            
                  $apps_support_content = $apps_support_contents['apps_support_content'];  
				?>
                	<?php if (!empty($apps_support_content)) { ?><li><?php echo $apps_support_content; ?></li><?php } ?>
				<?php } ?>
              </ul>
            </div>
          </div>
		  <?php echo '<InnerBlocks apps_template_up="' . esc_attr( wp_json_encode( $apps_template_up ) ) . '" />'; ?>
        </div>
      </div>
    </section>