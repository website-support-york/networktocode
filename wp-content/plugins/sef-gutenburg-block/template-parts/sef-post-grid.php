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
$table_main_heading   = get_field('table_main_heading');
$select_category      = get_field('select_category');

$term = $select_category[0]->slug;
$term_id = $select_category[0]->term_id;


$current_openings = get_posts(array(
  "status" => "publish",
  "post_type" => "current_openings",
  "posts_per_page" => "20",
  //"orderby"   => "ID",
  //"order"     => "DESC",
  'tax_query' => array( array('taxonomy' => 'current-openings-category', 'field'    => 'term_id', 'terms'    => $term_id,),),
));

if( $current_openings ):
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
              <?php if( $sef_post_grid_table ) { ?>
              <thead>
                  <tr>
                      <?php 
                      foreach ($sef_post_grid_table as $sef_post_grid_table_item) {            
                          $sef_post_grid_table_heading = $sef_post_grid_table_item['sef_post_grid_table_heading'];
                      ?>
                          <th scope="col">
                              <?php echo esc_html($sef_post_grid_table_heading); ?>
                          </th>
                      <?php } ?>
                  </tr>
              </thead>
              <?php } ?>
              
              <tbody>
              <?php 
              if( $current_openings ):
                  foreach( $current_openings as $current_opening ): 
                      $current_openings_location = get_field('current_openings_location', $current_opening->ID);
                      $current_openings_requirements = get_field('current_openings_requirements', $current_opening->ID);

                      // Get post title
                      $post_title = get_the_title($current_opening->ID);
              ?>
                  <?php if ($post_title === "General Application" && !empty($table_main_heading)) { ?>
                      <!-- ✅ Extra dynamic text row for General Applications -->
                      <tr class="general-applications">
                          <td colspan="7" style="padding:20px 0 0 !important">
                              <p class="above-table"><?php echo esc_html($table_main_heading); ?></p>
                          </td>
                      </tr>
                  <?php } ?>

                  <tr>
                      <td class="col-6"><?php echo esc_html($post_title); ?></td>
                      <td class="col-4"><?php echo ($current_openings_location); ?></td>
                      <td class="col-2">
                          <a href="<?php echo esc_url(get_permalink($current_opening->ID)); ?>">
                              <?php echo esc_html($current_openings_requirements); ?>
                          </a>
                      </td>
                  </tr>

                  

              <?php endforeach; wp_reset_postdata(); ?>
              <?php endif; ?>
              </tbody>


              
            </table>

          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>