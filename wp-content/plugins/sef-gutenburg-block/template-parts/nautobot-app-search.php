<?php
/**
* Layout of Nautobot App Search Accordion
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

$section_heading = get_field('section_heading');
$section_description = get_field('section_description');
$accordion_heading = get_field('accordion_heading');
$add_accordion = get_field('add_accordion');
$footer_accordion_heading = get_field('footer_accordion_heading');
$footer_accordion_description = get_field('footer_accordion_description');
$accordion_sidebar_image = get_field('accordion_sidebar_image');

?>
<section id="<?php echo $id; ?>" class="nb-search-app <?php echo $className; ?>">
	<div class="container">

		<!--- Title Section --->
		<div class="col-md-12 title-box wow animate__animated animate__fadeInUp">
			<?php if ($section_heading): ?>
				<h2 class="section-title text-white mt-3 sec-heading"><?php echo $section_heading; ?></h2>
			<?php endif ?>
			<?php if ($section_description): ?>
				<p><?php echo $section_description; ?></p>
			<?php endif ?>
		</div>
		
		<div class="searchApps">
			<form id="search-app">
				<input type="text" id="apps-search-input" name="search-app" class="form-control" placeholder="Search for a Nautobot App..." />
				<div class="apps-results"></div>
			</form>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="nb-acc">
					<?php if ($accordion_heading): ?>
						<h4><?php echo $accordion_heading; ?></h4>
					<?php endif ?>

					<?php if ( $accordion_description = get_field( 'accordion_description' ) ) : ?>
						<p><?php echo esc_html( $accordion_description ); ?></p>
					<?php endif; ?>		
								
					<div class="accordion" id="accordionFlushExample2">
						<?php 
						$counter_style2 = 1;
						if( have_rows('add_accordion') ):
							while( have_rows('add_accordion') ) : the_row();
								$title = get_sub_field('title');
								$description = get_sub_field('description');
								?>
								 <div class="accordion-item">
								 	<h2 class="accordion-header" id="flush-heading<?php echo $counter_style2;?>">
				                    <button class="accordion-button acrdn-click <?php echo ($counter_style2 === 1) ? '' : 'collapsed'; ?>"
					                      type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $counter_style2;?>"
					                      aria-expanded="<?php echo ($counter_style2 === 1) ? 'true' : 'false'; ?>" aria-controls="flush-collapse<?php echo $counter_style2;?>"
					                      id="acrdn-btn-<?php echo $counter_style2;?>" data-imgid="<?php echo $counter_style2;?>">
				                    	<?php if (!empty($title)) { echo $title; } ?>
				                    </button>
				                  	</h2>
				                  	
									<div id="flush-collapse<?php echo $counter_style2;?>" class="accordion-collapse collapse <?php echo ($counter_style2 === 1) ? 'show' : ''; ?>" aria-labelledby="flush-heading<?php echo $counter_style2;?>" data-bs-parent="#accordionFlushExample2">
					                    <div class="accordion-body">
					                      <p><?php if (!empty($description)) {  echo $description; } ?></p>
					                    </div>
					                </div>
								</div>
								<?php
								$counter_style2++;
							endwhile;
						endif;
						?>
					</div>
					<div class="accordion-footer">
						<?php if ($footer_accordion_heading): ?>
							<h4><?php echo $footer_accordion_heading; ?></h4>
							<p><?php echo $footer_accordion_description; ?></p>
						<?php endif ?>
						
					</div>
				</div>
			</div>

			<!--- Image Section --->
			<div class="col-lg-6">
				<div class="acc-img">
					<?php if ($accordion_sidebar_image): ?>
						<img src="<?php echo $accordion_sidebar_image['url']; ?>" alt="<?php echo $accordion_sidebar_image['alt']; ?>" />
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	.app-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px;
    border-bottom: 1px solid #eee;
}

.app-icon img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

.app-content {
    flex: 1;
    padding-left: 15px;
}

.app-link a {
    color: #f58220;
    text-decoration: none;
    font-weight: 500;
}
</style>