<?php

/**
* Layout of sef eBooks with AJAX Search and Filter.
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

$post_per_page = get_field('post_per_page') ? get_field('post_per_page') : 6;

?>

<!-- News start -->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> blog-media">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">

          <!-- Search and Filter UI -->
          <div class="ebook-search-filter align-center d-flex ebook-search-filter justify-content-between">
            <div class="d-flex">
              <select id="ebook-category-filter" class="form-control">
                <option value="">All Categories</option>
                <?php
                $categories = get_terms('eBooks-category');
                foreach ($categories as $category) {
                  echo '<option value="' . esc_attr($category->term_id) . '" data-slug="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
                }
                ?>
            </select>

              <button id="clear-filters" class="btn theme-btn">Clear Filter</button>
            </div>
            <div class="d-flex">
              <input type="text" id="ebook-search-input" class="form-control" placeholder="Search...">
            </div>
          </div>

          <!-- eBook Results -->
          <div id="ebook-results" class="col-lg-12">
            <div class="row">
              <!-- AJAX results will be loaded here -->
            </div>
          </div>

          <!-- Pagination will be injected by AJAX -->
          <div id="ebook-pagination" class="col-lg-12">
            <!-- Pagination links will be inserted here -->
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<script>

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