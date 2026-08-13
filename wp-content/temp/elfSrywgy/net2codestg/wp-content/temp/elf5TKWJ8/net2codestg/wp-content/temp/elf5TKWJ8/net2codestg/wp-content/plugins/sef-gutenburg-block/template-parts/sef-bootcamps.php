<?php

/**
* Layout of sef Bootcamps.
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

$sef_course_background_color = get_field('background_color');
$sef_course_category = get_field('sef_course_category');

$sef_course_categories = get_term($sef_course_category);
$sef_course_category = $sef_course_categories->slug;

?>


<!-- bootcamps section stats -->
<?php 
      $bootcamps = get_posts(array(
      "status" => "publish",
      "post_type" => "course",
      "course-category" => $sef_course_category,
      "posts_per_page" => "20",
      "orderby"   => "ID",
      "order"     => "DESC"
      ));

      //echo "<pre> ";
      //print_r($courses);
      if( $bootcamps ):
?>

<?php $bootcamps_counter = 1 ?>
<?php foreach( $bootcamps as $bootcamp ): ?>
<?php
  //echo "<pre>";
  //print_r($current_opening);
  $course_course_length = get_field('course_length', $bootcamp->ID);
  $course_level = get_field('level', $bootcamp->ID);
  $curriculum_detail_lists = get_field('curriculum_detail_lists', $bootcamp->ID);
  $post_slug = get_post_field( 'post_name', get_post($bootcamp->ID) );
?>
<section class="<?php echo esc_attr($className); ?> training-faq future-netdev bootcamps-card-<?php echo $bootcamps_counter; ?>" id="<?php echo $post_slug; ?>" style="background-color: <?php echo $sef_course_background_color;?>">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div
        class="curriculum wow animate__animated animate__fadeInUp delay2"
      >
        <span><b><?php echo get_the_title($bootcamp->ID); ?></b></span>
        <?php if (!empty($course_course_length)) { ?><span><b>Course Length :</b> <?php echo $course_course_length; ?></span><?php } ?>
        <?php if (!empty($course_level)) { ?><span><b>Level :</b> <?php echo $course_level; ?></span><?php } ?>
      </div>
      </div>
      <div class="col-md-12 future-content-box mt-0">
      <div
        class="future-accordion wow animate__animated animate__fadeInUp delay3 w-100"
      >
        <div class="accordion accordion-flush" id="accordionFlushExample">
      
        <?php if( $curriculum_detail_lists ): ?>
        <?php $bootcamps_inner_counter = 1 ?>
        <?php foreach( $curriculum_detail_lists as $curriculum_detail_list ): ?>
        <?php
          //echo "<pre>";
          //print_r($current_opening);
          $curriculum_detail_list_icon = $curriculum_detail_list['curriculum_detail_list_icon'];
          $curriculum_detail_list_title = $curriculum_detail_list['curriculum_detail_list_title'];
          $curriculum_detail_list_content = $curriculum_detail_list['curriculum_detail_list_content'];
        ?>
        <div class="accordion-item">
          <h2
          class="accordion-header"
          id="flush-heading-<?php echo $bootcamps_counter; ?>-<?php echo $bootcamps_inner_counter; ?>"
          data-cursor="-color-orange"
          >
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapse-<?php echo $bootcamps_counter; ?>-<?php echo $bootcamps_inner_counter; ?>"
            aria-expanded="false"
            aria-controls="flush-collapse-<?php echo $bootcamps_counter; ?>-<?php echo $bootcamps_inner_counter; ?>"
            id="acrdn-btn-<?php echo $bootcamps_counter; ?>-<?php echo $bootcamps_inner_counter; ?>"
          >
            <?php if (!empty($curriculum_detail_list_icon)) { ?><img src="<?php echo $curriculum_detail_list_icon['url']; ?>" alt="<?php echo $curriculum_detail_list_icon['alt']; ?>" /><?php } ?>
            <?php if (!empty($curriculum_detail_list_title)) { ?><?php echo $curriculum_detail_list_title; ?><?php } ?>
          </button>
          </h2>
          <div
          id="flush-collapse-<?php echo $bootcamps_counter; ?>-<?php echo $bootcamps_inner_counter; ?>"
          class="accordion-collapse collapse"
          aria-labelledby="flush-heading-<?php echo $bootcamps_counter; ?>-<?php echo $bootcamps_inner_counter; ?>"
          data-bs-parent="#accordionFlushExample"
          >
          <?php if (!empty($curriculum_detail_list_content)) { ?>
          <div class="accordion-body">
            
              <?php echo $curriculum_detail_list_content; ?>
            
          </div>
          <?php } ?>
          </div>
        </div>
        <?php $bootcamps_inner_counter++?>
        <?php endforeach; ?>
        <?php endif; ?>

        </div>
      </div>
      </div>
    </div>
  </div>
</section>
<?php $bootcamps_counter++?>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>