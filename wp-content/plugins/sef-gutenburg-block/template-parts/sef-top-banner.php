<?php

/**
* Layout of top banner.
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
$blog_id = get_the_ID();
$banner_sub_title = get_field("banner_sub_title");
$banner_main_title = get_field("banner_main_title");
$banner_background_color = get_field("banner_background_color");
$top_banner_img1 = get_field("top_banner_img1");
$top_banner_img2 = get_field("top_banner_img2");
$show_breadcrumb = get_field("show_breadcrumb");

$blog_date = '';
$blog_author = '';
if (is_singular( 'blog' )) {
  $blog_date = get_the_date('F j, Y', $blog_id);
  $blog_author = get_the_terms($blog_id, 'blog-author');
}

// $blog_date = get_the_date('F j, Y', $blog_id);
$blog_categories = get_the_terms($blog_id, 'blog-category');

//if current page is single blog page
if ( is_singular( 'blog' ) ) {
    // Current page is a single blog post.
}

?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> leadership-title main-breadscrumb" style="background-color: <?php echo $banner_background_color; ?>">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 title-box text-center">
            <?php if(is_singular('blog')): ?>
              	<h1 class="section-title wow animate__animated animate__fadeInUp delay1"><?php the_title(); ?></h1>
            <?php else:?>
              <h1 class="section-title wow animate__animated animate__fadeInUp delay1"><?php echo $banner_main_title; ?></h1>
            <?php endif; ?>
			      <?php if( $banner_sub_title ): ?>
              <h3 class="wow animate__animated animate__fadeInUp"><?php echo $banner_sub_title; ?></h3>
            <?php endif; ?>
            <div class="author-date d-flex">
              <?php if (!empty($blog_author)) { ?>
                  <p class="author">
                      <?php
                      // Display multiple authors with comma separation
                      $author_names = array();
                      foreach ($blog_author as $author) {
                          $author_names[] = '<a style="color: #027EF7; text-decoration: none; font-weight: 500;" href="/blog/?author='.esc_attr($author->slug).'">'. esc_html($author->name) . '</a>';
                      }
                      echo implode(', ', $author_names);
                      ?>
                  </p>
              <?php } ?>
              
              <?php if (!empty($blog_date)) { ?>
                  <p class="date"><?php echo $blog_date; ?></p>
              <?php } ?>
            </div>
            <?php if( $show_breadcrumb === 'yes' ): ?>
              <div class="top-banner xx"><?php echo get_hansel_and_gretel_breadcrumbs(); ?></div>
			      <?php endif; ?>
          </div>
        </div>
      </div>
      <?php if( $top_banner_img1 ): ?>
        <img class="gt_bg wow animate__animated animate__fadeIn delay animate__slower" src="<?php echo $top_banner_img1; ?>" alt="" />
      <?php endif; ?>
      <?php if( $top_banner_img2 ): ?>
        <img class="cicle_bg wow animate__animated animate__fadeIn animate__slower" src="<?php echo $top_banner_img2; ?>" alt="" />
      <?php endif; ?>
</section>