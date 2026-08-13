<?php

/**
* Layout of sef Case study list.
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

$no_of_studies = get_field('no_of_studies');


?>


<!-- Nautobot Sandbox Environments section -->

<!-- <section class="img-content company sandbox pb-4">
	<div class="container">
	<div class="row">
		<div
            class="col-lg-12  mb-4 pb-2 title-box wow animate__animated animate__fadeInUp delay1"
          >
			<?php if (!empty($case_study_list_heading)) { ?>
            	<h2 class="section-title above-arrow"><?php echo $case_study_list_heading; ?></h2>
			<?php } ?>
          </div>
		</div>
	</div>
</section> -->

<?php 

    $studies = get_posts(array(
    "status" => "publish",
    "post_type" => "study",
    "posts_per_page" => "$no_of_studies",
    "orderby"   => "ID",
    "order"     => "DESC"
    ));

    //echo "<pre> ";
    //print_r($studies);
    if( $studies ):
?>
<?php $studies_counter = 0 ?>
<?php foreach( $studies as $study ): ?>
<?php
      //echo "<pre>";
      //print_r($current_opening);
      //$team_designation = get_field('designation', $team->ID); 
?>

<section class="img-content company sandbox cs-list">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 <?php if($studies_counter % 2 == 0) { ?> order-1 order-md-2 <?php } ?> <?php if($studies_counter % 2 != 0) { ?> order-1 order-md-1 <?php } ?>">
            <img
              src="<?php echo get_the_post_thumbnail_url($study->ID); ?>"
              class="img-fluid img-shadow wow animate__animated animate__fadeIn animate__slower"
              alt=""
            />
          </div>
          <div class="col-md-6 d-flex align-item-center <?php if($studies_counter % 2 == 0) { ?> order-2 order-md-1 <?php } ?> <?php if($studies_counter % 2 != 0) { ?> order-2 order-md-2 <?php } ?>">
            <div class="content-box">
              <h3
                class="remove-arrow section_title wow animate__animated animate__fadeInUp"
              >
			  	<?php echo get_the_title($study->ID); ?>
              </h3>

              <p
                class="content-data wow animate__animated animate__fadeInUp delay1"
              >
			  	<?php echo get_the_excerpt($study->ID); ?>
              </p>
              <a
                href="<?php echo get_permalink( $study->ID ); ?>"
                class="btn btn-learn my-0 wow animate__animated animate__fadeInUp delay3"
                data-cursor="-color-orange"
              >
                Read more <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>
<?php $studies_counter++?>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>