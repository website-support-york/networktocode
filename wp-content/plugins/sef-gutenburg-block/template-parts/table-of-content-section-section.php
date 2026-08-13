<?php

/**
* Layout of Table of Content
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

$style_selection = get_field('style_selection');
$read_the_full_compression = get_field('read_the_full_compression');
?>

<?php if($style_selection == 'style1'): ?>
<section id="<?php echo esc_attr($id); ?>" class="nautobot-gn-table nautobot-gpt seat-for-you <?php echo esc_attr($className); ?>">

	<!-- Neutobot GPT Fn Compare Starts -->
	<div class="container">
		<div class="row">

			<?php if(get_field('section_title')): ?>
			<div class="col-md-12 title-box mb-4">
				<h2 class="section-title"><?php echo get_field('section_title'); ?></h2>
				<h5 class="sub-title col-lg-8 offset-lg-2"><?php echo get_field('section_sub_title'); ?></h5>
			</div>
			<?php endif; ?>

			<div class="col-md-12">       
				<div class="innerWrap">
					<table class="table table-striped">
						<thead>
							<tr>
								<?php while(have_rows('table_of_content_table_heading')): the_row(); ?>
									<th scope="col"><?php echo get_sub_field('heading'); ?></th>
								<?php endwhile; ?>
							</tr>
						</thead>
						<tbody>
							<?php while(have_rows('table_of_content_table_rows')): the_row(); ?>
							<tr>
								<?php while(have_rows('row_data')): the_row(); ?>
									<td><?php echo get_sub_field('data'); ?></td>
								<?php endwhile; ?>
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>   
			</div>
		</div>
  	</div>
	<!-- Neutobot GPT Fn Compare Ends -->
    
</section>

<?php elseif($style_selection == 'style2'): ?>

<!-- Neutobot GPT Checklist Compare Starts -->
<section id="<?php echo esc_attr($id); ?>" class="nautobot-gpt-unique seat-for-you <?php echo esc_attr($className); ?>">
  	<div class="container">
		<div class="row">

			<?php if(get_field('section_title')): ?>
			<div class="col-md-12 title-box mb-4">
				<h2 class="section-title"><?php echo get_field('section_title'); ?></h2>
				<h5 class="sub-title col-lg-8 offset-lg-2"><?php echo get_field('section_sub_title'); ?></h5>
			</div>
			<?php endif; ?>

			<div class="col-md-12">  
				<div class="innerWrap">         
					<table class="table table-striped">
						<thead>
							<tr>
								<?php while(have_rows('table_of_content_table_heading')): the_row(); ?>
									<th scope="col"><?php echo get_sub_field('heading'); ?></th>
								<?php endwhile; ?>
							</tr>
						</thead>
						<tbody>
							<?php while(have_rows('table_of_content_table_rows')): the_row(); ?>
							<tr>
								<?php while(have_rows('row_data')): the_row(); ?>

									<?php if(get_sub_field('select') == 'text'): ?>
										<td><?php echo get_sub_field('data'); ?></td>
									<?php elseif(get_sub_field('select') == 'imgwithtext'): ?>
										<td><span><img src="<?php echo get_sub_field('data_textwith_image'); ?>" alt="Status"></span><span><?php echo get_sub_field('data_text'); ?></span></td>
									<?php else: ?>
										<td>
											<?php if(get_sub_field('data_image')): ?>
												<img src="<?php echo get_sub_field('data_image'); ?>" alt="Status"></td>
											<?php endif; ?>
									<?php endif; ?>
								<?php endwhile; ?>
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
					<?php if(!empty($read_the_full_compression)):?>
					<div class="text-center mt-5">
						<a href="<?php echo $read_the_full_compression['url'];?>" class="btn theme-btn wow animate__ animate__fadeInUp delay4" target="<?php echo $read_the_full_compression['target'];?>">
							<?php echo $read_the_full_compression['title'];?>              
						</a>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
  	</div>
</section>
<!-- Neutobot GPT Checklist Compare Ends -->

<?php else: ?>

<!-- Neutobot GPT Checklist TTE Starts -->
<section id="<?php echo esc_attr($id); ?>" class="nautobot-gn-table nautobot-gpt-tte seat-for-you <?php echo esc_attr($className); ?>">
  	<div class="container">
		<div class="row">

			<?php if(get_field('section_title')): ?>
			<div class="col-md-12 title-box mb-4">
          		<h3 class="section-title"><?php echo get_field('section_title'); ?></h3>
          		<h5 class="sub-title col-lg-8 offset-lg-2"><?php echo get_field('section_sub_title'); ?></h5>        
      		</div>
      		<?php endif; ?>

			<div class="col-lg-9 m-auto">    
				
				<div class="innerWrap">
					<table class="table table-striped">
						<thead>
							<tr>
								<?php while(have_rows('table_of_content_table_heading')): the_row(); ?>
									<th scope="col"><?php echo get_sub_field('heading'); ?></th>
								<?php endwhile; ?>
							</tr>
						</thead>
						<tbody>
							<?php while(have_rows('table_of_content_table_rows')): the_row(); ?>
							<tr>
								<?php while(have_rows('row_data')): the_row(); ?>
									<td><?php echo get_sub_field('data'); ?></td>
								<?php endwhile; ?>
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
  	</div>
</section>
<!-- Neutobot GPT Checklist TTE Ends -->


<?php endif; ?>	