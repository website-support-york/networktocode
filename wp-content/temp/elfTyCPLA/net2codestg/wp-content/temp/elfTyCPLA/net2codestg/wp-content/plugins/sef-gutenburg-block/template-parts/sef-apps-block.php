<?php

/**
* Layout of Sef Apps & Solution.
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

$featured_app = get_field('featured_app');
$app_featured_title = get_field('app_featured_title');
$apps_featured = get_field('apps_featured');

$apps_featured_names = get_term($apps_featured);
$apps_featured_name = $apps_featured_names->slug;


$apps_title = get_field('apps_title');
$apps_per_page = get_field('apps_per_page');
$apps_filter = get_field('apps_filter');
$genres = get_field('genres');


?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/isotope.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<? if( $apps_filter == 'yes' ) { ?> <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.js"></script> <?php } ?>


<!-- Apps & solutions with sorting section -->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> apps-solition pt-5 mt-4">
      <div class="container">
        <div class="row">
        <? if( $apps_filter == 'yes' ) { ?>
          <div class="col-md-3 apps-lft">

            <div class="filter-box">
              <h6>Sorting</h6>
            <div class="button-group sort-button-group">
                <button class="btn btn-default asc-dec" data-sort-direction="asc" data-sort-value="original-order" type="button">Ascending <span aria-hidden="true" class="glyphicon glyphicon-chevron-up"></span></button>

                <!-- <button class="button" data-sort-value="name" data-sort-direction="asc">Ascending</button>
                <button class="button" data-sort-value="name" data-sort-direction="desc">Descending</button> -->
            </div>
          </div>

          <div class="filter-box">
              <h6>Author</h6>
            <div class="filters-button-group checkbox-list">
                <button class="button" data-filter=".network_auth">Network to Code</button>
                <button class="button" data-filter=".dolt">Dolt</button>
            </div>
          </div>

          <div class="filter-box">
              <h6>Categories</h6>
              <?php $args = [
                'taxonomy' => 'apps-category',
                'exclude' => [20,41,42,43],
                'hide_empty' => false,
                'parent' => 0,
            ];
            $terms = get_terms($args); ?>
            <div class="filters-button-group checkbox-list">
              <?php foreach ($terms as $term) : ?>
                <button class="button" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="filter-box">
              <h6>Initial Release</h6>
            <div class="filters-button-group checkbox-list">
                <button class="button" data-filter=".v100">1.0.0</button>
                <button class="button" data-filter=".v102">1.0.2</button>
                <button class="button" data-filter=".v110">1.1.0</button>
                <button class="button" data-filter=".v120">1.2.0</button>
                <button class="button" data-filter=".v130">1.3.0</button>
            </div>
          </div>

            <div class="filter-box">
              <h6>Categories</h6>
              <?php $args2 = [
                'taxonomy' => 'apps-category',
                'include' => [41,42,43],
                'hide_empty' => false,
                'parent' => 0,
            ];
            $terms2 = get_terms($args2); ?>
            <div class="filters-button-group checkbox-list">
              <?php foreach ($terms2 as $term2) : ?>
                <button class="button" data-filter=".<?php echo $term2->slug; ?>"><?php echo $term2->name; ?></button>
              <?php endforeach; ?>
            </div>
          </div>

          </div>
        <?php } ?>

          <div class="<? if( $apps_filter == 'no' ) { ?> col-md-12 <?php } else { ?>col-md-9 <?php } ?>">
            <? if( $featured_app == 'yes' ) { ?>
            <div class="app-box mb-4 featured-apps">
              <? if( $app_featured_title ) { ?>
              <h4 class="fs-24 zilla">
                <?php echo $app_featured_title; ?>
              </h4>
              <?php } ?>
              <div class="row gy-1">
              
                <?php 
                  $featured_apps = get_posts(array(
                  "status" => "publish",
                  "post_type" => "apps",
                  "posts_per_page" => "-1",
                  "apps-category"  => $apps_featured_name,
                  "orderby"   => "ID",
                  "order"     => "DESC"
                  ));

                  //echo "<pre> ";
                  //print_r($current_openings);
                  if( $featured_apps ):
                ?>
                <?php foreach( $featured_apps as $featured_apps ): ?>
                <?php
                  //echo "<pre>";
                  //print_r($current_opening);
                  $apps_author                    = get_field('apps_author', $featured_apps->ID);
                  $apps_initial_release_version   = get_field('apps_initial_release_version', $featured_apps->ID);
                  $apps_release_date              = get_field('apps_release_date', $featured_apps->ID);
                  $apps_support_contents          = get_field('apps_support_contents', $featured_apps->ID);
                ?>
                <div class="col-lg-4 col-md-6">
                  <div class="app-card bg_secondary">
                    <div>
                      <img
                        src="<?php echo get_the_post_thumbnail_url($featured_apps->ID); ?>"
                        alt=""
                        class="app-img"
                      />
                      <h5><?php echo get_the_title($featured_apps->ID); ?></h5>
                      <p>
                        <?php echo wp_trim_words( get_post_field('post_content', $featured_apps->ID), $num_words = 32, $more = '...'); ?>
                      </p>
                      <h6><?php echo $apps_author['label']; ?> || <?php echo $apps_release_date; ?> || <?php echo $apps_initial_release_version['label']; ?></h6>
                      <?php if( $apps_support_contents ): ?>
                      <ul>
                          <?php foreach( $apps_support_contents as $apps_support_contents ): ?>
                              <li><?php echo $apps_support_contents['label']; ?></li>
                          <?php endforeach; ?>
                      </ul>
                      <?php endif; ?>
                    </div>
                    <div>
                      <a class="btn btn-learn" href="<?php echo get_permalink( $featured_apps->ID ); ?>">
                        Learn more <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              
              </div>
            </div>
            <?php } ?>
            <div class="app-box mb-4">
              <? if( $apps_title ) { ?>
              <h4 class="fs-24 zilla">
                <?php echo $apps_title; ?>
              </h4>
              <?php } ?>
              <div class="">
              
                <?php 
                  $apps = get_posts(array(
                  "status" => "publish",
                  "post_type" => "apps",
                  "posts_per_page" => $apps_per_page,
                  "orderby"   => "ID",
                  "order"     => "ASC"
                  ));

                  //echo "<pre> ";
                  //print_r($current_openings);
                  if( $apps ):
                ?>

                <div class="grid <? if( $apps_filter == 'no' ) { ?> row <?php } ?>">
                <?php foreach( $apps as $apps ): ?>
                <?php
                  //echo "<pre>";
                  //print_r($current_opening);
                  $app_author                    = get_field('apps_author', $apps->ID);
                  $app_initial_release_version   = get_field('apps_initial_release_version', $apps->ID);
                  $app_release_date              = get_field('apps_release_date', $apps->ID);
                  $app_support_contents          = get_field('apps_support_contents', $apps->ID);
                  $terms2 = get_the_terms( $apps->ID , 'apps-category' );
                ?>
                <div class="element-item <? if( $apps_filter == 'no' ) { ?> col-lg-3 <?php } else { ?>col-lg-4 <?php } ?> col-md-6
                <?php if($app_author['value'] == "network_auth"){ ?> network_auth <?php } ?>
                <?php if($app_author['value'] == "dolt"){ ?> dolt <?php } ?>
                <?php if($app_initial_release_version['value'] == "v100"){ ?> v100 <?php } ?>
                <?php if($app_initial_release_version['value'] == "v102"){ ?> v102 <?php } ?>
                <?php if($app_initial_release_version['value'] == "v110"){ ?> v110 <?php } ?>
                <?php if($app_initial_release_version['value'] == "v120"){ ?> v120 <?php } ?>
                <?php if($app_initial_release_version['value'] == "v130"){ ?> v130 <?php } ?>
                <?php $terms = get_the_terms( $apps->ID , 'apps-category' );
                foreach( $terms as $term ) {
                echo $term->slug;
                echo " ";
                unset($term); 
              } ?>
                ">
                  <div class="app-card bg_secondary">
                    <div>
                      <img
                        src="<?php echo get_the_post_thumbnail_url($apps->ID); ?>"
                        alt=""
                        class="app-img"
                      />
                      <h5 class="name"><?php echo get_the_title($apps->ID); ?></h5>
                      <p>
                        <?php echo wp_trim_words( get_post_field('post_content', $apps->ID), $num_words = 32, $more = '...'); ?>
                      </p>
                      <? if( $genres == 'yes' ) { ?><h6><?php echo $app_author['label']; ?> || <?php echo $app_release_date; ?> || <?php echo $app_initial_release_version['label']; ?></h6><?php } ?>
                      <?php if( $app_support_contents ): ?>
                      <ul>
                          <?php foreach( $app_support_contents as $app_support_contents ): ?>
                              <li><?php echo $app_support_contents['label']; ?></li>
                          <?php endforeach; ?>
                      </ul>
                      <?php endif; ?>
                    </div>
                    <div>
                      <a class="btn btn-learn" href="<?php echo get_permalink( $apps->ID ); ?>">
                        Learn more <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>

              </div>

                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

<? if( $apps_filter == 'yes' ) { ?>

<script type="text/javascript">

  // init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name',
    //symbol: '.symbol',
    //number: '.number parseInt',
    //category: '[data-category]',
    //weight: function( itemElem ) {
      //var weight = $( itemElem ).find('.weight').text();
      //return parseFloat( weight.replace( /[\(\)]/g, '') );
    //}
  }
});

//sort
    // bind sort button click
  $('.sort-button-group').on( 'click', 'button', function() {

    /* Get the element name to sort */
    var sortValue = $(this).attr('data-sort-value');

    /* Get the sorting direction: asc||desc */
    var direction = $(this).attr('data-sort-direction');

    /* convert it to a boolean */
    var isAscending = (direction == 'asc');
    var newDirection = (isAscending) ? 'desc' : 'asc';

    if (newDirection == 'desc') {
      $('.asc-dec').html('Descending');
    }
    else{
      $('.asc-dec').html('Ascending'); 
    }

    /* pass it to isotope */
    $grid.isotope({ sortBy: sortValue, sortAscending: isAscending });

    $(this).attr('data-sort-direction', newDirection);

    var span = $(this).find('.glyphicon');
    span.toggleClass('glyphicon-chevron-up glyphicon-chevron-down');

  });

// store filter for each group
var filters = [];

// change is-checked class on buttons
$('.filters-button-group').on( 'click', 'button', function( event ) {
  var $target = $( event.currentTarget );
  $target.toggleClass('is-checked');
  var isChecked = $target.hasClass('is-checked');
  var filter = $target.attr('data-filter');
  if ( isChecked ) {
    addFilter( filter );
  } else {
    removeFilter( filter );
  }
  // filter isotope
  // group filters together, inclusive
  $grid.isotope({ filter: filters.join(',') });
});
  
function addFilter( filter ) {
  if ( filters.indexOf( filter ) == -1 ) {
    filters.push( filter );
  }
}

function removeFilter( filter ) {
  var index = filters.indexOf( filter);
  if ( index != -1 ) {
    filters.splice( index, 1 );
  }
}



// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

$( document ).ready(function() {
    $grid.isotope({ sortAscending: true });
});

</script>

<?php } ?>