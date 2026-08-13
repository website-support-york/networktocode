<?php

/**
* Layout of sef Course List.
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

$sef_course_listing_heading = get_field('sef_course_listing_heading');
$sef_course_listing_category = get_field('sef_course_listing_category');

$sef_course_listing_categories = get_term($sef_course_listing_category);
$sef_course_listing_category = $sef_course_listing_categories->slug;

?>


<!-- upcoming course section -->
<section class="upcoming-course bg_secondary py_80">
    <div class="container">
        <div class="row">
        	<div class="col-md-12 mb-4">
            	<div class="title-box wow animate__animated animate__fadeInUp">
					<? if( $sef_course_listing_heading ) { ?><h2 class="section-title"><?php echo $sef_course_listing_heading; ?></h2><?php } ?>
            	</div>
        	</div>
			    <?php 
                // $courses = get_posts(array(
                // "status" => "publish",
                // "post_type" => "course",
                // "course-category" => $sef_course_listing_category,
                // "posts_per_page" => "20",
                // "orderby"   => "ID",
                // "order"     => "ASC"
                // ));


                $courses = get_posts(array(
                      'post_status'    => 'publish',
                      'post_type'      => 'course',
                      'posts_per_page' => 20,

                      // Use the named key from meta_query for ordering
                      'orderby'        => 'course_date',
                      'order'          => 'ASC',

                      'tax_query' => array(
                          array(
                              'taxonomy' => 'course-category',
                              'field'    => 'slug',
                              'terms'    => $sef_course_listing_category,
                          )
                      ),

                      'meta_query' => array(
                          'relation' => 'AND', // Usually, you want Category AND (Future OR Ongoing)
                          array(
                              'relation' => 'OR',
                              // 1. Course hasn't started yet
                              'course_date' => array(
                                  'key'     => 'course_details_date_from',
                                  'value'   => date('Ymd'), // Use Ymd for ACF Date Pickers
                                  'compare' => '>=',
                                  'type'    => 'NUMERIC'
                              ),
                              // 2. Course is currently running (started in past, but 'to' is in future)
                              array(
                                  'relation' => 'AND',
                                  array(
                                      'key'     => 'course_details_date_from',
                                      'value'   => date('Ymd'),
                                      'compare' => '<',
                                      'type'    => 'NUMERIC'
                                  ),
                                  array(
                                      'key'     => 'course_details_date_to',
                                      'value'   => date('Ymd'),
                                      'compare' => '>=',
                                      'type'    => 'NUMERIC'
                                  ),
                              ),
                              // 3. Optional: Handle courses with no end date
                              array(
                                  'key'     => 'course_details_date_to',
                                  'compare' => 'NOT EXISTS'
                              ),
                          )
                      )
                  ));
                


                //echo "<pre> ";
                //print_r($courses);
                if( $courses ):

                  // echo "<pre>";
                  // print_r($courses);
          ?>

          <?php foreach( $courses as $course ): ?>
            <?php
              //echo "<pre>";
              //print_r($current_opening);
              $course_details_date_from = get_field('course_details_date_from', $course->ID);
              $course_details_date_to = get_field('course_details_date_to', $course->ID);
              $course_details_location = get_field('course_details_location', $course->ID);
              $course_details_price = get_field('course_details_price', $course->ID);
              $course_details_button = get_field('course_details_button', $course->ID);  

              $fromdate = DateTime::createFromFormat('Ymd', $course_details_date_from);
              $todate = DateTime::createFromFormat('Ymd', $course_details_date_to);
            ?>

            <div class="col-md-12">
              <div class="single-course wow animate__animated animate__fadeInUp delay2">
                  <div class="course-content">
                    <?php if (!empty($fromdate)) { ?><span class="course-date"><?php echo $fromdate->format('F j, Y'); ?> <?php if (!empty($todate)) { ?>- <?php echo $todate->format('F j, Y'); ?><?php } ?></span><?php } ?>
                    <?php if (!empty($course_details_location)) { ?><span class="course-status"><?php echo $course_details_location; ?></span><?php } ?>
                    <h3 class="course-title">
                    <a target="<?php echo $course_details_button['target'] ? $course_details_button['target'] : '_self'; ?>" href="<?php echo $course_details_button['url']; ?>"><?php echo get_the_title($course->ID); ?></a>
                    </h3>
                    <p>
                    <?php echo wp_trim_words( get_post_field('post_content', $course->ID), $num_words = 32, $more = '...'); ?>
                    </p>
                  </div>
                  <div class="course-action">
                    <?php if (!empty($course_details_price)) { ?><span class="course-amount">$<?php echo $course_details_price; ?></span><?php } ?>
                    <?php if (!empty($course_details_button)) { ?><a class="btn btn-outline" target="<?php echo $course_details_button['target'] ? $course_details_button['target'] : '_self'; ?>" href="<?php echo $course_details_button['url']; ?>"><?php echo $course_details_button['title']; ?></a><?php } ?>
                  </div>
              </div>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

		</div>
	</div>
</section>