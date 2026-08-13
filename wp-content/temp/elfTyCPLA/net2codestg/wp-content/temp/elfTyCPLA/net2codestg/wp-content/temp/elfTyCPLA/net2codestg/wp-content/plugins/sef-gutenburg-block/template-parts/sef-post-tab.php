<?php

/**
* Layout of sef Post Tab.
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

$sef_post_tab_heading_one = get_field('sef_post_tab_heading_one');
$sef_post_tab_heading_two = get_field('sef_post_tab_heading_two');
$sef_post_tab_heading_third = get_field('sef_post_tab_heading_third');

$sef_post_tab_one_button = get_field('sef_post_tab_one_button');
$sef_post_tab_two_button = get_field('sef_post_tab_two_button');
$sef_post_tab_third_button = get_field('sef_post_tab_third_button');

$sef_post_tab_blog_button_text = get_field('blog_button_text');
$sef_post_tab_event_button_text = get_field('event_button_text');
$sef_post_tab_media_button_text = get_field('media_button_text');
$sef_post_tab_case_studies_button_text = get_field('case_studies_button_text');
$sef_post_tab_background = get_field('sef_post_tab_background');

?>

    <!-- Blog Media starts -->
    <section class="blog-media" style="background: <?php echo $sef_post_tab_background; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <ul class="nav nav-tabs wow animate__animated animate__fadeInUp">
                <li class="nav-item nav-blog">
                  <a class="nav-link active" data-bs-toggle="tab" href="#case-studies"
                    ><?php echo $sef_post_tab_heading_one; ?></a
                  >
                </li>
                <li class="nav-item nav-event">
                  <a class="nav-link" data-bs-toggle="tab" href="#blog"
                    ><?php echo $sef_post_tab_heading_two; ?></a
                  >
                </li>
                <li class="nav-item nav-event">
                  <a class="nav-link" data-bs-toggle="tab" href="#media"
                    ><?php echo $sef_post_tab_heading_third; ?></a
                  >
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">

                <div class="tab-pane container active fade show" id="case-studies">
                  <div class="case-studies home-case-studies mt-4">

                  <?php 

                    $study_posts = get_posts(array(
                      "status" => "publish",
                      "post_type" => "study",
                      "posts_per_page" => "4",
                      "orderby"   => "DATE",
                      "order"     => "DESC"
                    ));

                    if( $study_posts ): 
                  ?>

                <?php foreach( $study_posts as $study_post ): ?>

                    <div class="media-box d-flex align-item-top" >
                          <img
                            src="<?php echo get_the_post_thumbnail_url($study_post->ID); ?>"
                            class="event-img"
                            alt="ntc img"
                          />
                          <div class="single-blog">
                            <h6 class="blog-title zilla mb-0 one-line-text">
                              <?php echo get_the_title($study_post->ID); ?>
                            </h6>
                            <p class="theme-para w-100 mb-0 three-line-text">
                            <?php echo get_the_excerpt($study_post->ID); ?>
                            </p>
                            <a href="<?php echo get_the_permalink($study_post->ID); ?>" target="_blank" class="btn btn-learn">
                              <?php echo $sef_post_tab_case_studies_button_text; ?>
                              <i class="bi bi-arrow-right"></i>
                            </a>
                         </div>
                        </div>


                        <?php endforeach; ?>
    
                  <?php wp_reset_postdata(); ?>

                  <?php endif; ?>
                  <div class="d-md-flex gap-4 mt-2">
                    <a href="<?php echo $sef_post_tab_one_button['url']; ?>" class="btn secondary-btn"> 
                      <?php echo $sef_post_tab_one_button['title']; ?>
                    </a>

                  </div>
                    
                  </div>
                </div>

                <div class="tab-pane container fade" id="blog">
                  <div class="blogs">
                    <div class="row">

                      <?php 

                    $blog_posts = get_posts(array(
                      "status" => "publish",
                      "post_type" => "post",
                      "category_name" => "blog",
                      "posts_per_page" => "4",
                      "orderby"   => "DATE",
                      "order"     => "DESC"
                   ));

                    if( $blog_posts ): ?>
    
                   <?php foreach( $blog_posts as $blog_post ): 
        
                      //setup_postdata( $case_study 
        
                    ?>
                      <div class="col-md-6">
                        <div
                          class="single-blog wow animate__animated animate__fadeInUp delay1"
                        >
                          <span class="blog-date"><?php echo get_the_date('d-M-Y', $blog_post->ID) ?></span>
                          <h6 class="blog-title">
                <?php echo get_the_title($blog_post->ID); ?>
                          </h6>
              
                          <p class="blog-desc"> 
                <?php echo wp_trim_words( get_post_field('post_content', $blog_post->ID), $num_words = 32, $more = '...'); ?>
                           
                          </p>
                          <?php
                          //echo "<pre>";
                          //print_r($current_opening);
                          //print_r(get_the_ID() . 'Post ID');
                          $post_button_detail = get_field('post_button_detail', $blog_post->ID);
                        ?>
                          <?php if ($post_button_detail) { ?>
                              <a href="<?php echo $post_button_detail['url']; ?>" target="_blank" class="btn btn-learn" rel="noindex nofollow">
                                <?php echo $post_button_detail['title']; ?>
                                <i class="bi bi-arrow-right"></i>
                              </a>
                              <?php } else { ?>
                                <a href="<?php echo get_permalink($blog_post->ID); ?>" target="_blank" class="btn btn-learn">
                                <?php echo $sef_post_tab_blog_button_text; ?>
                                <i class="bi bi-arrow-right"></i>
                              </a>
                              <?php } ?>
                          
                          <!-- <a class="btn btn-learn" href="<?php echo get_permalink( $blog_post->ID ); ?>" >
                            <?php echo $sef_post_tab_blog_button_text; ?> <i class="bi bi-arrow-right"></i>
                          </a> -->
                        </div>
                      </div>
            <?php endforeach; ?>
    
                  <?php wp_reset_postdata(); ?>

                <?php endif; ?>
                      
                      
                      <div class="col-md-12 text-center mt-4 blog-redirection">
                        <a
                              href="<?php echo $sef_post_tab_two_button['url']; ?>"
                              target="_blank"
                              class="btn theme-btn wow animate__animated animate__fadeInUp delay4"
                              ><?php echo $sef_post_tab_two_button['title']; ?></a
                        >
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane container fade" id="media">
                  <div class="blogs">
                    <div class="row">
                      <div class="col-lg-6">

                        <?php 

                  $event_posts = get_posts(array(
                    'post_status' => array( 'pending', 'future' ),
                    "post_type" => "post",
              "category_name" => "event",
                    "posts_per_page" => "3",
                    "orderby"   => "DATE",
                    "order"     => "ASC"
                 ));

             
                  if( $event_posts ): ?>
    
                   <?php foreach( $event_posts as $event_post ): 
        
                      //setup_postdata( $case_study 
        
                  ?>
                        <div class="media-box d-flex align-item-top">
                          <img
                            src="<?php echo get_the_post_thumbnail_url($event_post->ID); ?>"
                            class="event-img"
                            alt="ntc img"
                          />
                          <div class="single-blog">
                            <span class="blog-date"><?php echo get_the_date('d-M-Y', $event_post->ID) ?></span>
                            <h6 class="blog-title mb-0">
                <?php echo get_the_title($event_post->ID); ?>
                            </h6>

                            <?php
                            //echo "<pre>";
                            //print_r($current_opening);
                            //print_r(get_the_ID() . 'Post ID');
                            $post_button_detail = get_field('post_button_detail', $event_post->ID);
                        ?>
                              <?php if ($post_button_detail) { ?>
                                <a href="<?php echo $post_button_detail['url']; ?>" target="_blank" class="btn btn-learn" rel="noindex nofollow">
                                  <?php echo $post_button_detail['title']; ?>
                                  <i class="bi bi-arrow-right"></i>
                                </a>
                                <?php } else { ?>
                                  <a href="<?php echo get_permalink($event_post->ID); ?>" target="_blank" class="btn btn-learn">
                                  <?php echo $sef_post_tab_event_button_text; ?>
                                  <i class="bi bi-arrow-right"></i>
                                </a>
                              <?php } ?>

                            <!-- <a href="<?php echo get_the_permalink($event_post->ID); ?>" class="btn btn-learn">
                              <?php echo $sef_post_tab_event_button_text; ?>
                              <i class="bi bi-arrow-right"></i>
                            </a> -->
                          </div>
                        </div>
            <?php endforeach; ?>
    
                  <?php wp_reset_postdata(); ?>

                  <?php endif; ?>
                        
                      </div>
                      <div class="col-lg-6 event-box">

              <?php 

              $media_posts = get_posts(array(
                
                "post_type" => "post",
                "category_name" => "news",
                "posts_per_page" => "2",
                "orderby"   => "DATE",
                "order"     => "DESC"
              ));

              
              if( $media_posts ): ?>

                <?php foreach( $media_posts as $media_post ): 

                //setup_postdata( $case_study 

            ?>
                        <div class="media-box d-flex align-item-top">
                          <img src="<?php echo get_the_post_thumbnail_url($media_post->ID); ?>" alt="ntc img" />
                          <div class="single-blog">
                            <span class="blog-date"
                              ><?php echo get_the_date('d-M-Y, g:i a', $media_post->ID) ?></span
                            >
                            <h6 class="blog-title">
                <?php echo get_the_title($media_post->ID); ?>
                            </h6>
                            <p class="blog-desc">
              <?php echo wp_trim_words( get_post_field('post_content', $media_post->ID), $num_words = 32, $more = '...'); ?>
                            </p>

                            <?php
                            //echo "<pre>";
                            //print_r($current_opening);
                            //print_r(get_the_ID() . 'Post ID');
                            $post_button_detail = get_field('post_button_detail', $media_post->ID);
                        ?>
                              <?php if ($post_button_detail) { ?>
                                <a href="<?php echo $post_button_detail['url']; ?>" target="_blank" class="btn btn-learn" rel="noindex nofollow">
                                  <?php echo $post_button_detail['title']; ?>
                                  <i class="bi bi-arrow-right"></i>
                                </a>
                                <?php } else { ?>
                                  <a href="<?php echo get_permalink($media_post->ID); ?>" target="_blank" class="btn btn-learn">
                                  <?php echo $sef_post_tab_media_button_text; ?>
                                  <i class="bi bi-arrow-right"></i>
                                </a>
                              <?php } ?>
                              
                            <!-- <a href="<?php echo get_the_permalink($media_post->ID); ?>" class="btn btn-learn">
                              <?php echo $sef_post_tab_media_button_text; ?>
                              <i class="bi bi-arrow-right"></i>
                            </a> -->
                          </div>
                        </div>
            <?php endforeach; ?>
    
                  <?php wp_reset_postdata(); ?>

                  <?php endif; ?>
                        
                      </div>

                      <div class="col-md-12 text-center mt-4">
                        <a href="<?php echo $sef_post_tab_third_button['url']; ?>" class="btn theme-btn">
                          <?php echo $sef_post_tab_third_button['title']; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>


                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>