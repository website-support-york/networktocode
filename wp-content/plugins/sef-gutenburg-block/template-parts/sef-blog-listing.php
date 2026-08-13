<?php

/**
* Layout of Sef Blog Listing.
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

global $wpdb;

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/isotope.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<?php if( $apps_filter == 'yes' ) { ?> <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.js"></script> <?php } ?>


<!-- Search & filter section -->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> apps-solition pt-2 blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 apps-lft">
                <div class="filter-box">
                    <!-- <h6>Search</h6> -->
                    <input type="text" id="app-search" class="form-control" placeholder="Search" />
                </div>

                <!-- Author Filter -->
                <div class="filter-box author-box">
                    <h6>Author</h6>
                    <div id="author-filters" class="filters-button-group checkbox-list">
                        <?php
                        // Get all authors with published posts
                        // $authors = get_users(array(
                        //     'who' => 'authors',
                        //     'has_published_posts' => array('blog'),
                        // ));
                        $authors = get_terms(array(
                            'taxonomy' => 'blog-author',
                            'hide_empty' => true,
                        ));
                        foreach ($authors as $author) : ?>
                            <button class="button author-filter" data-author="<?php echo esc_attr($author->slug); ?>">
                                <?php echo esc_html($author->name); ?> (<?php echo esc_html($author->count); ?>)
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
                

              <!-- Category Filter -->
              <div class="filter-box">
                    <h6>Categories</h6>
                    <div id="category-filters" class="filters-button-group checkbox-list">
                        <?php
                        // Get all blog categories
                        $categories = get_terms(array(
                            'taxonomy' => 'blog-category',
                            'hide_empty' => true,
                        ));
                        // Get the selected category from the URL parameter
                        $selected_tag = isset($_GET['tag']) ? sanitize_text_field($_GET['tag']) : '';

                        foreach ($categories as $category) : 
                        
                        // Check if this category matches the one in the URL and add the 'is-checked' class
                        $is_checked = ($selected_tag === $category->slug) ? 'is-checked' : '';

                        ?>
                            <button class="button category-filter" data-category="<?php echo esc_attr($category->slug); ?>">
                                <?php echo esc_html($category->name); ?> (<?php echo esc_html($category->count); ?>)
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Year & Month Filter -->
                <div class="filter-box">
                  <h6>Post Date</h6>
                  <div id="year-filters" class="filters-button-group checkbox-list">
                      <?php
                      // Get posts by years
                      $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_type = 'blog' AND post_status = 'publish' ORDER BY post_date DESC");
                        

                      foreach ($years as $year) : 
                        $args = array('post_type' => 'blog','posts_per_page' => -1,'date_query' => array(array('year'  => $year),),);
                        $result = new WP_Query($args);
                        $count = $result->found_posts;
                        ?>
                          <div class="year-filter">
                              <button class="button year-button" data-year="<?php echo esc_attr($year); ?>"><?php echo esc_html($year); ?> (<?php echo esc_html($count); ?>)</button>
                              <select class="month-dropdown" style="display:none;" data-year="<?php echo esc_attr($year); ?>">
                                  <option value="">All Months</option>
                                  <?php
                                  // Get months for each year
                                  $months = $wpdb->get_results("SELECT DISTINCT MONTH(post_date) as month_num, MONTHNAME(post_date) as month_name FROM $wpdb->posts WHERE YEAR(post_date) = $year AND post_type = 'blog' AND post_status = 'publish' ORDER BY post_date DESC");
                                  foreach ($months as $month) : 
                                    $args2 = array('post_type' => 'blog','posts_per_page' => -1,'date_query' => array(array('year'  => $year,'month'  => $month->month_num,),),);
                                    $result2 = new WP_Query($args2);
                                    $count2 = $result2->found_posts;
                                    ?>
                                      <option value="<?php echo esc_attr($month->month_num); ?>"><?php echo esc_html($month->month_name); ?> (<?php echo $count2; ?>)</option>
                                  <?php endforeach; ?>
                              </select>
                          </div>
                      <?php endforeach; ?>
                  </div>
              </div>


            </div>

            <div class="col-md-9">
                <div class="app-box mb-4">
                    <h4 class="fs-24 zilla"><?php echo $apps_title; ?></h4>
                    <div class="grid row" id="app-list">
                        <!-- Filtered apps will be dynamically inserted here -->
                    </div>
                    <div class="pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>

jQuery(document).ready(function($) {

    function getUrlParams(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.getAll(param).filter(function(value) {
            return value !== null && value !== '';
        });
    }

    function getUrlParameter(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param) || false;
    }

    function setFilterParamsInUrl(authors, categories, years, months) {
        const url = new URL(window.location);
        const searchParams = url.searchParams;

        searchParams.delete('authors');
        searchParams.delete('categories');
        searchParams.delete('years');
        searchParams.delete('months');
        searchParams.delete('tag');
        searchParams.delete('author');

        authors.forEach(function(author) {
            if (author) {
                searchParams.append('authors', author);
            }
        });

        categories.forEach(function(category) {
            if (category) {
                searchParams.append('categories', category);
            }
        });

        years.forEach(function(year) {
            if (year) {
                searchParams.append('years', year);
            }
        });

        months.forEach(function(month) {
            if (month) {
                searchParams.append('months', month);
            }
        });

        window.history.replaceState({}, '', url);
    }

    //Fetch blogs from search
    function blogSearchTxt(page = 1) {
        let search = $('#app-search').val();
        jQuery('#app-list').css('opacity', '0.5');
        // Perform AJAX request
        $.ajax({
            url: ajaxurl.ajaxurl, // This should be your localized AJAX URL
            type: 'POST',
            data: {
                action: 'blog_filter_search_box',
                search: search,
                paged: page,
            },
            success: function(response) {
                jQuery('#app-list').css('opacity', '1');
                $('#app-list').html(response.html);
                $('.pagination').html(response.pagination);
            },
            error: function(response) {
                jQuery('#app-list').css('opacity', '1');
                $('#app-list').html('<p>No results found.</p>');
                $('.pagination').empty();
                console.log('Error: ', response);
            }
        });
     }

    // Fetch apps and apply filters
    function fetchFilteredApps(page = 1) {
        jQuery('#app-list').css('opacity', '0.5');
        // Get the search term
        let search = $('#app-search').val();

        // Collect selected authors
        let authors = [];
        $('.author-filter.is-checked').each(function() {
            authors.push($(this).data('author'));
        });

        // Collect selected categories
        let categories = [];
        $('.category-filter.is-checked').each(function() {
            categories.push($(this).data('category'));
        });

        // If no category is selected via the sidebar, fall back to the URL parameter tag
        if (categories.length === 0) {
            let tag = getUrlParameter('tag');
            if (tag) {
                const tagsArray = tag.split(',');
                tagsArray.forEach((singleTag) => {
                    categories.push(singleTag.trim());
                });
            }
        }

        // Collect all selected years and their corresponding months
        let years = [];
        let months = [];

        $('.year-button.is-checked').each(function() {
            let year = $(this).data('year');
            years.push(year);

            let selectedMonth = $('.year-filter select[data-year="' + year + '"]').val();
            months.push(selectedMonth || '');
        });

        setFilterParamsInUrl(authors, categories, years, months);

        // Perform AJAX request
        $.ajax({
            url: ajaxurl.ajaxurl, // This should be your localized AJAX URL
            type: 'POST',
            data: {
                action: 'filter_apps',
                search: search,
                authors: authors,
                categories: categories,
                years: years,
                months: months,
                paged: page,
            },
            success: function(response) {
                jQuery('#app-list').css('opacity', '1');
                console.log(response);
                if (response.success) {
                    $('#app-list').html(response.data.html);
                    $('.pagination').html(response.data.pagination);

                    // Attach click event to pagination links
                    $('.pagination li a').on('click', function(e) {
                        e.preventDefault();
                        let page = $(this).data('page');
                        fetchFilteredApps(page);
                    });

                } else {
                    $('#app-list').html('<p>No results found.</p>');
                    $('.pagination').empty();
                }
            },
            error: function(response) {
                jQuery('#app-list').css('opacity', '1');
                $('#app-list').html('<p>No results found.</p>');
                $('.pagination').empty();
                console.log('Error: ', response);
            }
        });
    }

    // Pagination handler
    $(document).on('click', '.filterapppage a', function(e) {
        e.preventDefault();
        let page = $(this).attr('href').split('paged=')[1];
        fetchFilteredApps(page); // Fetch apps for the clicked page
    });

    // Pagination handler --Search Box
    $(document).on('click', '.searchpage a', function(e) {
        e.preventDefault();
        let page = $(this).attr('href').split('paged=')[1];
        blogSearchTxt(page); // Fetch apps for the clicked page
    });

    const urlAuthors = getUrlParams('authors');
    const urlCategories = getUrlParams('categories');
    const urlYears = getUrlParams('years');
    const urlMonths = getUrlParams('months');

    urlAuthors.forEach(function(singleAuthor) {
        $('button[data-author="' + singleAuthor + '"]').addClass('is-checked');
    });

    urlCategories.forEach(function(singleCategory) {
        $('button[data-category="' + singleCategory + '"]').addClass('is-checked');
    });

    urlYears.forEach(function(year, index) {
        const $yearButton = $('button[data-year="' + year + '"]');
        if ($yearButton.length) {
            $yearButton.addClass('is-checked');
            const $monthSelect = $yearButton.siblings('select');
            if ($monthSelect.length) {
                $monthSelect.show();
                if (typeof urlMonths[index] !== 'undefined' && urlMonths[index] !== '') {
                    $monthSelect.val(urlMonths[index]);
                }
            }
        }
    });

    if (urlCategories.length === 0) {
        let urlTag = getUrlParameter('tag');
        if (urlTag) {
            const tagsArray = urlTag.split(',');
            tagsArray.forEach((singleTag) => {
                $('button[data-category="' + singleTag.trim() + '"]').addClass('is-checked');
            });
        }
    }

    if (urlAuthors.length === 0) {
        let urlAuthor = getUrlParameter('author');
        if (urlAuthor) {
            const tagsArray2 = urlAuthor.split(',');
            tagsArray2.forEach((singleTag) => {
                $('button[data-author="' + singleTag.trim() + '"]').addClass('is-checked');
            });
        }
    }

    // Toggle month dropdown when clicking on year button
    $('.year-button').on('click', function() {
        var $target = $(this);
        $target.toggleClass('is-checked');

        // Show/Hide the month dropdown for the selected year
        $('.month-dropdown').hide(); // Hide all dropdowns
        $target.siblings('select').toggle($target.hasClass('is-checked'));

        fetchFilteredApps(); // Fetch apps whenever the year filter is changed
    });

    // Trigger app fetch when month is selected
    $('.month-dropdown').on('change', function() {
        fetchFilteredApps(); // Fetch apps whenever a month is selected
    });

    // Handle filter button clicks for categories
    $('#category-filters').on('click', '.category-filter', function(event) {
        var $target = $(event.currentTarget);
        $target.toggleClass('is-checked'); // Toggle 'is-checked' class to allow multiple selections
        fetchFilteredApps(); // Fetch apps whenever a filter is changed
    });

    // Handle filter button clicks for authors
    $('#author-filters').on('click', 'button', function(event) {
        var $target = $(event.currentTarget);
        $target.toggleClass('is-checked');
        fetchFilteredApps(); // Fetch apps whenever a filter is changed
    });

    // Debounce function to delay execution
    function debounce(func, delay) {
        let timer;
        return function(...args) {
            clearTimeout(timer);
            timer = setTimeout(() => func.apply(this, args), delay);
        };
    }

    // Trigger search with debounce
    $('#app-search').on('keyup', debounce(function() {
        blogSearchTxt();
    }, 900)); 

    // Initial load
    fetchFilteredApps();
});


</script>

<script>
    // query parameter function to manage filters via URL
    jQuery(document).ready(function($) {

  function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  function fetchEbooks(page = 1) {
    const searchQuery = $('#ebook-search-input').val();
    const selectedCategory = $('#ebook-category-filter').val();
    const selectedSlug = $('#ebook-category-filter option:selected').attr('data-slug');

    // Update the URL with the selected category slug
    const url = new URL(window.location);
    if (selectedSlug) {
      url.searchParams.set('tag', selectedSlug);
    } else {
      url.searchParams.delete('tag');
    }
    window.history.replaceState({}, '', url);

    $.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'POST',
        data: {
            action: 'fetch_ebooks',
            search: searchQuery,
            category: selectedCategory,
            page: page,
            posts_per_page: '<?php echo $post_per_page; ?>'
        },
        success: function(response) {
            if (typeof response === 'object') {
                $('#ebook-results .row').html(response.html);
                $('#ebook-pagination').html(response.pagination);
            } else {
                console.error('Unexpected response format.');
            }
        }
    });
  }

  // Set filter if ?tag is in URL
  const urlTag = getQueryParam('tag');
  if (urlTag) {
    // Loop through dropdown and match by slug
    $('#ebook-category-filter option').each(function() {
      const termSlug = $(this).text().toLowerCase().replace(/\s+/g, '-'); // Convert to slug-like
      if (termSlug === urlTag) {
        $(this).prop('selected', true);
        return false;
      }
    });
  }

  // Trigger AJAX load initially (after setting any tag filter)
  fetchEbooks();

  // Event: search input
  $('#ebook-search-input').on('keyup', function() {
      fetchEbooks();
  });

  // Event: category filter
  $('#ebook-category-filter').on('change', function() {
      fetchEbooks();
  });

  // Event: Clear filters
  $('#clear-filters').on('click', function(e) {
    e.preventDefault();
    $('#ebook-search-input').val('');
    $('#ebook-category-filter').val('');
    fetchEbooks(1);
  });

  // Event: Pagination click
  $(document).on('click', '.ebook-pagination a.page-numbers', function(e) {
    e.preventDefault();
    const pageHref = $(this).attr('href');
    const page = pageHref.match(/paged=([0-9]+)/) ? pageHref.match(/paged=([0-9]+)/)[1] : 1;
    fetchEbooks(page);
    $('html, body').animate({
        scrollTop: $('.ebook-search-filter').offset().top
    }, 500);
  });

});
</script>