<?php

/**
* Layout of Blog Detail with Multiple Authors.
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

// Fetch the blog details
$blog_id = get_the_ID();
$key_takeaways = get_field('key_takeaways', $blog_id);
$conclusion_content = get_field('conclusion_content', $blog_id);
$social_content = get_field('social_content', $blog_id);
$social_title = get_field('social_title', $blog_id);
$blog_title = get_the_title();
$blog_excerpt = get_the_excerpt();
$blog_thumbnail = get_the_post_thumbnail_url($blog_id);
$blog_permalink = get_permalink($blog_id);
$blog_date = get_the_date('F j, Y', $blog_id);
$blog_categories = get_the_terms($blog_id, 'blog-category');
$blog_author = get_the_terms($blog_id, 'blog-author');
$social_content = str_replace('https://www.networktocode.com/careers/', '/company/your-opportunities/', $social_content);
// Fetch multiple authors for the current post
// $authors = get_multiple_authors();

// Fetch recent posts
$recent_posts_query = new WP_Query(array(
    'posts_per_page' => 5,
    'post_status'    => 'publish',
    'post_type'      => 'blog',
    'orderby'       => 'date',
    'order'         => 'DESC',
    'post__not_in'   => array( get_the_ID() ),
));

?>

<!-- Blog Overview Section -->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> training-faq blog-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-detail">
                    <?php //if (!empty($blog_title)) { ?>
                        <!-- <h2 class="post_title"><?php //echo $blog_title; ?></h2> -->
                    <?php //} ?>

                    <?php if ($key_takeaways) { ?>
                        <div class="key_section">
                            <h6 class="key_title">Key Takeaways</h6>
                            <ul class="theme-ul">
                                <?php foreach ($key_takeaways as $takeaway) {            
                                    $key_takeaway = $takeaway['key_takeaway'];  
                                    ?>
                                    <?php if (!empty($key_takeaway)) { ?>
                                        <li><?php echo $key_takeaway; ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                    
                    <div class="blog_inner_detail">
                        <?php echo '<InnerBlocks />'; ?>
                    </div>
                </div>
              
                
                <?php if (!empty($conclusion_content)) { ?>
                    <hr />
                    <div class="conclusion_section">
                        <h6 class="conclusion_title">Conclusion</h6>
                        <?php echo $conclusion_content; ?>
                    </div>
                <?php } ?>
                
                
                <hr />
                <div class="tag_section">
                    <h6 class="tag_title">Tags :</h6>
                    <div class="tag_wrap">
                    <?php
                    // Check if the post has categories
                    if (!empty($blog_categories) && !is_wp_error($blog_categories)) {
                        foreach ($blog_categories as $category) {
                            $category_link = esc_url(add_query_arg('tag', urlencode($category->slug), get_permalink(5121)));
                            //$category_link = get_term_link($category);
                            if (!is_wp_error($category_link)) {
                                echo '<a href="' . $category_link . '" class="category-link">' . esc_html($category->name) . '</a> ';
                                // echo '<p class="category-link">' . esc_html($category->name) . '</p> ';
                            }
                        }
                    } else {
                        echo 'No blog categories assigned to this post.';
                    }
                    ?>
                    </div>
                </div>

                <div class="hidden-authors" style="display: none">
                  <?php foreach ($blog_author as $key => $author) {
                    echo '<p>'.$author->name.'</p>';
                    //print_r($author->name);
                  } ?>
                </div>
                
                <hr />
                <div class="share_section">
                    <?php if (!empty($social_content)) { ?>
                        <?php echo $social_content; ?>
                    <?php } ?>
                    <?php if (!empty($social_title)) { ?>
                        <h6 class="share_title"><?php echo $social_title; ?></h6>
                    <?php } ?>
                    
                    <div class="social-share-buttons">
                        <?php 
                        // Sharing URLs for social media
                        $share_url = urlencode(get_permalink());
                        $share_title = urlencode(get_the_title());

                        // Social media share links
                        $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $share_url;
                        $twitter_url = 'https://twitter.com/intent/tweet?text=' . $share_title . '&url=' . $share_url;
                        $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $share_url . '&title=' . $share_title;
                        $whatsapp_url = 'https://api.whatsapp.com/send?text=' . $share_title . '%20' . $share_url;
                        ?>
                        <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" class="social-share-button facebook">
                            <img src="https://net2codestg.wpengine.com/wp-content/uploads/2024/09/facebook.svg" alt="Share on Facebook" />
                        </a>
                        <a href="<?php echo esc_url($twitter_url); ?>" target="_blank" class="social-share-button twitter">
                            <img src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/twitter.svg" alt="Share on Twitter" />
                        </a>
                        <a href="<?php echo esc_url($linkedin_url); ?>" target="_blank" class="social-share-button linkedin">
                            <img src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/linkedin.svg" alt="Share on LinkedIn" />
                        </a>
                        <a href="<?php echo esc_url($whatsapp_url); ?>" target="_blank" class="social-share-button whatsapp">
                            <img src="https://net2codestg.wpengine.com/wp-content/uploads/2024/09/whatsapp.svg" alt="Share on WhatsApp" />
                        </a>
                    </div>
                </div>
            </div>
          
            <!-- Sidebar with Recent Posts -->
            <div class="col-lg-4">
                <div class="sidebar sticky-sidebar">
                    <div class="toc-card-body">
                      <h5 class="card-title">
                        <span class="title-text">Contents</span>
                        <span class="mobile-toc-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
                          <path id="Vector 31" d="M1 1.5L5.5 5L1 8.5" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </span>
                      </h5>
                      <div class="title-list noListStyle">
                          <ul></ul>
                      </div>
                      <div id="toc" class="noListStyle"></div>
                    </div>
                    <div class="recent-post">
                        <h5>Recent Posts</h5>
                        <div class="recent-post-list">
                            <?php if ($recent_posts_query->have_posts()) : ?>
                                <?php while ($recent_posts_query->have_posts()) : $recent_posts_query->the_post(); ?>
                                    <div class="recent-post-card">
                                        <h6 class="date"><?php echo esc_html(get_the_date('F j, Y')); ?></h6>
                                        <a class="recent-post-button" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <li>No recent posts found.</li>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-comments">
  <div class="container">
    <?php comments_template(); ?>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
/*$(window).on('load',function(){
  var $sidebarList = $('#toc');
  var $currentUl = null;

  // Assign unique IDs to each h5 and h6 element
  $('.blog_inner_detail h2').each(function(index){
      $(this).attr('id', 'title-'+(index + 1));
  });
  $('.blog_inner_detail h3').each(function(index){
      $(this).attr('id', 'sub_title-'+(index + 1));
  });

  // Generate sidebar list
  $('.blog_inner_detail').children('h2, h3').each(function(){
    if ($(this).is('h2')) {
          $currentUl = $('<ul></ul>');
          $sidebarList.append(
              $('<li></li>').text($(this).text()).attr('id', 'nav-' + $(this).attr('id')).data('target', $(this).attr('id')).append($currentUl)
          );
    } else if ($(this).is('h3') && $currentUl) {
          $currentUl.append(
              $('<li></li>').text($(this).text()).attr('id', 'nav-' + $(this).attr('id')).data('target', $(this).attr('id'))
          );
      }
  });

  $('#toc >li').wrapAll("<ul></ul>");

  $('#toc > ul > li').each(function(){
    if($(this).find('ul').find('li').length == 0){
      $(this).find('ul').remove();
    }
    if($(this).find('ul').length){
      $(this).closest('li').addClass('has-sub-child');
    }
    
  });

  var stickyHeaderHeight = $('header').outerHeight();
  var isScrolling = false; 

  $('#toc li.has-sub-child').each(function(){
    $(this).append('<span class="list-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none"><path id="Vector 31" d="M1 1.5L5.5 5L1 8.5" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>');
  });

   // Handle scroll event
  $(window).on('scroll', function() {
      if (isScrolling) return; // If scrolling animation is in progress, do nothing

      var scrollTop = $(window).scrollTop();
      $('.blog_inner_detail').children('h2, h3').each(function(){
          var $this = $(this);
          var offsetTop = $this.offset().top - stickyHeaderHeight;
          if (scrollTop >= offsetTop) {
              $('#toc li').removeClass('active');
              $('#toc #nav-' + $this.attr('id')).addClass('active');
          }

      });

      $('#toc li.has-sub-child').each(function(){
        if($(this).hasClass('active') || $(this).find('ul li').hasClass('active')){
          $(this).addClass('sub-list-open');
          $(this).find('ul').slideDown();
        }else{
          $(this).removeClass('sub-list-open');
          $(this).find('ul').slideUp();
        }
      });

      var activeText = $('.title-list li.active').contents().not($('.title-list li.active').children()).text().trim();
      
        
          if($('.title-list li').hasClass('active')){
            if($('.toc-card-body').hasClass('sticky-bar')){
            $('.card-title .title-text').text(activeText);
          }else{
            $('.card-title .title-text').text('Contents');
          }
        }else{
            // $('.toc-card-body').hide();
          }
      

  });

  // Handle sidebar click event for smooth scrolling
  $(document).on('click', '#toc li', function(e) {
    e.stopPropagation(); // Prevent event from bubbling up
    $('#toc li').removeClass('active');
    $(this).addClass('active');
    var targetId = $(this).data('target');
    var $targetElement = $('#' + targetId);
    if ($targetElement.length) {
        isScrolling = true; // Set flag to true during animation
        $('html, body').animate({
            scrollTop: $targetElement.offset().top - stickyHeaderHeight
        }, 500, function() {
            isScrolling = false; // Reset flag after animation completes
        });
    }
  });

  if ($(window).width() < 768) {

    var mobile_list = $('#toc').html();
    $('.sidebar .title-list').html(mobile_list);
    $('.toc-card-body').on('click',function(){
      $(this).find('.title-list').slideToggle();
    });

    var sticky_head = $('header').outerHeight();
    if($('.toc-card-body').hasClass('.sticky-bar')){
      var sticky_side_bar = $('.toc-card-body').outerHeight();
    }else{
      var sticky_side_bar = $('.toc-card-body').outerHeight()+65;
    }
    var mobile_scroll_height = sticky_head + sticky_side_bar;
    $(document).on('click', '.title-list li', function(e) {
      e.stopPropagation(); // Prevent the event from bubbling up to parent elements

      // Log the text of the clicked li, excluding its children
      const clickedText = $(this).contents().not($(this).children()).text().trim();
      $('.title-list li').removeClass('active');
      $(this).addClass('active');
      $('.card-title .title-text').text(clickedText);
      
      
      
      $('.toc-card-body .title-list').slideUp();
      // Scroll to the target heading
      const targetId = $(this).attr('id').replace('nav-', ''); // Assuming target heading ID is the same as li ID without 'nav-' prefix
      const $target = $('#' + targetId);

      if ($target.length) {
        setTimeout(function(){
          $('html, body').animate({
              scrollTop: $target.offset().top - mobile_scroll_height
          }, 1000); // 1000 milliseconds for smooth scrolling
        },500);
      }
    });

    var stickyTop = $('.toc-card-body').offset().top;
    stickyTop = stickyTop - sticky_head;

    $(window).on( 'scroll', function(){
        if ($(window).scrollTop() >= stickyTop) {
            $('.toc-card-body').addClass('sticky-bar');
        } else {
          $('.toc-card-body').removeClass('sticky-bar');
        }
    });

}



}); */




</script>

<!-- Sticky Sidebar CSS -->
<style>
  .sticky-sidebar {
    position: -webkit-sticky;
    position: sticky;
    top: 100px; /* Adjust this value to control how far from the top the sidebar sticks */
    height: auto;
  }

  .sticky-sidebar .toc {
    margin-bottom: 20px;
  }

  /* Add additional styles for the sidebar and TOC */
  .sidebar .toc ul {
    list-style-type: none;
    padding: 0;
  }

  .sidebar .toc ul li {
    margin-bottom: 10px;
  }

  .sidebar .toc ul ul.sub-list {
    padding-left: 20px;
    display: none;
  }

  .sidebar .toc ul li a {
    text-decoration: none;
    color: #007bff;
  }

  .sidebar .toc ul li a:hover {
    text-decoration: underline;
  }

  .sidebar .toc ul li:hover ul.sub-list {
    display: block;
  }

  .sidebar .toc ul ul {
    margin-top: 0.5rem;
    }
    .sidebar .toc ul li{cursor:pointer;}
    .sidebar .toc ul li.active {color:#e07808;}

  /* Optional: Responsive adjustments */
  @media (max-width: 768px) {
    .sticky-sidebar {
      position: relative;
      top: auto;
    }
  }
</style>