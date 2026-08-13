<?php

/**
* Layout of sef eBooks.
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

$post_per_page = get_field('post_per_page');

?>

<!-- News start -->
    <!-- Blog Media starts -->
  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> blog-media">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="row">

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane container active fade show" id="news">
                  <div class="blogs">
                    <div class="row">
                      <div class="col-lg-12">
                        
              <?php
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              $args = array(
                'post_type' => 'ebooks',
                'posts_per_page' => $post_per_page,
                'paged' => $paged
              );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
              ?>
                <div class="media-box d-flex align-item-top wow animate__animated animate__fadeInUp delay1" >
                  <img
                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                    class="event-img"
                    alt="ntc img"
                  />
                  <div class="single-blog">
                    <h6 class="blog-title zilla mb-0 one-line-text">
                      <?php echo get_the_title(); ?>
                    </h6>
                    <p class="theme-para w-100 mb-0 three-line-text">
                    <?php echo wp_trim_words( get_post_field('post_content'), $num_words = 32, $more = '...'); ?>
                    </p>
                    <?php
                      //echo "<pre>";
                      //print_r($current_opening);
                      //print_r(get_the_ID() . 'Post ID');
                      $post_button_detail = get_field('post_button_detail', get_the_ID());
                    ?>
                    <?php if (!empty($post_button_detail)) { ?>
                    <a href="<?php echo $post_button_detail['url']; ?>" target="_blank" class="btn btn-learn">
                      <?php echo $post_button_detail['title']; ?>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                    <?php } ?>
                  </div>
                </div>
              <?php
              endwhile;
              ?>
              <div class="pagination">
                <?php
                $big = 999999999;
                echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $loop->max_num_pages,
                  'prev_text' => '&laquo;',
                  'next_text' => '&raquo;'
                ) );
              ?>
              </div>
            <?php wp_reset_postdata(); ?>
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