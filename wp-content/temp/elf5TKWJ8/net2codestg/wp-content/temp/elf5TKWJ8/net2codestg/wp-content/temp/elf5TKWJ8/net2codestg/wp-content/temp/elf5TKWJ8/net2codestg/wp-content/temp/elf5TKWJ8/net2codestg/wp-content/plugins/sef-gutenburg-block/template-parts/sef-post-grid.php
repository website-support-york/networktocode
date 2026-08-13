<?php

/**
* Layout of sef Post Grid.
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

$sef_post_grid_heading = get_field('sef_post_grid_heading');
$sef_post_grid_table = get_field('sef_post_grid_table');

?>

<!-- Which Seat is Right for You section -->
    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> seat-for-you">
      <div class="container">
        <div class="row">
          <? if( $sef_post_grid_heading ) { ?>
          <div class="col-md-12 title-box mb-4">
            <h2 class="section-title"><?php echo $sef_post_grid_heading; ?></h2>
          </div>
          <?php } ?>
          <div class="col-md-12">
            <table class="table table-striped">
              <? if( $sef_post_grid_table ) { ?>
              <thead>
                <tr>
                  <?php 
                    foreach ($sef_post_grid_table as $sef_post_grid_table) {            
                    $sef_post_grid_table_heading = $sef_post_grid_table['sef_post_grid_table_heading'];
                  ?>
                  <th scope="col">
                    <?php echo $sef_post_grid_table_heading; ?>
                  </th>
                  <?php } ?>
                </tr>
              </thead>
              <?php } ?>
              <tbody>

              <?php 

                $current_openings = get_posts(array(
                "status" => "publish",
                "post_type" => "current_openings",
                "posts_per_page" => "20",
                "orderby"   => "ID",
                "order"     => "DESC"
                ));

                //echo "<pre> ";
                //print_r($current_openings);
                if( $current_openings ):
              ?>

              <?php foreach( $current_openings as $current_opening ): ?>
                <?php
                  //echo "<pre>";
                  //print_r($current_opening);
                  $current_openings_location = get_field('current_openings_location', $current_opening->ID);
                  $current_openings_requirements = get_field('current_openings_requirements', $current_opening->ID);
                  
                ?>
                <tr>
                  <td><?php echo get_the_title($current_opening->ID); ?></td>
                  <td><?php echo $current_openings_location; ?></td>
                  <td><a href="<?php echo get_permalink( $current_opening->ID ); ?>"><?php echo $current_openings_requirements; ?></a></td>
                </tr>
              
              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
              <?php endif; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>