<?php
/**
* Layout of sef Webinars.
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

        <div id="horizontalTab">
            <ul class="posts-filter text-center">
                <li><a href="javascript:void(0);" class="active" data-id="tab1">Upcoming</a></li>
                <li><a href="javascript:void(0);" data-id="tab2">On-Demand</a></li>
            </ul>
            <div class="tabs-container">

                    <div class="isotope-wraper active" data-id="tab1">
                        <div class="isotope">
                    <?php 
                    /*$args = array(  
                        'post_type' => 'post',
                        'category_name'    => 'webinars',
                        'post_status' => 'future',
                        'posts_per_page' => -1, 
                        'orderby' => 'date', 
                        'order' => 'ASC',
                    );*/
                    $args = array(  
                        'post_type'      => 'post',
                        'category_name'  => 'webinars',
                        'post_status'    => array('future', 'publish'),
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'ASC',
                        'date_query'     => array(
                            array(
                                'after'     => date('Y-m-d'),
                                'inclusive' => true,
                            ),
                        ),
                    );
                    $loop = new WP_Query( $args ); ?>
                    <?php if ( $loop->have_posts() ) :?>
                    
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                      <?php
                       
                        //print_r(get_the_ID() . 'Post ID');
                        $post_button_detail = get_field('post_button_detail', get_the_ID());
                      ?>
                    
 
                        
                        <div class="latest-post-box grid-item" data-filter="">
                                <?php if ( has_post_thumbnail() ) : ?>  
                                 <figure class="feature-img">
                                        <?php the_post_thumbnail(); ?>
                                </figure>  
                            <?php endif; ?>
                            <div class="latest-post-content">
                                  <h3 class="h3"><?php the_title(); ?></h3>
                             <div class="lp-short-desc">
                                <?php 
                                    $content = get_the_content();
                                    $content = wp_trim_words($content, 35, '');
                                    
                                    $exrpt = get_the_excerpt();
                                    $exrpt = wp_trim_words($exrpt, 35, '');
                                ?>
                                <?php if(!empty($content)):?>
                                    <?php echo apply_filters('the_content',$content); ?>
                                <?php else:?>
                                    <p><?php echo $exrpt; ?></p>
                                <?php endif;?>
                            </div>
                            <span class="blog-date"><i class="bi bi-calendar3"></i> <?php echo get_the_date('d-M-Y', get_the_ID()) ?></span>
                            <div class="latest-post-footer">
                              <?php
                                // Case 1: Button details exist
                                if ($post_button_detail && !empty($post_button_detail['url'])) {

                                    $url    = $post_button_detail['url'];
                                    $title  = $post_button_detail['title'];

                                    // Set target only if URL is not #
                                    $target = ($url !== '#') ? ' target="_blank" rel="noopener nofollow"' : '';
                                    ?>
                                    
                                    <a href="<?php echo esc_url($url); ?>"<?php echo $target; ?> class="btn btn-learn">
                                        <?php echo esc_html($title); ?>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                <?php
                                // Case 2: Fallback
                                } else {

                                    $fallback_url = get_permalink();
                                    ?>
                                    
                                    <a href="<?php echo esc_url($fallback_url); ?>" target="_blank" class="btn btn-learn">
                                        Learn More
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                <?php } ?>

                           </div>        
                       </div>       
                   </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php else:?>
                        <div class="latest-post-box grid-item" data-filter="">
                            <p>There are currently no upcoming webinars.</p>
                        </div>
                    <?php endif; ?>    
                </div>
                </div>

                    <div class="isotope-wraper" data-id="tab2">
                        <div class="isotope2">
                    <?php 
                    /*$args2 = array(  
                        'post_type' => 'post',
                        'category_name'    => 'webinars',
                        'post_status' => array('publish'),
                        'posts_per_page' => -1, 
                        'orderby' => 'date', 
                        'order' => 'DESC',
                    );*/
                    $args2 = array(
                        'post_type'      => 'post',
                        'category_name'  => 'webinars',
                        'post_status'    => 'publish',
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'date_query'     => array(
                            array(
                                'before'    => current_time('Y-m-d'),
                                'inclusive' => false,
                            ),
                        ),
                    );
                    $loop2 = new WP_Query( $args2 ); ?>
                    <?php while ( $loop2->have_posts() ) : $loop2->the_post(); 
                        ?>
                      <?php
                        //echo "<pre>";
                        //print_r($current_opening);
                        //print_r(get_the_ID() . 'Post ID');
                        $post_button_detail_demand = get_field('post_button_detail', get_the_ID());
                      ?>
                        <div class="latest-post-box grid-item2" data-filter="" data-post-id="<?php echo get_the_ID(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>  
                                 <figure class="feature-img">
                                        <?php the_post_thumbnail(); ?>
                                </figure>  
                            <?php endif; ?>
                            <div class="latest-post-content">
                                  <h3 class="h3"><?php the_title(); ?></h3>
                            <div class="lp-short-desc">
                                 <?php 
                                    $content = get_the_content();
                                    $content = wp_trim_words($content, 35, '');
                                    
                                    $exrpt = get_the_excerpt();
                                    $exrpt = wp_trim_words($exrpt, 35, '');
                                ?>
                                <?php if(!empty($content)):?>
                                    <?php echo apply_filters('the_content',$content); ?>
                                <?php else:?>
                                    <p><?php echo $exrpt; ?></p>
                                <?php endif;?>
                            </div>
                            <span class="blog-date"><i class="bi bi-calendar3"></i> <?php echo get_the_date('d-M-Y', get_the_ID()) ?></span>
                            <div class="latest-post-footer">
                              
                                <?php

                                  global $post;

                                  $template_slug  = get_page_template_slug( $post->ID );
                                  $template_name  = '';

                                  if ( $template_slug ) {
                                      $templates = wp_get_theme()->get_page_templates();
                                      if ( isset( $templates[ $template_slug ] ) ) {
                                          $template_name = $templates[ $template_slug ];
                                      } else {
                                          $template_name = basename( $template_slug );
                                      }
                                  } else {
                                      $template_name = 'Default';
                                  }

                                  // Debug (optional)
                                  // echo "<pre>Template: $template_name</pre>";

                                  if ( is_array( $post_button_detail_demand ) && ! empty( $post_button_detail_demand['url'] ) ) {

                                      // Button data
                                      $url   = trim( $post_button_detail_demand['url'] );
                                      $title = ! empty( $post_button_detail_demand['title'] ) ? trim( $post_button_detail_demand['title'] ) : 'Watch On-Demand';
                                      $parsed = parse_url( $url );
                                      $slug = isset( $parsed['path'] ) ? basename( trim( $parsed['path'], '/' ) ) : '';

                                      // If template is Elementor Full Width → Watch On-Demand
                                      if ( strtolower( trim( $template_name ) ) === 'elementor full width' ) {
                                          $newslug = get_post_field( 'post_name', get_the_ID() );
                                          $slug    = $slug ? $slug : $newslug;
                                          if ($slug == 'watch') {
                                            $slug = $newslug;
                                          }
                                          $new_url = home_url( '/resources/webinars/' . $slug . '/' );

                                          //for go.network URL
                                          $targets = "_self";
                                          $host = $_SERVER['HTTP_HOST'];
                                          if (strpos($url, $host) === false || strpos($url, 'go.networktocode.com') !== false) {
                                            $new_url = $url;
                                            $targets = "_blank";
                                          }
                                          ?>
                                          <a data-url="<?php echo $host; ?>" href="<?php echo esc_url( $new_url ); ?>" class="btn btn-learn 1" rel="nofollow noopener" target="<?php echo $targets; ?>">
                                              Watch On-Demand
                                              <i class="bi bi-arrow-right"></i>
                                          </a>
                                          <?php
                                      } 
                                      // Otherwise (any other template) → Coming Soon
                                      else {
                                        if ( strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false || strpos($url, 'go.networktocode.com') !== false ) {
                                          ?>
                                          <a href="<?php echo esc_url( $url ); ?>" class="btn btn-learn 5" rel="nofollow noopener" target="_blank">
                                              Watch On-Demand
                                              <i class="bi bi-arrow-right"></i>
                                          </a>
                                          <?php
                                        } else {
                                          ?>
                                          <a href="#" class="btn btn-learn 2" rel="nofollow noopener">
                                              Video Coming Soon
                                              <i class="bi bi-arrow-right"></i>
                                          </a>
                                          <?php
                                        }
                                          
                                      }

                                  } else {
                                      // When no $post_button_detail_demand or empty URL
                                      if ( strtolower( trim( $template_name ) ) === 'default' ) {
                                          ?>
                                          <a href="#" class="btn btn-learn 4" rel="nofollow noopener">
                                              Video Coming Soon
                                              <i class="bi bi-arrow-right"></i>
                                          </a>
                                          <?php
                                      } else {
                                          // Otherwise → Watch On-Demand fallback
                                          $slug = get_post_field( 'post_name', get_the_ID() );
                                          $new_url = home_url( '/resources/webinars/' . $slug . '/' );
                                          ?>
                                          <a href="<?php echo esc_url( $new_url ); ?>" class="btn btn-learn 3" rel="nofollow noopener">
                                              Watch On-Demand
                                              <i class="bi bi-arrow-right"></i>
                                          </a>
                                          <?php
                                      }
                                  }
                                
                                ?>
                                 
                           </div>        
                       </div>       
                   </div>
                    <?php endwhile; wp_reset_postdata();?>
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

