<?php
/**
* Layout of sef Meetups.
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
?>


<section class="blog-media">
    <div class="container">
       <div class="row">
        <div class="col-lg-10 offset-lg-1">


    <div class="blog-listing">
    <div class="container">
        <?php
            $category = null;
            if (isset($_GET['category']) && $_GET['category']) {
                $category = sanitize_text_field($_GET['category']);
            }

            $args = [
                'taxonomy' => 'category',
                'include' => [46, 47],
                'hide_empty' => false,
                //'parent' => 0,
            ];
            $terms = get_terms($args);
        ?>
        <?php if (!empty($terms)) : ?>  
            <div class="posts-filter-bar" style="margin-bottom: 2rem;">
                <div class="blank_div" id="scroll_down"></div>
                <ul class="posts-filter text-center">
                    <?php foreach ($terms as $term) : ?>
                        <li id="<?php echo $term->slug; ?>" class="<?php if ( $term->slug == 'past-meetups') { ?>past-active<?php } else if( $term->slug == 'upcoming-meetups'){ ?>upcoming-active<?php } ?>">
                            <a href="/resources/meetups/?category=<?php echo $term->slug; ?>#scroll_down">
                                <?php echo $term->name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    
                </ul>   
            </div>
        <?php endif; ?>
        <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 5,
                'post_status' => array('publish', 'future'),

                'paged' => $paged,
                'tax_query' => [
                    [
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => [
                            //'event',
                            'past-meetups',
                            'upcoming-meetups'
                        ]
                    ]
                ],
            ];
            if ($category) {
                $args['tax_query'] = [
                    [
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => $category,
                    ]
                ];
            }
            $wp_query = new WP_Query($args);
        ?>
        <?php if ( $wp_query->have_posts() ) : ?>
            <div class="letest-post-section" style="padding-top: 0; padding-bottom: 0;">

                <div class="row">
                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<?php
                      //echo "<pre>";
                      //print_r($current_opening);
                      //print_r(get_the_ID() . 'Post ID');
                      $post_button_detail = get_field('post_button_detail', get_the_ID());
                    ?>
                    <div class="col-md-12">
                        <div class="latest-post-box">
                                <?php if ( has_post_thumbnail() ) : ?>  
                                 <figure class="feature-img">
                                    <a href="<?php echo $post_button_detail['url']; ?>" target="_blank" title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </figure>  
                            <?php endif; ?>
                            <div class="latest-post-content">
                             <a href="<?php echo $post_button_detail['url']; ?>" target="_blank"><h3 class="h3"><?php the_title(); ?></h3></a>   
                             <div class="lp-short-desc">
                                <?php 
                                    $content = get_the_content();
                                    $content = wp_trim_words($content, 21, '');
                                ?>
                                <?php echo apply_filters('the_content',$content); ?>
                             </div>
							 <span class="blog-date"><i class="bi bi-calendar3"></i> <?php echo get_the_date('d-M-Y', get_the_ID()) ?></span>
                             <div class="latest-post-footer">
                               <a href="<?php echo $post_button_detail['url']; ?>" target="_blank" class="btn btn-learn"><?php echo $post_button_detail['title']; ?> <i class="bi bi-arrow-right"></i></a>
                             </div>        
                       </div>       
                   </div> 
               </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>

            <div class="pagination">
        <div class="container">
          
            <div class="pagination">
                  <div class="container">
                    
                      <?php $big = 999999999; // need an unlikely integer

                        $paginate = paginate_links([
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages
                        ]);

                        if ($paginate) {
                            echo '<div class="site-paginate">' . $paginate . '</div>';
                        } ?>
                                    
                  </div>
              </div>
            
        </div>
    </div>

        <?php else: ?>
            <div class="alert alert-info text-center" style="margin-bottom: 2rem;">
                No posts matched your search criteria.
            </div>
        <?php endif; ?>
    </div>
</div>

  </div>
  </div>
</div>
</section>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">

 $("document").ready(function() {
    $(".posts-filter li:first-child a ").trigger('click');
    $(".posts-filter li:first-child a ").addClass('active');
    $('.posts-filter li a').on("click", function(e) {
      

      $(this).parent().siblings().removeClass("active");
    });


});

function getUrlParameter(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
    var qsp = 'game',
        para = getUrlParameter(qsp);



 $(function(){
    var current = window.location.href;
    var splitData = current.split("?")
    console.log(splitData[1]?.includes("upcoming-meetups"));
    if(splitData[1]?.includes("upcoming-meetups")){ 
      $(".posts-filter li.past-active a ").removeClass('active')
     $(".posts-filter li.upcoming-active a ").addClass('active')
   }
          if(splitData[1]?.includes("past-meetups")){ 
                 $(".posts-filter li.upcoming-active a ").removeClass('active')

           $(".posts-filter li.past-active a ").addClass('active')
         }

    


})
</script>