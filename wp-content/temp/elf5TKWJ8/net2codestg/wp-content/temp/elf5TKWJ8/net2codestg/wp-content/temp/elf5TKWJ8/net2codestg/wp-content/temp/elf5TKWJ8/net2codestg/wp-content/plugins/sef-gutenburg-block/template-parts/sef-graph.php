<?php

/**
* Layout of Sef Graph.
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

$sef_graph_y_title = get_field('sef_graph_y_title');
$sef_graph_x_title = get_field('sef_graph_x_title');
$sef_graph_detail_desktop = get_field('sef_graph_detail');
$sef_graph_detail_mobile = get_field('sef_graph_detail');
$Percentage_constant = 100;

?>


<section class="graph">
      <div class="component bar-chart">

        <div class="container">
          <?php if (!empty($sef_graph_y_title)) { ?><span class="y-axies"><?php echo $sef_graph_y_title; ?></span><?php } ?>
          <?php if (!empty($sef_graph_x_title)) { ?><span class="x-axies"><?php echo $sef_graph_x_title; ?></span><?php } ?>

          <?php 
            foreach ($sef_graph_detail_desktop as $sef_graph_detail_desktop) {            
            $sef_graph_detail_icon_desktop = $sef_graph_detail_desktop['sef_graph_detail_icon_desktop'];
            $sef_graph_detail_title_desktop = $sef_graph_detail_desktop['sef_graph_detail_title'];
            $sef_graph_detail_content_desktop = $sef_graph_detail_desktop['sef_graph_detail_content'];
            $sef_graph_detail_percentage_desktop = $sef_graph_detail_desktop['sef_graph_detail_percentage_desktop'];
            $sef_graph_detail_percentage_desktop_sum = $Percentage_constant - $sef_graph_detail_percentage_desktop;
            $sef_graph_link_desktop = $sef_graph_detail_desktop['sef_graph_link'];
          ?>
          <div class="single-bar">
            <div class="bar one active">
              <div class="value" style="bottom: <?php echo $sef_graph_detail_percentage_desktop; ?>%">
                <?php if (!empty($sef_graph_detail_icon_desktop)) { ?><img src="<?php echo $sef_graph_detail_icon_desktop['url']; ?>" /><?php } ?>
                <h5><?php echo $sef_graph_detail_title_desktop; ?></h5>
              </div>
              <a href="<?php echo $sef_graph_link_desktop; ?>">
                <div class="solid" style="top: <?php echo $sef_graph_detail_percentage_desktop_sum; ?>%">
                  <h3 class="title"><?php echo $sef_graph_detail_content_desktop; ?></h3>
                </div>
              </a>
            </div>
          </div>
          <?php } ?>
  
        </div>

        <div class="mobile-container">
          <?php if (!empty($sef_graph_y_title)) { ?><span class="y-axies"><?php echo $sef_graph_y_title; ?></span><?php } ?>
          <?php if (!empty($sef_graph_x_title)) { ?><span class="x-axies"><?php echo $sef_graph_x_title; ?></span><?php } ?>

          <?php 
            foreach ($sef_graph_detail_mobile as $sef_graph_detail_mobile) {            
              $sef_graph_detail_icon_mobile = $sef_graph_detail_mobile['sef_graph_detail_icon_mobile'];
              $sef_graph_detail_title_mobile = $sef_graph_detail_mobile['sef_graph_detail_title'];
              $sef_graph_detail_content_mobile = $sef_graph_detail_mobile['sef_graph_detail_content'];
              $sef_graph_detail_percentage_mobile = $sef_graph_detail_mobile['sef_graph_detail_percentage_mobile'];
              $sef_graph_link_mobile = $sef_graph_detail_mobile['sef_graph_link'];
          ?>
          <div class="single_bar">
            <a href="<?php echo $sef_graph_link_mobile; ?>">
              <div class="bar-pack" style="width: <?php echo $sef_graph_detail_percentage_mobile; ?>%">
                <img src="<?php echo $sef_graph_detail_icon_mobile['url']; ?>" alt="" />
                <span><?php echo $sef_graph_detail_title_mobile; ?><i class="bi bi-arrow-right"></i></span>
              </div>
            </a>
            <span class="pack-name"
              ><?php echo $sef_graph_detail_content_mobile; ?></span
            >
          </div>
          <?php } ?>
          
          
        </div>
      </div>
    </section>