<style type="text/css">
    .isotope{widows: 100%; position: relative;}
    .isotope2{widows: 100%; position: relative;}
    .isotope-wraper{display: none;}
    .isotope-wraper.active{display: block;}
    .isotope {
display: flex;
flex-wrap: wrap;
}

.isotope2 {
display: flex;
flex-wrap: wrap;
}

.latest-post-box{
width: 100% !important;
}
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>

<script type="text/javascript">



$(document).ready( function() {

$('.posts-filter li a[data-id="tab1"]').click(function(){
  setTimeout(function() {
    var itemSelector = '.grid-item'; 
    var $container = $('.isotope').isotope({
        itemSelector: itemSelector,
        masonry: {
          columnWidth: itemSelector,
          isFitWidth: true
        }
    });
    //Ascending order
    var responsiveIsotope = [
        [480, 4],
        [720, 6]
    ];
    var itemsPerPageDefault = 10;
    var itemsPerPage = defineItemsPerPage();
    var currentNumberPages = 1;
    var currentPage = 1;
    var currentFilter = '*';
    var filterAtribute = 'data-filter';
    var pageAtribute = 'data-page';
    var patentpagerClass = 'pagination';
    var pagerClass = 'site-paginate';

    function changeFilter(selector) {
        $container.isotope({
            filter: selector
        });
    }
  function getFilterSelector() {
    var selector = itemSelector;
    if (currentFilter != '*') {
      selector += `[${filterAtribute}~="${currentFilter}"]`
    }
    return selector;
  }
    function goToPage(n) {
        currentPage = n;

    var selector = getFilterSelector();
    selector += `[${pageAtribute}="${currentPage}"]`;

        changeFilter(selector);
    }
    function defineItemsPerPage() {
        var pages = itemsPerPageDefault;

        for( var i = 0; i < responsiveIsotope.length; i++ ) {
            if( $(window).width() <= responsiveIsotope[i][0] ) {
                pages = responsiveIsotope[i][1];
                break;
            }
        }

        return pages;
    }
    function setPagination() {
        var SettingsPagesOnItems = function(){
            var itemsLength = $container.children(itemSelector).length;
            var pages = Math.ceil(itemsLength / itemsPerPage);
            var item = 1;
            var page = 1;
            var selector = getFilterSelector();
            $container.children(selector).each(function(){
                if( item > itemsPerPage ) {
                    page++;
                    item = 1;
                }
                $(this).attr(pageAtribute, page);
                item++;
            });

            currentNumberPages = page;

        }();

        var CreatePagers = function() {
            var $isotopeparentPager = ( $('.'+patentpagerClass).length == 0 ) ? $('<div class="'+patentpagerClass+' pagination1"></div>') : $('.'+patentpagerClass);
            var $isotopePager = ( $('.'+pagerClass).length == 0 ) ? $('<div class="'+pagerClass+'"></div>') : $('.'+pagerClass);
            $isotopeparentPager.html('');

            $isotopePager.html('');
            for( var i = 0; i < currentNumberPages; i++ ) {
                if(i==0){
                    var $pager = $('<a href="javascript:void(0);" class="page-numbers active" '+pageAtribute+'="1"></a>');
                    } else{
                var $pager = $('<a href="javascript:void(0);" class="page-numbers" '+pageAtribute+'="'+(i+1)+'"></a>');
                }
                    $pager.html(i+1);
                    $pager.click(function(){
                        var page = $(this).eq(0).attr(pageAtribute);
                        goToPage(page);
                    });
                $pager.appendTo($isotopePager);
                $pager.appendTo($isotopeparentPager);
            }
            $container.after($isotopePager);
            $container.after($isotopeparentPager);
        }();
    }

    setPagination();
    goToPage(1);

    //Adicionando Event de Click para as categorias
    $('.filters a').click(function(){
        var filter = $(this).attr(filterAtribute);
        currentFilter = filter;
        setPagination();
        goToPage(1);
    });
    //Evento Responsivo
    $(window).resize(function(){
        itemsPerPage = defineItemsPerPage();
        setPagination();
        goToPage(1);
    });
}, 1000);
});

$('.posts-filter li a[data-id="tab2"]').click(function(){
  setTimeout(function() {
    var itemSelector = '.grid-item2'; 
    var $container = $('.isotope2').isotope({
        itemSelector: itemSelector,
        masonry: {
          columnWidth: itemSelector,
          isFitWidth: true
        }
    });
    //Ascending order
    var responsiveIsotope = [
        [480, 4],
        [720, 6]
    ];
    var itemsPerPageDefault = 10;
    var itemsPerPage = defineItemsPerPage();
    var currentNumberPages = 1;
    var currentPage = 1;
    var currentFilter = '*';
    var filterAtribute = 'data-filter';
    var pageAtribute = 'data-page';
    var patentpagerClass = 'pagination';
    var pagerClass = 'site-paginate';

    function changeFilter(selector) {
        $container.isotope({
            filter: selector
        });
    }
  function getFilterSelector() {
    var selector = itemSelector;
    if (currentFilter != '*') {
      selector += `[${filterAtribute}~="${currentFilter}"]`
    }
    return selector;
  }
    function goToPage(n) {
        currentPage = n;

    var selector = getFilterSelector();
    selector += `[${pageAtribute}="${currentPage}"]`;

        changeFilter(selector);
    }
    function defineItemsPerPage() {
        var pages = itemsPerPageDefault;

        for( var i = 0; i < responsiveIsotope.length; i++ ) {
            if( $(window).width() <= responsiveIsotope[i][0] ) {
                pages = responsiveIsotope[i][1];
                break;
            }
        }

        return pages;
    }
    function setPagination() {
        var SettingsPagesOnItems = function(){
            var itemsLength = $container.children(itemSelector).length;
            var pages = Math.ceil(itemsLength / itemsPerPage);
            var item = 1;
            var page = 1;
            var selector = getFilterSelector();
            $container.children(selector).each(function(){
                if( item > itemsPerPage ) {
                    page++;
                    item = 1;
                }
                $(this).attr(pageAtribute, page);
                item++;
            });

            currentNumberPages = page;

        }();

        var CreatePagers = function() {
            var $isotopeparentPager = ( $('.'+patentpagerClass).length == 0 ) ? $('<div class="'+patentpagerClass+' pagination2"></div>') : $('.'+patentpagerClass);
            var $isotopePager = ( $('.'+pagerClass).length == 0 ) ? $('<div class="'+pagerClass+'"></div>') : $('.'+pagerClass);
           $isotopeparentPager.html('');

            $isotopePager.html('');
            for( var i = 0; i < currentNumberPages; i++ ) {
                if(i==0){
                    var $pager = $('<a href="javascript:void(0);" class="page-numbers active" '+pageAtribute+'="1"></a>');
                    } else{
                var $pager = $('<a href="javascript:void(0);" class="page-numbers" '+pageAtribute+'="'+(i+1)+'"></a>');
                }
                    $pager.html(i+1);
                    $pager.click(function(){
                        var page = $(this).eq(0).attr(pageAtribute);
                        goToPage(page);
                    });
                $pager.appendTo($isotopePager);
                $pager.appendTo($isotopeparentPager);
            }
            $container.after($isotopePager);
            $container.after($isotopeparentPager);
        }();
    }

    setPagination();
    goToPage(1);

    //Adicionando Event de Click para as categorias
    $('.filters a').click(function(){
        var filter = $(this).attr(filterAtribute);
        currentFilter = filter;
        setPagination();
        goToPage(1);
    });
    //Evento Responsivo
    $(window).resize(function(){
        itemsPerPage = defineItemsPerPage();
        setPagination();
        goToPage(1);
    });


}, 1000);
});

$('.posts-filter li a').click(function(){  
      $(".isotope-wraper").removeClass('active');
      $(".isotope-wraper[data-id='"+$(this).attr('data-id')+"']").addClass("active");
      $(".posts-filter li a").removeClass('active');
      $(this).parent().find("a").addClass('active');
     });
  
$(document).on('click', '.pagination1 a', function() {
    $('.pagination1 a').removeClass('active');
    $(this).addClass('active');
});

$(document).on('click', '.pagination2 a', function() {
    $('.pagination2 a').removeClass('active');
    $(this).addClass('active');
});

});


</script>