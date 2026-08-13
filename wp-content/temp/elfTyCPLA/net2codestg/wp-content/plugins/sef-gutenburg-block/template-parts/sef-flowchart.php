<?php

/**
* Layout of sef flowchart.
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

$sef_flowchart_heading = get_field('sef_flowchart_heading');
$sef_flowchart_subheading = get_field('sef_flowchart_subheading');
$sef_flowchart_process = get_field('sef_flowchart_process');
$sef_flowchart_outcome_heading = get_field('sef_flowchart_outcome_heading');
$sef_flowchart_outcome_icon = get_field('sef_flowchart_outcome_icon');

$sef_flowchart_outcome_list = get_field('sef_flowchart_outcome_list');
$sef_flowchart_outcome_button = get_field('sef_flowchart_outcome_button');

$sef_flowchart_outcome_background = get_field('sef_flowchart_outcome_background');

?>

<!-- Strategic Architecture Design and Analysis (SADA) section -->
    <section class="sada pb-0" style="background: <?php echo $sef_flowchart_outcome_background; ?>">
      <div class="container">
        <div class="row g-0">
          <div class="col-md-12 title-box mb-5 px-lg-5">
            <?php if (!empty($sef_flowchart_heading)) { ?>
            <h3 class="section-title wow animate__animated animate__fadeInUp">
            <?php echo $sef_flowchart_heading; ?>
            </h3>
            <?php } ?>
            <?php if (!empty($sef_flowchart_subheading)) { ?>
            <p class="wow animate__animated animate__fadeInUp" > <?php echo $sef_flowchart_subheading; ?> </p>
            <?php } ?>
          </div>
          <?php if (!empty($sef_flowchart_process)) { ?>
          <div class="col-md-6">
            <div class="sada-steps">

              <?php 
                foreach ($sef_flowchart_process as $sef_flowchart_process) {            
                $sef_flowchart_process_title = $sef_flowchart_process['sef_flowchart_process_title'];
                $sef_flowchart_process_image = $sef_flowchart_process['sef_flowchart_process_image'];
              ?>
              <?php if (!empty($sef_flowchart_process_title)) { ?>
              <h3 class="wow animate__animated animate__fadeInUp">
                <?php if (!empty($sef_flowchart_process_image)) { ?>
                <img
                  src="<?php echo $sef_flowchart_process_image['url']; ?>"
                  class="sada-title-img"
                  alt=""
                />
                <?php } ?>
                <?php echo $sef_flowchart_process_title; ?>
              </h3>
              <?php } ?>
              <?php } ?>
              
            </div>
          </div>
          <?php } ?>
          <div class="col-md-6">
            <div class="sada-last-step">
              <div
                class="step-4 wow animate__animated animate__fadeInUp delay8"
              >
                <?php if (!empty($sef_flowchart_outcome_heading)) { ?>
                <h3>
                  
                  <img
                    src="<?php echo $sef_flowchart_outcome_icon['url']; ?>"
                    class="sada-title-img"
                    alt=""
                  />
                  
                  <?php echo $sef_flowchart_outcome_heading; ?>
                </h3>
                <?php } ?>
                <?php if (!empty($sef_flowchart_outcome_list)) { ?>
                <ul>
                <?php 
                  foreach ($sef_flowchart_outcome_list as $sef_flowchart_outcome_list) {            
                  $sef_flowchart_outcome_list = $sef_flowchart_outcome_list['sef_flowchart_outcome_list_content'];
                ?>
                  <li><?php echo $sef_flowchart_outcome_list; ?></li>
                <?php } ?>
                </ul>
                <?php } ?>
                <a class="btn theme-btn" data-bs-toggle="modal" data-bs-target="<?php echo $sef_flowchart_outcome_button['url']; ?>" href="<?php echo $sef_flowchart_outcome_button['url']; ?>"><?php echo $sef_flowchart_outcome_button['title']; ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>