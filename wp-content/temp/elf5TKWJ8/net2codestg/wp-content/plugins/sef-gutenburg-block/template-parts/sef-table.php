<?php

/**
* Layout of sef Table.
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

$title = get_field('title');
$contents = get_field('contents');
$table = get_field('table');
$table_of_content = get_field('table_of_content');


?>
<!-- Nautobot Cloud Plan section -->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> cloud-plan py_80">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 title-box offset-lg-1 mb-2">
        <?php if (!empty($title)) { ?><h2 class="section-title"><?php echo $title; ?></h2><?php } ?>
        <?php if (!empty($contents)) { ?>
        <?php 
          foreach ($contents as $contents) {            
          $content = $contents['content'];
        ?>
          <?php if (!empty($content)) { ?><?php echo $content; ?><?php } ?>
        <?php } ?>
        <?php } ?>
      </div>
      <div class="col-lg-12 mt-4" id="cloud-offer">
        <table class="table table-striped cloud-offer-table">
          <thead>
            <tr>
              <?php if (!empty($table)) { ?>
              <?php 
                foreach ($table as $table) {            
                $table_title = $table['table_title'];
                $table_title_color = $table['table_title_color'];

              ?>
                <?php if (!empty($table_title)) { ?><th scope="col" style="background-color: <?php echo $table_title_color; ?>"><span><?php echo $table_title; ?></span></th><?php } ?>
              <?php } ?>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
          

            <?php if (!empty($table_of_content)) { ?>
            <?php
              $column_counter = 0; 
              foreach ($table_of_content as $table_of_content) {            
              $feature  = $table_of_content['feature'];
              $basic    = $table_of_content['basic'];
              $premium  = $table_of_content['premium'];
              // print_r($table_contents);
              // $table_contents = array_map(null, ...$table_contents);

            ?>  
              <tr class="wow animate__animated animate__fadeInUp delay2">          
                  <?php if (!empty($feature)) { ?><td class="table-img"><?php echo $feature; ?></td><?php } ?>
                  <?php if (!empty($basic)) { ?><td class="table-img"><?php echo $basic; ?></td><?php } ?>
                  <?php if (!empty($premium)) { ?><td class="table-img"><?php echo $premium; ?></td><?php } ?>
              </tr>
            <?php $column_counter++; } ?>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
</section>