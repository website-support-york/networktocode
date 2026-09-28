<?php
/**
 * Network To Code functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Network_To_Code
 */

if ( ! defined( '_S_VERSION' ) ) {
  // Replace the version number of the theme on each release.
  define( '_S_VERSION', '1.0.500' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function network_to_code_setup() {
  /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on Network To Code, use a find and replace
    * to change 'network-to-code' to the name of your theme in all the template files.
    */
  load_theme_textdomain( 'network-to-code', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
  add_theme_support( 'title-tag' );

  /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus(
    array(
      'menu-1' => esc_html__( 'Primary', 'network-to-code' ),
    )
  );

  /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  // Set up the WordPress core custom background feature.
  add_theme_support(
    'custom-background',
    apply_filters(
      'network_to_code_custom_background_args',
      array(
        'default-color' => 'ffffff',
        'default-image' => '',
      )
    )
  );

  // Add theme support for selective refresh for widgets.
  add_theme_support( 'customize-selective-refresh-widgets' );

  /**
   * Add support for core custom logo.
   *
   * @link https://codex.wordpress.org/Theme_Logo
   */
  add_theme_support(
    'custom-logo',
    array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    )
  );
}
add_action( 'after_setup_theme', 'network_to_code_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function network_to_code_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'network_to_code_content_width', 640 );
}
add_action( 'after_setup_theme', 'network_to_code_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function network_to_code_widgets_init() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar', 'network-to-code' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here.', 'network-to-code' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action( 'widgets_init', 'network_to_code_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function network_to_code_scripts() {

  wp_register_style( 'font-awesome-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
  wp_enqueue_style('font-awesome-min-css');

  wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), '1.1' );
  wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

  wp_register_style( 'Google-Font-Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap' );
  wp_enqueue_style('Google-Font-Roboto');

  wp_register_style( 'Google-Font-Zilla-slab', 'https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
  wp_enqueue_style('Google-Font-Zilla-slab');

  wp_register_style( 'Owl-Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
  wp_enqueue_style('Owl-Carousel');

  wp_register_style( 'Bootstrap-Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
  wp_enqueue_style('Bootstrap-Icons');

  wp_register_style( 'Animation-Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
  wp_enqueue_style('Animation-Css');

  wp_register_style( 'Jquery-Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
  wp_enqueue_style('Jquery-Ui');

  wp_register_style( 'Slick-Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
  wp_enqueue_style('Slick-Slider');

  wp_register_style( 'Bootstrap-Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
  wp_enqueue_style('Bootstrap-Css');



  wp_register_style( 'side-modal-Stylesheet', get_template_directory_uri() . '/assets/css/side-modal.css' );
  wp_enqueue_style('side-modal-Stylesheet');

  wp_register_style( 'easy-responsive-tabs', get_template_directory_uri() . '/assets/css/easy-responsive-tabs.css' );
  wp_enqueue_style('easy-responsive-tabs');

  wp_register_style( 'Ntc-Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
  wp_enqueue_style('Ntc-Stylesheet');
  
  wp_register_style( 'Ntc-Stylesheet-2', get_template_directory_uri() . '/assets/css/style-2.css?time=' . time() );
  wp_enqueue_style('Ntc-Stylesheet-2');

  wp_register_style( 'Fancy-Box', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' );
  wp_enqueue_style('Fancy-Box');
    
//   wp_enqueue_script( 'network-to-code-jquery-min', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js', array(), _S_VERSION, true );

  wp_enqueue_script( 'network-to-code-jquery-cookies-min', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', array('jquery'), _S_VERSION, true );

  wp_enqueue_script( 'network-to-code-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );

  wp_enqueue_script( 'network-to-code-owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), _S_VERSION, true );

  wp_enqueue_script( 'network-to-code-particles', 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', array(), _S_VERSION, true );

  wp_enqueue_script( 'network-to-code-stats', 'https://threejs.org/examples/js/libs/stats.min.js', array(), _S_VERSION, true );

  wp_enqueue_script( 'network-to-code-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

  wp_enqueue_script( 'network-to-code-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true );

  wp_enqueue_script( 'network-to-code-slider', get_template_directory_uri() . '/assets/js/slider.js', array(), '1.2', true );

  wp_enqueue_script( 'easy-responsive-tabs', get_template_directory_uri() . '/assets/js/easy-responsive-tabs.js', array(), _S_VERSION, true );

  //Validation JS 
  // wp_enqueue_script( 'jquery.validate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js', array(), _S_VERSION, true );
  // wp_enqueue_script( 'additional-methods.min', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js', array(), _S_VERSION, true );


  wp_enqueue_script( 'network-to-code-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.2', true );
  wp_localize_script('network-to-code-main', 'ajaxurl', array('ajaxurl' => admin_url('admin-ajax.php')));
  wp_enqueue_script( 'network-to-code-insights-pagination', get_template_directory_uri() . '/assets/js/insights-pagination.js', array( 'jquery' ), _S_VERSION, true );
  $webinar_category = get_category_by_slug( 'webinars' );
  wp_localize_script(
    'network-to-code-insights-pagination',
    'insightsPaginationConfig',
    array(
      'root' => esc_url_raw( rest_url() ),
      'nonce' => wp_create_nonce( 'wp_rest' ),
      'perPage' => 12,
      'webinarCategoryId' => $webinar_category ? (int) $webinar_category->term_id : 0,
    )
  );

  wp_enqueue_script( 'fancy-box-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), _S_VERSION, true );



  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'network_to_code_scripts' );


/*Custom Post type start*/

function network_to_code_post_type_case_study() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
'page-attributes', // post template
);

$labels = array(
'name' => _x('Case Studies', 'plural'),
'singular_name' => _x('Case Studies', 'singular'),
'menu_name' => _x('Case Studies', 'admin menu'),
'name_admin_bar' => _x('Case Studies', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Case Studies'),
'new_item' => __('New Case Studies'),
'edit_item' => __('Edit Case Studies'),
'view_item' => __('View Case Studies'),
'all_items' => __('All Case Studies'),
'search_items' => __('Search Case Studies'),
'not_found' => __('No Case studies found.'),
);

$args = array(
'supports' => $supports,
'taxonomies' => array( 'study-category' ),
'labels' => $labels,
'menu_icon' => 'dashicons-welcome-write-blog',
'public' => true,
'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'case-studies'),
'has_archive' => false,
'hierarchical' => false,
);
register_post_type('study', $args);
}
add_action('init', 'network_to_code_post_type_case_study');

/*Custom Post type end*/


/**
 * Register a 'Study Category' taxonomy for post type 'Study'.
 *
 * Register custom capabilities for taxonomies.
 *
 * @see register_post_type for registering post types.
 */
function network_to_code_taxonomy_case_study() {
  register_taxonomy( 'study-category', 'study', array(
    'label'        => __( 'Study Category', 'textdomain' ),
    'rewrite'      => array( 'slug' => 'study-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
    'hierarchical' => true,
  ) );
}
add_action( 'init', 'network_to_code_taxonomy_case_study', 0 );

function network_to_code_post_type_course() {

  $supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
    'page-attributes', // post template
  );
  
  $labels = array(
  'name' => _x('Course', 'plural'),
  'singular_name' => _x('Course', 'singular'),
  'menu_name' => _x('Course', 'admin menu'),
  'name_admin_bar' => _x('Course', 'admin bar'),
  'add_new' => _x('Add New', 'add new'),
  'add_new_item' => __('Add New Course'),
  'new_item' => __('New Course'),
  'edit_item' => __('Edit Course'),
  'view_item' => __('View Course'),
  'all_items' => __('All Course'),
  'search_items' => __('Search Course'),
  'not_found' => __('No course found.'),
  );
  
  $args = array(
  'supports' => $supports,
  'taxonomies' => array( 'course-category' ),
  'labels' => $labels,
  'menu_icon' => 'dashicons-welcome-learn-more',
  'public' => true,
    'show_in_rest' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'course'),
  'has_archive' => false,
  'hierarchical' => false,
  );
  register_post_type('course', $args);
  }
  add_action('init', 'network_to_code_post_type_course');
  
  /*Custom Course Post type end*/

  /**
 * Register a 'Course Category' taxonomy for post type 'Course'.
 *
 * Register custom capabilities for taxonomies.
 *
 * @see register_post_type for registering post types.
 */
function network_to_code_taxonomy_course() {
  register_taxonomy( 'course-category', 'course', array(
    'label'        => __( 'Course Category', 'textdomain' ),
    'rewrite'      => array( 'slug' => 'course-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
    'hierarchical' => true,
  ) );
}
add_action( 'init', 'network_to_code_taxonomy_course', 0 );


  /*Custom Team Post type start*/

function network_to_code_post_type_team() {

  $supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
  'page-attributes', // post template
  );
  
  $labels = array(
  'name' => _x('Team', 'plural'),
  'singular_name' => _x('Team', 'singular'),
  'menu_name' => _x('Team', 'admin menu'),
  'name_admin_bar' => _x('Team', 'admin bar'),
  'add_new' => _x('Add New', 'add new'),
  'add_new_item' => __('Add New Team'),
  'new_item' => __('New Team'),
  'edit_item' => __('Edit Team'),
  'view_item' => __('View Team'),
  'all_items' => __('All Team'),
  'search_items' => __('Search Team'),
  'not_found' => __('No Team found.'),
  );
  
  $args = array(
  'supports' => $supports,
  'taxonomies' => array( 'team-category' ),
  'labels' => $labels,
  'menu_icon' => 'dashicons-groups',
  'public' => true,
    'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'show_in_rest' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'team'),
  'publicly_queryable'  => false,
  'has_archive' => false,
  'hierarchical' => false,
  );
  register_post_type('team', $args);
  }
  add_action('init', 'network_to_code_post_type_team');
  
  /*Custom Team Post type end*/

/**
 * Register a 'Team Category' taxonomy for post type 'Team'.
 *
 * Register custom capabilities for taxonomies.
 *
 * @see register_post_type for registering post types.
 */
function network_to_code_taxonomy_team() {
  register_taxonomy( 'team-category', 'team', array(
    'label'        => __( 'Team Category', 'textdomain' ),
    'rewrite'      => array( 'slug' => 'team-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
    'hierarchical' => true,
  ) );
}
add_action( 'init', 'network_to_code_taxonomy_team', 0 );

  /*Custom Testimonial Post type start*/

function network_to_code_post_type_testimonial() {

  $supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
  'page-attributes' // post template
  );
  
  $labels = array(
  'name' => _x('Testimonial', 'plural'),
  'singular_name' => _x('Testimonial', 'singular'),
  'menu_name' => _x('Testimonial', 'admin menu'),
  'name_admin_bar' => _x('Testimonial', 'admin bar'),
  'add_new' => _x('Add New', 'add new'),
  'add_new_item' => __('Add New Testimonial'),
  'new_item' => __('New Testimonial'),
  'edit_item' => __('Edit Testimonial'),
  'view_item' => __('View Testimonial'),
  'all_items' => __('All Testimonial'),
  'search_items' => __('Search Testimonial'),
  'not_found' => __('No Testimonial found.'),
  );
  
  $args = array(
  'supports' => $supports,
  'taxonomies' => array( 'testimonial-category' ),
  'labels' => $labels,
  'menu_icon' => 'dashicons-editor-quote',
  'public' => true,
    'show_in_rest' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'testimonial'),
  'has_archive' => true,
  'hierarchical' => false,
  );
  register_post_type('testimonial', $args);
  }
  add_action('init', 'network_to_code_post_type_testimonial');
  
  /*Custom Testimonial Post type end*/

/**
 * Register a 'Testimonial Category' taxonomy for post type 'Testimonial'.
 *
 * Register custom capabilities for taxonomies.
 *
 * @see register_post_type for registering post types.
 */
function network_to_code_taxonomy_testimonial() {
  register_taxonomy( 'testimonial-category', 'testimonial', array(
    'label'        => __( 'Testimonial Category', 'textdomain' ),
    'rewrite'      => array( 'slug' => 'testimonial-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
    'hierarchical' => true,
  ) );
}
add_action( 'init', 'network_to_code_taxonomy_testimonial', 0 );


  /*Custom Current Openings Post type start*/

function network_to_code_post_type_current_openings() {

  $supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
    'page-attributes', // post template
  );
  
  $labels = array(
  'name' => _x('Current Openings', 'plural'),
  'singular_name' => _x('Current Openings', 'singular'),
  'menu_name' => _x('Current Openings', 'admin menu'),
  'name_admin_bar' => _x('Current Openings', 'admin bar'),
  'add_new' => _x('Add New', 'add new'),
  'add_new_item' => __('Add New Current Openings'),
  'new_item' => __('New Current Openings'),
  'edit_item' => __('Edit Current Openings'),
  'view_item' => __('View Current Openings'),
  'all_items' => __('All Current Openings'),
  'search_items' => __('Search Current Openings'),
  'not_found' => __('No Current Openings found.'),
  );
  
  $args = array(
  'supports' => $supports,
  'taxonomies' => array( 'current-openings-category' ),
  'labels' => $labels,
  'menu_icon' => 'dashicons-megaphone',
  'public' => true,
    'show_in_rest' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'current_openings'),
  'has_archive' => false,
  'hierarchical' => false,
  );
  register_post_type('current_openings', $args);
  }
  add_action('init', 'network_to_code_post_type_current_openings');
  
  /*Custom Current Openings Post type end*/

/**
 * Register a 'Current Openings Category' taxonomy for post type 'Current Openings'.
 *
 * Register custom capabilities for taxonomies.
 *
 * @see register_post_type for registering post types.
 */
function network_to_code_taxonomy_current_openings() {
  register_taxonomy( 'current-openings-category', 'current_openings', array(
    'label'        => __( 'Current Openings Category', 'textdomain' ),
    'rewrite'      => array( 'slug' => 'current-openings-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
    'hierarchical' => true,
  ) );
}
add_action( 'init', 'network_to_code_taxonomy_current_openings', 0 );


  /*Custom Apps Post type start*/

  function network_to_code_post_type_apps() {

    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    'page-attributes' // post template
    );
    
    $labels = array(
    'name' => _x('Apps', 'plural'),
    'singular_name' => _x('Apps', 'singular'),
    'menu_name' => _x('Apps', 'admin menu'),
    'name_admin_bar' => _x('Apps', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Apps'),
    'new_item' => __('New Apps'),
    'edit_item' => __('Edit Apps'),
    'view_item' => __('View Apps'),
    'all_items' => __('All Apps'),
    'search_items' => __('Search Apps'),
    'not_found' => __('No Apps found.'),
    );
    
    $args = array(
    'supports' => $supports,
    'taxonomies' => array( 'apps-category' ),
    'labels' => $labels,
    'menu_icon' => 'dashicons-cart',
    'public' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => [
        'slug' => 'nautobot/nautobot-apps',
        'with_front' => false
    ],
    'has_archive' => false,
    'hierarchical' => false,
    );
    register_post_type('apps', $args);
    }
    add_action('init', 'network_to_code_post_type_apps');
    
    /*Custom Testimonial Post type end*/
  
  /**
   * Register a 'Testimonial Category' taxonomy for post type 'Testimonial'.
   *
   * Register custom capabilities for taxonomies.
   *
   * @see register_post_type for registering post types.
   */
  function network_to_code_taxonomy_apps() {
    register_taxonomy( 'apps-category', 'apps', array(
      'label'        => __( 'Apps Category', 'textdomain' ),
      'rewrite'      => array( 'slug' => 'apps-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
      'hierarchical' => true,
    ) );
  }
  add_action( 'init', 'network_to_code_taxonomy_apps', 0 );


  /*Custom eBooks Post type start*/

  function network_to_code_post_type_ebooks() {

    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    'page-attributes' // post template
    );
    
    $labels = array(
    'name' => _x('eBooks', 'plural'),
    'singular_name' => _x('eBook', 'singular'),
    'menu_name' => _x('eBooks', 'admin menu'),
    'name_admin_bar' => _x('eBooks', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New eBook'),
    'new_item' => __('New eBook'),
    'edit_item' => __('Edit eBook'),
    'view_item' => __('View eBook'),
    'all_items' => __('All eBooks'),
    'search_items' => __('Search eBooks'),
    'not_found' => __('No eBooks found.'),
    );
    
    $args = array(
    'supports' => $supports,
    'taxonomies' => array( 'eBooks-category' ),
    'labels' => $labels,
    'menu_icon' => 'dashicons-book-alt',
    'public' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'books'),
    'has_archive' => false,
    'hierarchical' => true,
    );
    register_post_type('eBooks', $args);
    }
    add_action('init', 'network_to_code_post_type_ebooks');
    
    /*Custom eBooks Post type end*/
  
  /**
   * Register a 'eBooks Category' taxonomy for post type 'eBooks'.
   *
   * Register custom capabilities for taxonomies.
   *
   * @see register_post_type for registering post types.
   */
  function network_to_code_taxonomy_eBooks() {
    register_taxonomy( 'eBooks-category', 'eBooks', array(
      'label'        => __( 'eBooks Category', 'textdomain' ),
      'rewrite'      => array( 'slug' => 'eBooks-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
      'hierarchical' => true,
    ) );
  }
  add_action( 'init', 'network_to_code_taxonomy_eBooks', 0 );


  /*Custom Videos Post type start*/

  function network_to_code_post_type_videos() {

    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    'page-attributes' // post template
    );
    
    $labels = array(
    'name' => _x('Videos', 'plural'),
    'singular_name' => _x('Videos', 'singular'),
    'menu_name' => _x('Videos', 'admin menu'),
    'name_admin_bar' => _x('Videos', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Videos'),
    'new_item' => __('New Videos'),
    'edit_item' => __('Edit Videos'),
    'view_item' => __('View Videos'),
    'all_items' => __('All Videos'),
    'search_items' => __('Search Videos'),
    'not_found' => __('No Videos found.'),
    );
    
    $args = array(
    'supports' => $supports,
    'taxonomies' => array( 'videos-category' ),
    'labels' => $labels,
    'menu_icon' => 'dashicons-video-alt3',
    'public' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'videos'),
    'has_archive' => true,
    'hierarchical' => false,
    );
    register_post_type('videos', $args);
    }
    add_action('init', 'network_to_code_post_type_videos');
    
    /*Custom eBooks Post type end*/
  
  /**
   * Register a 'eBooks Category' taxonomy for post type 'eBooks'.
   *
   * Register custom capabilities for taxonomies.
   *
   * @see register_post_type for registering post types.
   */
  function network_to_code_taxonomy_videos() {
    register_taxonomy( 'videos-category', 'videos', array(
      'label'        => __( 'videos Category', 'textdomain' ),
      'rewrite'      => array( 'slug' => 'videos-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
      'hierarchical' => true,
    ) );
  }
  add_action( 'init', 'network_to_code_taxonomy_videos', 0 );

  /*Custom Awards Post type start*/

function network_to_code_post_type_awards() {

  $supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
  'page-attributes', // post template
  );
  
  $labels = array(
  'name' => _x('Award', 'plural'),
  'singular_name' => _x('Awards', 'singular'),
  'menu_name' => _x('Award', 'admin menu'),
  'name_admin_bar' => _x('Award', 'admin bar'),
  'add_new' => _x('Add New', 'add new'),
  'add_new_item' => __('Add New Award'),
  'new_item' => __('New Award'),
  'edit_item' => __('Edit Award'),
  'view_item' => __('View Award'),
  'all_items' => __('All Awards'),
  'search_items' => __('Search Award'),
  'not_found' => __('No Award found.'),
  );
  
  $args = array(
  'supports' => $supports,
  'taxonomies' => array( 'award-category' ),
  'labels' => $labels,
  'menu_icon' => 'dashicons-awards',
  'public' => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'show_in_rest' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'awards'),
  'has_archive' => true,
  'hierarchical' => false,
  );
  register_post_type('award', $args);
  }
  add_action('init', 'network_to_code_post_type_awards');
  
  /*Custom Award Post type end*/

/**
 * Register a 'Award Category' taxonomy for post type 'Award'.
 *
 * Register custom capabilities for taxonomies.
 *
 * @see register_post_type for registering post types.
 */
function network_to_code_taxonomy_award() {
  register_taxonomy( 'award-category', 'award', array(
    'label'        => __( 'Award Category', 'textdomain' ),
    'rewrite'      => array( 'slug' => 'award-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
    'hierarchical' => true,
  ) );
}
add_action( 'init', 'network_to_code_taxonomy_award', 0 );


  /*Custom News Post type start*/

function network_to_code_post_type_news() {

  $supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
  'page-attributes', // post template
  );
  
  $labels = array(
  'name' => _x('News', 'plural'),
  'singular_name' => _x('News', 'singular'),
  'menu_name' => _x('News', 'admin menu'),
  'name_admin_bar' => _x('News', 'admin bar'),
  'add_new' => _x('Add New', 'add new'),
  'add_new_item' => __('Add New News'),
  'new_item' => __('New News'),
  'edit_item' => __('Edit News'),
  'view_item' => __('View News'),
  'all_items' => __('All News'),
  'search_items' => __('Search News'),
  'not_found' => __('No News found.'),
  );
  
  $args = array(
  'supports' => $supports,
  'taxonomies' => array( 'news-category' ),
  'labels' => $labels,
  'menu_icon' => 'dashicons-testimonial',
  'public' => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'show_in_rest' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'news'),
  'has_archive' => true,
  'hierarchical' => false,
  );
  register_post_type('news', $args);
  }
  add_action('init', 'network_to_code_post_type_news');
  
  /*Custom News Post type end*/

/**
 * Register a 'News Category' taxonomy for post type 'News'.
 *
 * Register custom capabilities for taxonomies.
 *
 * @see register_post_type for registering post types.
 */
function network_to_code_taxonomy_news() {
  register_taxonomy( 'news-category', 'news', array(
    'label'        => __( 'News Category', 'textdomain' ),
    'rewrite'      => array( 'slug' => 'news-category' ),
    'show_admin_column' => true,
      'show_in_rest'      => true,
    'hierarchical' => true,
  ) );
}
add_action( 'init', 'network_to_code_taxonomy_news', 0 );



  /*Custom Blog Post type start*/

  function network_to_code_post_type_blog() {

    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    'page-attributes', // post template
    );
    
    $labels = array(
    'name' => _x('Blogs', 'plural'),
    'singular_name' => _x('Blog', 'singular'),
    'menu_name' => _x('Blogs', 'admin menu'),
    'name_admin_bar' => _x('Blogs', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Blog'),
    'new_item' => __('New Blog'),
    'edit_item' => __('Edit Blog'),
    'view_item' => __('View Blog'),
    'all_items' => __('All Blogs'),
    'search_items' => __('Search Blog'),
    'not_found' => __('No Blog found.'),
    );
    
    $args = array(
      'supports' => $supports,
      'taxonomies' => array( 'blog-category' ),
      'labels' => $labels,
      'menu_icon' => 'dashicons-media-document',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'show_in_rest' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'blog'),
      'has_archive' => false,
      'hierarchical' => false,
    );

    register_post_type('blog', $args);
    }
    add_action('init', 'network_to_code_post_type_blog');
    
    /*Custom Blog Post type end*/
  
  /**
   * Register a 'News Category' taxonomy for post type 'News'.
   *
   * Register custom capabilities for taxonomies.
   *
   * @see register_post_type for registering post types.
   */
  function network_to_code_taxonomy_blog() {
    register_taxonomy( 'blog-category', 'blog', array(
      'label'        => __( 'Blog Category', 'textdomain' ),
      'rewrite'      => array( 'slug' => 'blog-category' ),
      'show_admin_column' => true,
        'show_in_rest'      => true,
      'hierarchical' => true,
    ) );

    register_taxonomy( 'blog-author', 'blog', array(
      'label'        => __( 'Blog Author', 'textdomain' ),
      'rewrite'      => array( 'slug' => 'blog-author' ),
      'show_admin_column' => true,
        'show_in_rest'      => true,
      'hierarchical' => true,
    ) );
  }
  add_action( 'init', 'network_to_code_taxonomy_blog', 0 );


function enable_disqus_on_custom_post_types($post_types) {
    // Add your custom post type to the array
    $post_types[] = 'blog';
    return $post_types;
}
add_filter('disqus_allowed_post_types', 'enable_disqus_on_custom_post_types');



/*Start of Global footer setting*/

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer Settings',
        'menu_slug'     => 'footer-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

/*End of Global footer setting*/


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/inc/jetpack.php';
}


// 15-12-2022
//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

//Breadcrumb start

function get_hansel_and_gretel_breadcrumbs()
{
    // Set variables for later use
    $here_text        = __( 'You are currently here!' );
    $home_link        = home_url('/');
    $home_text        = __( 'Home' );
    $link_before      = '<span typeof="v:Breadcrumb">';
    $link_after       = '</span>';
    $link_attr        = ' rel="v:rel" property="v:title"';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = '<img src="https://networktocode.com/wp-content/uploads/2023/01/dual-arrow.svg" alt="Arrow" >  ';              // Delimiter between crumbs
    $before           = '<span class="current">'; // Tag before the current crumb
    $after            = '</span>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';
    $landing_link     = home_url('/case-studies'); // Adjust this URL as needed
    $landing_text     = __( 'Case Studies' );

    $landing_link2     = home_url('/blog'); // Adjust this URL as needed
    $landing_text2     = __( 'Blog' );

    $landing_link3     = home_url('/resource-center'); // Adjust this URL as needed
    $landing_text3     = __( 'Resource Center' );

    /** 
     * Set our own $wp_the_query variable. Do not use the global variable version due to 
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() ) 
    {
        /** 
         * Set our own $post variable. Do not use the global variable version due to 
         * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
         */
        $post_object = sanitize_post( $queried_object );

        // Set variables 
        $title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type ) 
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent ) 
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;

        if ( is_singular() && 'study' === get_post_type() ) 
          {
            $breadcrumb_trail = $post_link;
          }

        if ( is_singular() && 'blog' === get_post_type() ) 
          {
            $breadcrumb_trail = $post_link;
          }

        if ( is_singular() && 'ebooks' === get_post_type() ) 
          {
            $breadcrumb_trail = $post_link;
          }

        // Custom breadcrumb for webinars posts: Home >> Resources >> Webinars >> Post Title
        if ( 'post' === $post_type ) {
            $post_categories = get_the_category( $post_id );
            $is_webinar = false;
            
            foreach ( $post_categories as $cat ) {
                if ( 'webinars' === $cat->slug ) {
                    $is_webinar = true;
                    break;
                }
            }
            
            if ( $is_webinar ) {
                $resources_link = sprintf( $link, esc_url( home_url( '/resources' ) ), __( 'Resources', 'network-to-code' ) );
                $webinars_link = sprintf( $link, esc_url( home_url( '/resources/webinars' ) ), __( 'Webinars', 'network-to-code' ) );
                $breadcrumb_trail = $resources_link . $delimiter . $webinars_link . $delimiter . $post_link;
            }
        }
    }

    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() )
    {
        if (    is_category()
             || is_tag()
             || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            
            // Special handling for webinars category
            if ( 'category' === $taxonomy && 'webinars' === $term_object->slug ) {
                $resources_link = sprintf( $link, esc_url( home_url( '/resources' ) ), __( 'Resources', 'network-to-code' ) );
                $webinars_link = $before . __( 'Webinars', 'network-to-code' ) . $after;
                $breadcrumb_trail = $resources_link . $delimiter . $webinars_link;
            } else {
                $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
                $parent_term_string = '';

                if ( 0 !== $term_parent )
                {
                    // Get all the current term ancestors
                    $parent_term_links = [];
                    while ( $term_parent ) {
                        $term = get_term( $term_parent, $taxonomy );

                        $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                        $term_parent = $term->parent;
                    }

                    $parent_term_links  = array_reverse( $parent_term_links );
                    $parent_term_string = implode( $delimiter, $parent_term_links );
                }

                if ( $parent_term_string ) {
                    $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
                } else {
                    $breadcrumb_trail = $current_term_link;
                }
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }   

    // Handle the search page
    if ( is_search() ) {
        $breadcrumb_trail = __( 'Search query for: ' ) . $before . get_search_query() . $after;
    }

    // Handle 404's
    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }

    // Handle paged pages
    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }

    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<div class="breadcrumb">';
    // Add Landing page for "case study" post type
    if ( is_singular() && 'study' === get_post_type() ) {
      $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
      $breadcrumb_output_link .= $delimiter;
      $breadcrumb_output_link .= '<a href="' . $landing_link . '" rel="v:url" property="v:title">' . $landing_text . '</a>';
      $breadcrumb_output_link .= $delimiter;
      $breadcrumb_output_link .= $breadcrumb_trail;
    } else if( is_singular() && 'blog' === get_post_type() ){
      $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
      $breadcrumb_output_link .= $delimiter;
      $breadcrumb_output_link .= '<a href="' . $landing_link2 . '" rel="v:url" property="v:title">' . $landing_text2 . '</a>';
      $breadcrumb_output_link .= $delimiter;
      $breadcrumb_output_link .= $breadcrumb_trail;
    } else if( is_singular() && 'ebooks' === get_post_type() ){
      $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
      $breadcrumb_output_link .= $delimiter;
      $breadcrumb_output_link .= '<a href="' . $landing_link3 . '" rel="v:url" property="v:title">' . $landing_text3 . '</a>';
      $breadcrumb_output_link .= $delimiter;
      $breadcrumb_output_link .= $breadcrumb_trail;
    } else if( is_singular() && 'post' === get_post_type() ){
      // For all posts (including webinars), add home link and breadcrumb trail
      // For webinars, the breadcrumb_trail already includes "Resources >> Webinars >> Title"
      $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
      $breadcrumb_output_link .= $delimiter;
      $breadcrumb_output_link .= $breadcrumb_trail;
    }
    
    else {
      if (    is_home()
          || is_front_page()
      ) {
          // Do not show breadcrumbs on page one of home and frontpage
          if ( is_paged() ) {
              //$breadcrumb_output_link .= $here_text . $delimiter;
              $breadcrumb_output_link .= '<a href="' . $home_link . '">' . $home_text . '</a>';
              $breadcrumb_output_link .= $page_addon;
          }
      } else {
          //$breadcrumb_output_link .= $here_text . $delimiter;
          $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
          $breadcrumb_output_link .= $delimiter;
          $breadcrumb_output_link .= $breadcrumb_trail;
          $breadcrumb_output_link .= $page_addon;
      }
    }
    $breadcrumb_output_link .= '</div>';

    return $breadcrumb_output_link;
}

// Breadcrumb close

// Empty page redirection

function ntc_empty_redirection(){

  if ( get_the_content() ) {
  }
    else{
    wp_redirect( get_home_url(), 301 );
    }

}
add_action('template_redirect','ntc_empty_redirection');


add_action( 'wp_ajax_demo-pagination-load-posts-upcome', 'cvf_demo_pagination_load_posts_upcome' );
add_action( 'wp_ajax_nopriv_demo-pagination-load-posts-upcome', 'cvf_demo_pagination_load_posts_upcome' );
function cvf_demo_pagination_load_posts_upcome() { 

    global $wpdb;
    // Set default variables
    $msg = '';

    if(isset($_POST['page'])){
        // Sanitize the received page   
        $page = sanitize_text_field($_POST['page']);
        $cur_page = $page;
        $page -= 1;
        // Set the number of results to display
        $per_page = 3;
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
        $start = $page * $per_page;
        
        $all_blog_posts = new WP_Query(
            array(
                'post_type'         => 'blog',
                'post_status '      => 'publish',
                'orderby'           => 'post_date',
                'order'             => 'DESC',
                'posts_per_page'    => $per_page,
                'offset'            => $start,
                'category_name'     => 'webinars+upcoming'
            )
        );

        $count = $all_blog_posts->found_posts;

        // This is where the magic happens
        $no_of_paginations = ceil($count / $per_page);

        // Loop into all the posts
        $i = 1;
        foreach($all_blog_posts as $key => $post): 

            // Set the desired output into a variable
            $msg .= '
            <div class = "col-md-12 lp-'.$no_of_paginations.'">       
                <h2><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></h2>
                <div class="media-box d-flex align-item-top wow animate__animated animate__fadeInUp delay1" >
                    <img
                        src="' . get_the_post_thumbnail_url($post->ID) . '"
                        class="event-img"
                        alt="ntc img"
                    />
                    <div class="single-blog">
                        <h6 class="blog-title zilla mb-0 one-line-text">
                            ' . get_the_title($post->ID) . '
                        </h6>
                        <p class="theme-para w-100 mb-0 three-line-text">
                        ' . wp_trim_words( get_post_field('post_content', $post->ID), $num_words = 32, $more = '...') . '
                        </p>

                        ' . $post_button_detail = get_field('post_button_detail', get_the_ID($post->ID)) .'

                   
                          <a href=" ' . get_the_permalink($post->ID) . ' " class="btn btn-learn">
                          Read webinar
                          <i class="bi bi-arrow-right"></i>
                          </a>
                    </div>
                </div>
            </div>';

        $i++;
        endforeach;

        if ($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }

        // Pagination Buttons logic     
        $pag_container .= "
        <div class='cvf-universal-pagination'>
            <ul>";

        if ($first_btn && $cur_page > 1) {
            $pag_container .= "<li p='1' class='active'>First</li>";
        } else if ($first_btn) {
            $pag_container .= "<li p='1' class='inactive'>First</li>";
        }

        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            $pag_container .= "<li p='$pre' class='active'>Previous</li>";
        } else if ($previous_btn) {
            $pag_container .= "<li class='inactive'>Previous</li>";
        }

        for ($i = $start_loop; $i <= $end_loop; $i++) {

            if ($cur_page == $i)
                $pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
            else
                $pag_container .= "<li p='$i' class='active'>{$i}</li>";
        }

        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $pag_container .= "<li p='$nex' class='active'>Next</li>";
        } else if ($next_btn) {
            $pag_container .= "<li class='inactive'>Next</li>";
        }

        if ($last_btn && $cur_page < $no_of_paginations) {
            $pag_container .= "<li p='$no_of_paginations' class='active'>Last</li>";
        } else if ($last_btn) {
            $pag_container .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
        }

        $pag_container = $pag_container . "
            </ul>
        </div>";

        // We echo the final output
        echo 
        $msg .
        '<div class = "cvf-pagination-nav">' . $pag_container . '</div>';

    }
    // Always exit to avoid further execution
    exit();

}


add_action( 'wp_ajax_demo-pagination-load-posts', 'cvf_demo_pagination_load_posts' );
add_action( 'wp_ajax_nopriv_demo-pagination-load-posts', 'cvf_demo_pagination_load_posts' );
function cvf_demo_pagination_load_posts() { 

    global $wpdb;
    // Set default variables
    $msg = '';

    if(isset($_POST['page'])){
        // Sanitize the received page   
        $page = sanitize_text_field($_POST['page']);
        $cur_page = $page;
        $page -= 1;
        // Set the number of results to display
        $per_page = 3;
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
        $start = $page * $per_page;
        
        $all_blog_posts = new WP_Query(
            array(
                'post_type'         => 'blog',
                'post_status '      => 'publish',
                'orderby'           => 'post_date',
                'order'             => 'DESC',
                'posts_per_page'    => $per_page,
                'offset'            => $start,
                'category_name'     => 'webinars+on-demand'
            )
        );

        $count = $all_blog_posts->found_posts;

        // This is where the magic happens
        $no_of_paginations = ceil($count / $per_page);

        // Loop into all the posts
        $i = 1;
        foreach($all_blog_posts as $key => $post): 

            // Set the desired output into a variable
            $msg .= '
            <div class = "col-md-12 lp-'.$no_of_paginations.'">       
                <h2><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></h2>
                <div class="media-box d-flex align-item-top wow animate__animated animate__fadeInUp delay1" >
                    <img
                        src="' . get_the_post_thumbnail_url($post->ID) . '"
                        class="event-img"
                        alt="ntc img"
                    />
                    <div class="single-blog">
                        <h6 class="blog-title zilla mb-0 one-line-text">
                            ' . get_the_title($post->ID) . '
                        </h6>
                        <p class="theme-para w-100 mb-0 three-line-text">
                        ' . wp_trim_words( get_post_field('post_content', $post->ID), $num_words = 32, $more = '...') . '
                        </p>

                        ' . $post_button_detail = get_field('post_button_detail', get_the_ID($post->ID)) .'

                   
                          <a href=" ' . get_the_permalink($post->ID) . ' " class="btn btn-learn">
                          Read webinar
                          <i class="bi bi-arrow-right"></i>
                          </a>
                    </div>
                </div>
            </div>';

        $i++;
        endforeach;

        if ($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }

        // Pagination Buttons logic     
        $pag_container .= "
        <div class='cvf-universal-pagination'>
            <ul>";

        if ($first_btn && $cur_page > 1) {
            $pag_container .= "<li p='1' class='active'>First</li>";
        } else if ($first_btn) {
            $pag_container .= "<li p='1' class='inactive'>First</li>";
        }

        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            $pag_container .= "<li p='$pre' class='active'>Previous</li>";
        } else if ($previous_btn) {
            $pag_container .= "<li class='inactive'>Previous</li>";
        }

        for ($i = $start_loop; $i <= $end_loop; $i++) {

            if ($cur_page == $i)
                $pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
            else
                $pag_container .= "<li p='$i' class='active'>{$i}</li>";
        }

        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $pag_container .= "<li p='$nex' class='active'>Next</li>";
        } else if ($next_btn) {
            $pag_container .= "<li class='inactive'>Next</li>";
        }

        if ($last_btn && $cur_page < $no_of_paginations) {
            $pag_container .= "<li p='$no_of_paginations' class='active'>Last</li>";
        } else if ($last_btn) {
            $pag_container .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
        }

        $pag_container = $pag_container . "
            </ul>
        </div>";

        // We echo the final output
        echo 
        $msg .
        '<div class = "cvf-pagination-nav">' . $pag_container . '</div>';

    }
    // Always exit to avoid further execution
    exit();

}




function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

  

function add_title_to_nav_menu_links($atts, $item, $args) {
  $atts['data-title'] = $item->title;
  $atts['class'] = 'nav-link';
  $wrapIntoDash = str_replace(" ", "-",$item->title);
  $atts['id'] = 'sap-'.$wrapIntoDash;
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_title_to_nav_menu_links', 10, 3);


function remove_hstc_param($url) {
    $url = remove_query_arg('__hstc', $url);
    return $url;
}
add_filter('the_permalink', 'remove_hstc_param');

// function enqueue_jquery() {
//     wp_enqueue_script('jquery');
// }
// add_action('wp_enqueue_scripts', 'enqueue_jquery');

// ebook listing start

function fetch_ebooks_ajax_handler() {
    // Prepare the response array
    $response = array(
        'html' => '',
        'pagination' => ''
    );

    $paged = isset($_POST['page']) ? absint($_POST['page']) : 1;
    $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $category = isset($_POST['category']) ? absint($_POST['category']) : '';
    $posts_per_page = isset($_POST['posts_per_page']) ? absint($_POST['posts_per_page']) : 6;

    $args = array(
        'post_type' => 'ebooks',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'paged' => $paged,
        'posts_per_page' => $posts_per_page,
        's' => $search,
    );

    if ($category) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'eBooks-category',
                'field' => 'term_id',
                'terms' => $category,
            ),
        );
    }

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); 
        
        // Get the categories of the current eBook post
        $ebook_categories = get_the_terms(get_the_ID(), 'eBooks-category');
        $first_category_name = '';
        
        // Check if the post has categories and get the first one
        if (!empty($ebook_categories) && !is_wp_error($ebook_categories)) {
            $first_category_name = $ebook_categories[0]->name;
            $first_category_slugname = $ebook_categories[0]->slug;
        }
        
        $short_desc = get_the_excerpt(get_the_ID());
        ?>
          <div class="col-lg-6 col-md-12">
            <div class="media-box d-flex align-item-top wow animate__animated animate__fadeInUp delay1">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="event-img" alt="eBook Image"/>
                <div class="single-blog">
                    <?php if ($first_category_name) : ?>
                      <span class="tag <?php echo esc_attr($first_category_slugname); ?>"><?php echo esc_html($first_category_name); ?></span>
                    <?php endif; ?>
                    <h6 class="blog-title zilla mb-0"><?php the_title(); ?></h6>
                    <p class="theme-para w-100 mb-0 three-line-text"><?php if( $short_desc != '' ) { echo $short_desc; } else {echo wp_trim_words(get_the_content(), 32, '...'); }?></p>
                    <?php $post_button_detail = get_field('post_button_detail'); ?>
                    <?php if ($post_button_detail) : ?>
                        <a href="<?php echo esc_url($post_button_detail['url']); ?>" target="<?php echo $post_button_detail['target'];?>" class="btn btn-learn">
                            <?php echo esc_html($post_button_detail['title']); ?>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
          </div>
        <?php endwhile;
    else :
        echo '<p>No Result found.</p>';
    endif;

    $response['html'] = ob_get_clean();

    $pagination = paginate_links(array(
        'base' => '%_%',
        'format' => '?paged=%#%',
        'current' => $paged,
        'total' => $query->max_num_pages,
        'prev_text' => '&lsaquo; Prev',
        'next_text' => 'Next &rsaquo;',
        'type' => 'array',
        'end_size' => 2,  // Number of pages at the ends
        'mid_size' => 2,  // Number of pages around the current page
    ));
    
    if ($pagination) {
      ob_start();
      echo '<div class="ebook-pagination">';
      
      foreach ($pagination as $page_link) {
          // Ensure "..." ellipsis remains intact, while wrapping the links for styling purposes
          echo $page_link; // Remove unnecessary wrapping, just output the page link
      }
  
      echo '</div>';
      $response['pagination'] = ob_get_clean();
    }
  

    // Send JSON response
    wp_send_json($response);

    wp_die(); // Always include wp_die() at the end of AJAX callbacks
}

add_action('wp_ajax_fetch_ebooks', 'fetch_ebooks_ajax_handler');
add_action('wp_ajax_nopriv_fetch_ebooks', 'fetch_ebooks_ajax_handler');

// ebooks listing ends


function fetch_filtered_apps() {
    // Prepare response array
    $response = array(
        'html' => '',
        'pagination' => ''
    );

    // Get the filter parameters
    $category_filter = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';
    $author_filter = isset($_POST['author']) ? sanitize_text_field($_POST['author']) : '';
    $search_filter = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $paged = isset($_POST['paged']) ? absint($_POST['paged']) : 1;
    $posts_per_page = isset($_POST['posts_per_page']) ? absint($_POST['posts_per_page']) : 10;

    // Setup query arguments
    $args = array(
        'post_type' => 'blog',
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        's' => $search_filter,
    );

    // Filter by category
    if (!empty($category_filter)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'blog-category',
                'field' => 'slug',
                'terms' => $category_filter,
            ),
        );
    }

    // Filter by author
    if (!empty($author_filter)) {
        $args['meta_query'] = array(
            array(
                'key' => 'apps_author',
                'value' => $author_filter,
                'compare' => 'LIKE',
            ),
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();
            $app_id = get_the_ID();
            $app_title = get_the_title();
            $app_excerpt = get_the_excerpt();
            $app_thumbnail = get_the_post_thumbnail_url($app_id);
            $app_permalink = get_permalink($app_id);
            $app_author = get_field('apps_author', $app_id);
            $app_release_date = get_field('apps_release_date', $app_id);
            $app_version = get_field('apps_initial_release_version', $app_id);

            // Create the HTML structure for each post
            ?>
            <div class="element-item col-lg-4 col-md-6 <?php echo $app_author['value']; ?> <?php echo $app_version['value']; ?>">
                <div class="app-card bg_secondary">
                    <img src="<?php echo $app_thumbnail; ?>" alt="<?php echo $app_title; ?>" class="app-img" />
                    <h5 class="name"><?php echo $app_title; ?></h5>
                    <p><?php echo wp_trim_words($app_excerpt, 32, '...'); ?></p>
                    <div class="blog-meta">
                        <h6 class="date"><?php echo get_the_date('F j, Y'); ?></h6>
                        <h6 class="author"><?php echo get_the_author(); ?></h6>
                        <a class="btn btn-learn" href="<?php echo $app_permalink; ?>">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php
        }
        $response['html'] = ob_get_clean();
    } else {
        $response['html'] = '<p>No results found.</p>';
    }

    wp_send_json($response);
    wp_die();
}

add_action('wp_ajax_fetch_filtered_apps', 'fetch_filtered_apps');
add_action('wp_ajax_nopriv_fetch_filtered_apps', 'fetch_filtered_apps');


//Blog Layout 
function get_blogs_by_id( $atts ) {
  $atts = shortcode_atts( array(
        'post_id' => null,
    ), $atts );
  $post_id = $atts['post_id'];
  $blog_author = get_the_terms($post_id, 'blog-author');
  $output = '<div class="col-md-4 mb-3"><div class="app-card bg_secondary">';
  $output .= '<img src="'.get_the_post_thumbnail_url($post_id).'" alt="'.get_the_title($post_id).'" class="app-img" />';
  $output .= '<h5 class="name">'.get_the_title($post_id).'</h5>';
  $output .= '<p>'.wp_trim_words(get_the_excerpt($post_id), 32, '...').'</p>';
  $output .= '<div class="blog-meta"><h6 class="date">'.get_the_date('F j, Y', $post_id).'</h6>';
  if (!empty($blog_author)) {
    $author_names = array();
    foreach ($blog_author as $author) {
      $author_names[] = esc_html($author->name);
      //$author_names .=  esc_html($author->name) . ', ';
    }
    $output .= '<h6 class="author">' . implode(', ', $author_names) . '</h6>';
  }

  $output .= '<a class="btn btn-learn" href="'.get_the_permalink($post_id).'">Read more <i class="bi bi-arrow-right"></i></a></div>';
  $output .= '</div></div>';
  return $output;
  wp_reset_postdata();
}
add_shortcode( 'get_blogs_by_id', 'get_blogs_by_id' );
// blog ajax

// Register AJAX action for filtering apps
add_action('wp_ajax_filter_apps', 'filter_apps');
add_action('wp_ajax_nopriv_filter_apps', 'filter_apps');

function filter_apps() {
  // Prepare the response array
    $response = array(
        'html' => '',
        'pagination' => ''
    );

  // Get filters from the AJAX request
  $paged = isset($_POST['paged']) ? absint($_POST['paged']) : 1;
  $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
  $authors = isset($_POST['authors']) ? array_map('sanitize_text_field', $_POST['authors']) : [];
  $categories = isset($_POST['categories']) ? array_map('sanitize_text_field', $_POST['categories']) : [];
  $years = isset($_POST['years']) ? array_map('sanitize_text_field', $_POST['years']) : [];
  $months = isset($_POST['months']) ? array_map('sanitize_text_field', $_POST['months']) : [];

  // Check if the 'tag' parameter is present in the URL
  $selected_tag = isset($_GET['tag']) ? sanitize_text_field($_GET['tag']) : '';
  // $selected_tag = ['agile', 'alertmanager'];
  
  // Default query arguments
  $args = array(
      'post_type' => 'blog',
      'post_status' => 'publish',
      'posts_per_page' => 12,
      'paged' => $paged,
      's' => $search,
  );

  //   new query to resolve authors filter issue
  $tax_query = array(
      'relation' => 'AND',
  );

  if (!empty($selected_tag)) {
      $tax_query[] = array(
          'taxonomy' => 'blog-category',
          'field'    => 'slug',
          'terms'    => $selected_tag,
      );
  }

  if (!empty($authors)) {
      $tax_query[] = array(
          'taxonomy' => 'blog-author',
          'field'    => 'slug',
          'terms'    => $authors,
          'operator' => 'IN',
      );
  }

  if (!empty($categories)) {
      $tax_query[] = array(
          'taxonomy' => 'blog-category',
          'field'    => 'slug',
          'terms'    => $categories,
          'operator' => 'IN',
      );
  }

  if (count($tax_query) > 1) {
      $args['tax_query'] = $tax_query;
  }

  // If a tag is selected, filter the posts by that category
  /*if (!empty($selected_tag)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'blog-category', // Adjust the taxonomy if needed
            'field'    => 'slug',
            'terms'    => $selected_tag, // Filter by the selected tag slug
        ),
    );
  }

  // Filter by authors if any selected
  if (!empty($authors)) {
      //$args['author__in'] = $authors;
      $args['tax_query'] = array(
          array(
              'taxonomy' => 'blog-author', // Adjust the taxonomy if needed
              'field'    => 'slug',
              'terms'    => $authors, // Filter by the selected tag slug
          ),
      );
  } 
  // Filter by categories if any selected
  if (!empty($categories)) {
      $args['tax_query'] = array(
          array(
              'taxonomy' => 'blog-category',
              'field' => 'slug',
              'terms' => $categories,
              'operator' => 'IN',
          ),
      );
  }*/

  // Filter by years and months
  if (!empty($years)) {
    $year_queries = array('relation' => 'OR');

    foreach ($years as $index => $year) {
        $year_query = array(
            'year' => $year
        );

        if (!empty($months[$index])) {
            $year_query['monthnum'] = $months[$index];
        }

        $year_queries[] = $year_query;
    }

    $args['date_query'] = $year_queries;
}

  // Fetch posts using WP_Query
  $query = new WP_Query($args);

  if (!$query->have_posts()) {
      wp_send_json_error('No posts found', 400);
  } else {
      ob_start();
      while ($query->have_posts()) {
          $query->the_post();
          echo do_shortcode('[get_blogs_by_id post_id="'.get_the_ID().'"]');
          /*?>
          <div class="col-md-4 mb-3">
              <div class="app-card bg_secondary">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="app-img" />
                  <h5 class="name"><?php the_title(); ?></h5>
                  <p><?php echo wp_trim_words(get_the_excerpt(), 32, '...'); ?></p>
                  <div class="blog-meta">
                      <h6 class="date"><?php echo get_the_date('F j, Y'); ?></h6>
                      <?php
                        $blog_author = get_the_terms(get_the_ID(), 'blog-author');
                        //$authors = get_multiple_authors();
                        if (!empty($blog_author)) {
                            $author_names = array(); // Create an empty array to store author names
                            foreach ($blog_author as $author) {
                                $author_names[] = esc_html($author->name); // Add each author's name to the array
                            }
                            // Join the author names with a comma and space, and output the result
                            echo '<h6 class="author">' . implode(', ', $author_names) . '</h6>';
                        }
                      ?>
                      <!-- <h6 class="author"><?php echo get_the_author(); ?></h6> -->
                      <a class="btn btn-learn" href="<?php the_permalink(); ?>">Learn more <i class="bi bi-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <?php*/
      }

      $response['html'] = ob_get_clean();


      // Generate pagination links
      ob_start();
      $total_pages = $query->max_num_pages;
      if ($total_pages > 1) {
          // Set up the pagination arguments
          $pagination_args = array(
              'base' => @add_query_arg('paged', '%#%'),
              'format' => '',
              'current' => max(1, $paged),
              'total' => $total_pages,
              'prev_text' => __('&laquo; Previous'),
              'next_text' => __('Next &raquo;'),
              'mid_size' => 1, // Number of pagination links to show around the current page
              'end_size' => 1, // Number of pagination links at the beginning and end of pagination
              'type' => 'array', // Output pagination links as an array
          );

          $pagination_links = paginate_links($pagination_args);

          if ($pagination_links) {
              echo '<nav class="pagination">';
              foreach ($pagination_links as $link) {
                  echo '<span class="filterapppage">' . $link . '</span>';
              }
              echo '</nav>';
          }
      }

        $response['pagination'] = ob_get_clean();
        wp_send_json_success($response);
  }

  wp_reset_postdata();
  wp_die();
}

function enqueue_custom_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/assets/js/custom-ajax.js?v2', array('jquery'), null, true);

  // Localize script to pass admin-ajax URL
  wp_localize_script('custom-ajax-script', 'ajaxurl', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


//Blog Page -- Search fucnrtion to search terms from DB
function blog_filter_search_box() {
  global $wpdb;

    // Prepare the response array
    $response = array(
        'html' => '',
        'pagination' => ''
    );
    $paged = isset($_POST['paged']) ? absint($_POST['paged']) : 1;
    $search_term = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $posts_per_page = 12;
    $offset = ($paged - 1) * $posts_per_page;

    $total_sql = $wpdb->prepare("SELECT COUNT(DISTINCT p.ID) FROM {$wpdb->posts} p
    LEFT JOIN {$wpdb->term_relationships} tr ON p.ID = tr.object_id
    LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
    LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id
    WHERE p.post_type = %s
      AND p.post_status = 'publish'
      AND (
          p.post_title LIKE %s
          OR p.post_content LIKE %s
          OR p.post_date LIKE %s
          OR (
              tt.taxonomy = %s
              AND t.name LIKE %s
          )
          )",
        'blog',
        '%' . $wpdb->esc_like($search_term) . '%',
        '%' . $wpdb->esc_like($search_term) . '%',
        '%' . $wpdb->esc_like($search_term) . '%',
        'blog-author',
        '%' . $wpdb->esc_like($search_term) . '%'
    );

    $total_posts = $wpdb->get_var($total_sql); // Total matching posts
    $max_num_pages = ceil($total_posts / $posts_per_page); // Total pages

    $sql = $wpdb->prepare("SELECT DISTINCT p.* FROM {$wpdb->posts} p
        LEFT JOIN {$wpdb->term_relationships} tr ON p.ID = tr.object_id
        LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
        LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id
        WHERE p.post_type = %s AND p.post_status = 'publish'
          AND (
              p.post_title LIKE %s
              OR p.post_content LIKE %s
              OR p.post_date LIKE %s
              OR (
                  tt.taxonomy = %s
                  AND t.name LIKE %s
              )
          )
        ORDER BY p.post_date DESC
        LIMIT 12 OFFSET " . $offset, 'blog',
        '%' . $wpdb->esc_like($search_term) . '%',
        '%' . $wpdb->esc_like($search_term) . '%',
        '%' . $wpdb->esc_like($search_term) . '%',
        'blog-author',
        '%' . $wpdb->esc_like($search_term) . '%'
    );
  $results = $wpdb->get_results($sql);
  $divOutput = '';
  if (empty($results)) {
    wp_send_json_error('No posts found', 400);
  } else {
    foreach ($results as $key => $result) {
      $divOutput .= do_shortcode('[get_blogs_by_id post_id="'.$result->ID.'"]');
      //$divOutput .= get_the_title($result->ID);
    }
  }
  // $response['html'] = ob_get_clean();
  $response['html'] = $divOutput;
  $pagination_args = array(
              'base' => @add_query_arg('paged', '%#%'),
              'format' => '',
              'current' => max(1, $paged),
              'total' => $max_num_pages,
              'prev_text' => __('&laquo; Previous'),
              'next_text' => __('Next &raquo;'),
              'mid_size' => 1, // Number of pagination links to show around the current page
              'end_size' => 1, // Number of pagination links at the beginning and end of pagination
              'type' => 'array', // Output pagination links as an array
          );
  $pagination_links = paginate_links($pagination_args);
  $PageNavs = '';
  if ($pagination_links) {
    $PageNavs .= '<nav class="pagination" data-max_num_pages="'.$max_num_pages.'" data-total_posts="'.$total_posts.'">';
    foreach ($pagination_links as $link) {
      $PageNavs .= '<span class="searchpage">' . $link . '</span>';
    }
    $PageNavs .= '</nav>';
  }
  // $response['pagination'] = ob_get_clean();
  $response['pagination'] = $PageNavs;
  $response['sql'] = $sql;
  wp_send_json($response);
  wp_die();
}
add_action('wp_ajax_blog_filter_search_box', 'blog_filter_search_box');
add_action('wp_ajax_nopriv_blog_filter_search_box', 'blog_filter_search_box');

//For mobile menu >> Replacing # to javascriot:void
function replace_menu_hash_with_void_for_specific_menu($items, $args) {
        // Replace all occurrences of `href="#"` with `href="javascript:void(0)"`
    $items = str_replace('href="#"', 'href="javascript:void(0)"', $items);
    return $items;
}
add_filter('wp_nav_menu_items', 'replace_menu_hash_with_void_for_specific_menu', 10, 2);

// function preload_lcp_image() {
//     echo '<link rel="preload" href="/wp-content/uploads/2025/05/image-1.webp" as="image" type="image/webp" fetchpriority="high">';
// }
// add_action('wp_head', 'preload_lcp_image');



function display_current_year() {
  return date('Y');
}
add_shortcode('current_year', 'display_current_year');



//Add class to body for pillar pages
function add_pillar_class($classes) {
  global $post;
  $custom_class = get_field('add_body_class_', $post->ID);
  if ($custom_class) {
      $classes[] = $custom_class; // Add your custom class
  }
    return $classes;
}
add_filter('body_class', 'add_pillar_class');

add_filter( 'gform_recaptcha_disable_script', '__return_true' );


add_action( 'admin_footer', 'ntc_policy_warning_popup_admin' );
function ntc_policy_warning_popup_admin() {
    if ( ! is_admin() ) {
        return;
    }

    // Set to true temporarily to show a small debug box with the current screen ID & post info.
    $debug = false; // <-- set true while debugging screen IDs

    $screen = get_current_screen();
    if ( ! $screen ) {
        return;
    }

    // Slugs of WP Pages (post_name) you want the popup for:
    $restricted_page_slugs = array(
        'security-policy',
        'acceptable-use-policy',
        'software-lifecycle-policy',
    );

    // Known/expected admin screen IDs for custom admin pages (adjust if you find a different value)
    $restricted_screen_ids = array(
        'toplevel_page_security-policy',
        'toplevel_page_acceptable-use-policy',
        'toplevel_page_software-lifecycle-policy',
    );

    $show_popup = false;

    // 1) Exact screen ID match (custom admin pages)
    if ( in_array( $screen->id, $restricted_screen_ids, true ) ) {
        $show_popup = true;
    }

    // 2) Partial screen ID match (helps when prefixes / vendor prefixes change)
    if ( ! $show_popup ) {
        foreach ( $restricted_page_slugs as $slug ) {
            if ( false !== strpos( $screen->id, $slug ) ) {
                $show_popup = true;
                break;
            }
        }
    }

    // 3) If editing a WP Page, check the post slug
    if ( ! $show_popup ) {
        $post_id = 0;
        if ( isset( $_GET['post'] ) ) {
            $post_id = (int) $_GET['post'];
        } elseif ( isset( $_POST['post_ID'] ) ) {
            $post_id = (int) $_POST['post_ID'];
        } elseif ( isset( $GLOBALS['post']->ID ) ) {
            $post_id = (int) $GLOBALS['post']->ID;
        }

        if ( $post_id ) {
            $post = get_post( $post_id );
            if ( $post && 'page' === $post->post_type && in_array( $post->post_name, $restricted_page_slugs, true ) ) {
                $show_popup = true;
            }
        }
    }

    // If not matched and not debugging, don't output anything.
    if ( ! $show_popup && ! $debug ) {
        return;
    }

    // Output the popup HTML/CSS/JS
    ?>
    <?php if ( $debug ) : 
        // Show a small debug overlay so you can copy the screen ID / post info.
        $post_id = isset( $post_id ) ? $post_id : '';
        $post_slug = isset( $post->post_name ) ? $post->post_name : '';
        ?>
        <div style="position:fixed;bottom:12px;left:12px;z-index:999999;background:#fff;padding:8px 12px;border:1px solid #ccc;font-size:13px;">
            <strong>DEBUG</strong><br>
            Screen ID: <?php echo esc_html( $screen->id ); ?><br>
            Screen base: <?php echo esc_html( $screen->base ?? '' ); ?><br>
            Post ID: <?php echo esc_html( $post_id ); ?><br>
            Post slug: <?php echo esc_html( $post_slug ); ?>
        </div>
    <?php endif; ?>

    <div id="ntc-warning-popup" style="display:none;position:fixed;inset:0;z-index:999999;align-items:center;justify-content:center;background:rgba(0,0,0,0.6);">
      <div style="background:#fff;padding:24px;border-radius:10px;max-width:560px;width:90%;text-align:left;box-shadow:0 6px 30px rgba(0,0,0,0.3);font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial;">
        <h2 style="margin:0 0 12px;color:#c62828;">⚠️ Restricted Content</h2>
        <p style="margin:0 0 18px;line-height:1.5;">
          These pages and all items within this section are <strong>restricted</strong>.<br>
          Do not modify, delete, or create new items without prior approval from <strong>NTC’s Legal Team (CFO)</strong>.<br><br>
          Unauthorized changes may result in compliance issues. Please contact the Legal Team before making updates.
        </p>
        <div style="text-align:right;">
          <button id="ntc-warning-ok" style="padding:8px 16px;margin-right:8px;background:#c62828;color:#fff;border:0;border-radius:6px;cursor:pointer;font-weight:600;">OK</button>
          <button id="ntc-warning-close" style="padding:8px 16px;background:#e0e0e0;border:0;border-radius:6px;cursor:pointer;">Close</button>
        </div>
      </div>
    </div>

    <script>
    (function(){
    var popup = document.getElementById('ntc-warning-popup');
    if (!popup) return;

    setTimeout(function() {
        popup.style.display = 'flex';
    }, 200);

    function dismiss() {
        popup.style.display = 'none';
    }

    var ok = document.getElementById('ntc-warning-ok');
    var close = document.getElementById('ntc-warning-close');
    if (ok) ok.addEventListener('click', dismiss);
    if (close) close.addEventListener('click', dismiss);
})();

    </script>
    <?php
}




add_filter( 'wpseo_robots', function( $robots ) {

    if (
        is_page('acceptable-use-policy') ||
        //is_page('software-lifecycle-policy') ||
        is_page('security-policy') ||
        is_page('legal')
    ) {
        $robots = 'noindex,nofollow';
    }

    return $robots;

});

// Remove fetchpriority from specific images
add_filter('wp_img_tag_add_loading_optimization_attrs', function($optimization_attrs, $tag_name, $attr) {
    // Check if image is below fold based on class or context
    if (isset($attr['class']) && strpos($attr['class'], 'below-fold') !== false) {
        unset($optimization_attrs['fetchpriority']);
    }
    return $optimization_attrs;
}, 10, 3);


/**
 * Exclude all posts under the "event" category from Yoast SEO XML sitemap
 */
/*add_filter( 'wpseo_exclude_from_sitemap_by_post_ids', function( $excluded_ids ) {
    
    $excluded_categories = [ 'event', 'sub-processors', 'news', 'uncategorized', 'blog', 'podcast'];
    // Query all posts in 'event' category
    $event_posts = get_posts( [
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'fields'         => 'ids',
        'tax_query'      => [
            [
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $excluded_categories,
            ],
        ],
        'no_found_rows'  => true,
        'suppress_filters' => true,
    ] );

    if ( ! empty( $event_posts ) ) {
        $excluded_ids = array_merge( $excluded_ids, $event_posts );
    }

    return $excluded_ids;
} );*/

/**
 * Exclude posts from Yoast sitemap if:
 * - Category is event, sub-processors, or news
 * - OR category is webinars AND template is NOT default
 */
add_filter( 'wpseo_exclude_from_sitemap_by_post_ids', function( $excluded_ids ) {

    // Categories to always exclude
    $excluded_categories = [ 'event', 'sub-processors', 'news', 'uncategorized', 'blog', 'podcast'];

    // --- 1️⃣ Exclude always-ignored categories ---
    $posts_to_exclude = get_posts( [
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'fields'         => 'ids',
        'tax_query'      => [
            [
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $excluded_categories,
                'operator' => 'IN',
            ],
        ],
        'no_found_rows'     => true,
        'suppress_filters'  => true,
    ] );

    // --- 2️⃣ Exclude "webinars" category posts where template IS NOT default ---
    $webinar_posts = get_posts( [
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'fields'         => 'ids',
        'tax_query'      => [
            [ 'taxonomy' => 'category', 'field'    => 'slug', 'terms'    => 'webinars', ],
        ],
        /*'meta_query' => [
            [
                'key'     => '_wp_page_template',
                'value'   => 'elementor_header_footer', // empty value means "Default Template"
                'compare' => '!=', // exclude only if NOT default
            ],
        ],*/
        'meta_query' => [
            [
                'key'     => '_wp_page_template',
                'compare' => 'NOT EXISTS', // means template meta key exists (custom template used)
            ],
        ],
        'no_found_rows'     => true,
        'suppress_filters'  => true,
    ] );

    // Merge all excluded IDs
    $all_excluded = array_merge( $posts_to_exclude, $webinar_posts );

    if ( ! empty( $all_excluded ) ) {
        $excluded_ids = array_merge( $excluded_ids, $all_excluded );
    }

    return $excluded_ids;
} );


/*
 * WEBINAR - Resource Redirection Code Start
 * callbacks covered - filter_webinars_post_link | add_webinars_custom_rewrite_rule | redirect_old_webinar_urls
 */
// adding custom slug in webinars category
add_filter('post_type_link', 'filter_webinars_post_link', 10, 2);
function filter_webinars_post_link($permalink, $post) {
    if ($post->post_type !== 'post') {
        return $permalink;
    }

    $categories = get_the_category($post->ID);

    if ($categories) {
        foreach ($categories as $category) {
            if ($category->slug === 'webinars') {
                return home_url('/resources/webinars/' . $post->post_name . '/');
            }
        }
    }

    return $permalink;
}


add_action('init', 'add_webinars_custom_rewrite_rule');
function add_webinars_custom_rewrite_rule() {
    add_rewrite_rule(
        '^resources/webinars/([^/]+)/?$',
        'index.php?post_type=post&name=$matches[1]',
        'top'
    );
}

add_action('template_redirect', 'redirect_old_webinar_urls');
function redirect_old_webinar_urls() {
    if (!is_single() || is_admin()) {
        return;
    }

    global $post;
    if ($post && $post->post_type === 'post') {
        $categories = get_the_category($post->ID);
        if ($categories) {
            foreach ($categories as $category) {
                if ($category->slug === 'webinars') {
                    $new_url = home_url('/resources/webinars/' . $post->post_name . '/');
                    if (!preg_match('~/resources/webinars/~', $_SERVER['REQUEST_URI'])) {
                        wp_redirect($new_url, 301);
                        exit;
                    }
                }
            }
        }
    }
}

/*WEBINAR - Resource Redirection Code END*/


// Yost SEO sitemap add resources in resource category post url
add_filter('wpseo_xml_sitemap_post_url', 'custom_webinars_sitemap_url', 10, 2);

function custom_webinars_sitemap_url($url, $post) {
    if ($post->post_type === 'post') {
        
        $categories = get_the_category($post->ID);

        if ($categories) {
            foreach ($categories as $category) {
                if ($category->slug === 'webinars') {
                    return home_url('/resources/webinars/' . $post->post_name . '/');
                }
            }
        }
    }

    return $url;
}


//For searching apps 
function apps_ajax_search() {

    //check_ajax_referer('apps_search_nonce', 'nonce');
    $search = sanitize_text_field($_POST['search']);

    $args = array(
        'post_type'      => 'apps',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        's'              => $search,
        'search_title_only' => true,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $featured = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
            $title     = get_the_title();
            $permalink = get_permalink();
            $data = get_field('coming_soon');
            ?>
            <div class="app-item">
                <div class="app-icon">
                    <?php if ($featured) : ?>
                        <img src="<?php echo esc_url($featured); ?>" alt="<?php echo esc_attr($title); ?>">
                    <?php endif; ?>
                </div>

                <div class="app-content">
                    <h4 data-coming="<?php echo $data; ?>"><a target="_blank" href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h4>
                </div>

                <div class="app-link">
                    <a target="_blank" href="<?php echo esc_url($permalink); ?>">Learn more →</a>
                </div>
            </div>
            <?php
        endwhile;
    else :
        echo '<p>No apps found.</p>';
    endif;

    wp_reset_postdata();
    wp_die();
}

add_action('wp_ajax_apps_search', 'apps_ajax_search');
add_action('wp_ajax_nopriv_apps_search', 'apps_ajax_search');

//For search app title only
function apps_search_by_title_only( $search, $wp_query ) {
    global $wpdb;

    if ( empty( $search ) ) {
        return $search;
    }

    // Only modify our custom query
    if ( ! empty( $wp_query->query_vars['search_title_only'] ) ) {

        $search_term = $wp_query->query_vars['s'];

        $search = $wpdb->prepare(
            " AND {$wpdb->posts}.post_title LIKE %s ",
            '%' . $wpdb->esc_like( $search_term ) . '%'
        );
    }

    return $search;
}
add_filter( 'posts_search', 'apps_search_by_title_only', 10, 2 );


add_action('wp_footer', function() {
?>

<script type="text/javascript"
  src="https://www.gartner.com/peer-insights/vendor-portal/public/Widget/js/widget.js">
</script>

<script type="text/javascript">
  GartnerPI_Widget({
    size: "line",
    theme: "light",
    sourcingLink: "https://gtnr.io/08LNDGJyQ",
    widget_id: "ZjczYzNiMzktNGZlNi00ZmZhLWE2ZmItZjFlNmY1Y2Q3OGFl",
    version: "2",
    container: document.querySelector("#gartner-widget")
  });
</script>

<?php
});

function custom_admin_menu_css($hook) {
    if ($hook !== 'nav-menus.php') {
        return;
    }
    echo '<style>
        .menu-item-bar .menu-item-handle,
        .menu-item-settings {
            max-width: 50% !important;
        }
    </style>';
}
add_action('admin_head', 'custom_admin_menu_css');

add_action( 'do_feed', 'ntc_disable_post_feeds', 1 );
add_action( 'do_feed_rdf', 'ntc_disable_post_feeds', 1 );
add_action( 'do_feed_rss', 'ntc_disable_post_feeds', 1 );
add_action( 'do_feed_rss2', 'ntc_disable_post_feeds', 1 );
add_action( 'do_feed_atom', 'ntc_disable_post_feeds', 1 );

function ntc_disable_post_feeds() {

	if ( is_feed() && is_singular( 'post' ) ) {
		wp_safe_redirect( get_permalink(), 301 );
		exit;
	}
}


// add json ld schema to apps pages

add_action( 'wp_head', 'ntc_output_faq_schema' );

function ntc_output_faq_schema() {
    if (  ! is_singular( 'blog' ) && ! is_singular() && ! is_page() ) {
        return;
    }

    $faq_schema = get_field( 'faq_schema' );

    if ( empty( $faq_schema ) ) {
    return;
    }

    echo '<script type="application/ld+json">';
    echo wp_kses( $faq_schema, array() );
    echo '</script>';

}

/**
 * Register 'Hosts' Taxonomy for Posts
 * 
 * Creates a new taxonomy to categorize hosts/presenters for webinar posts.
 * 
 * @since 1.0.0
 */
function ntc_register_hosts_taxonomy() {
	$labels = array(
		'name'              => _x( 'Speakers', 'taxonomy general name', 'network-to-code' ),
		'singular_name'     => _x( 'Speaker', 'taxonomy singular name', 'network-to-code' ),
		'search_items'      => __( 'Search Speakers', 'network-to-code' ),
		'all_items'         => __( 'All Speakers', 'network-to-code' ),
		'parent_item'       => __( 'Parent Speaker', 'network-to-code' ),
		'parent_item_colon' => __( 'Parent Speaker:', 'network-to-code' ),
		'edit_item'         => __( 'Edit Speaker', 'network-to-code' ),
		'update_item'       => __( 'Update Speaker', 'network-to-code' ),
		'add_new_item'      => __( 'Add New Speaker', 'network-to-code' ),
		'new_item_name'     => __( 'New Speaker Name', 'network-to-code' ),
		'menu_name'         => __( 'Speakers', 'network-to-code' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'host' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'hosts', array( 'post' ), $args );
}
add_action( 'init', 'ntc_register_hosts_taxonomy', 0 );

/**
 * Register Hosts Metabox for Webinar Posts Only
 * 
 * Adds a custom metabox for selecting hosts, visible only for posts 
 * with the 'webinars' category.
 * 
 * @since 1.0.0
 */
function ntc_register_hosts_metabox() {
	add_meta_box(
		'ntc_hosts_metabox',
		__( 'Select Hosts', 'network-to-code' ),
		'ntc_render_hosts_metabox',
		'post',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'ntc_register_hosts_metabox' );

/**
 * Render Hosts Metabox
 * 
 * Displays a multiselect dropdown for hosts, only shown for posts 
 * with the 'webinars' category.
 * 
 * @param WP_Post $post The post object.
 * @since 1.0.0
 */
function ntc_render_hosts_metabox( $post ) {
	// Check if this post has the 'webinars' category
	$webinars_category = get_category_by_slug( 'webinars' );
	
	if ( ! $webinars_category ) {
		echo '<p>' . esc_html__( 'Webinars category not found.', 'network-to-code' ) . '</p>';
		return;
	}

	$post_categories = wp_get_post_categories( $post->ID );
	
	// Hide metabox if post doesn't have webinars category
	if ( ! in_array( $webinars_category->term_id, $post_categories ) ) {
		echo '<p>' . esc_html__( 'This metabox is only available for posts in the Webinars category.', 'network-to-code' ) . '</p>';
		return;
	}

	// Get all hosts
	$hosts = get_terms( array(
		'taxonomy' => 'hosts',
		'hide_empty' => false,
	) );

	if ( is_wp_error( $hosts ) ) {
		echo '<p>' . esc_html__( 'Error loading hosts.', 'network-to-code' ) . '</p>';
		return;
	}

	// Get current post's selected hosts
	$selected_hosts = wp_get_post_terms( $post->ID, 'hosts', array( 'fields' => 'ids' ) );
	
	if ( is_wp_error( $selected_hosts ) ) {
		$selected_hosts = array();
	}

	// Output nonce field
	wp_nonce_field( 'ntc_hosts_nonce', 'ntc_hosts_nonce_field' );

	echo '<div style="margin-top: 10px;">';
	echo '<label for="ntc_hosts_select" style="display: block; margin-bottom: 8px;">';
	echo esc_html__( 'Select Hosts:', 'network-to-code' );
	echo '</label>';

	if ( ! empty( $hosts ) ) {
		echo '<select id="ntc_hosts_select" name="ntc_selected_hosts[]" multiple="multiple" style="width: 100%; min-height: 120px; padding: 5px;">';
		
		foreach ( $hosts as $host ) {
			$selected = in_array( $host->term_id, $selected_hosts ) ? 'selected' : '';
			echo '<option value="' . esc_attr( $host->term_id ) . '" ' . esc_attr( $selected ) . '>';
			echo esc_html( $host->name );
			echo '</option>';
		}
		
		echo '</select>';
	} else {
		echo '<p style="color: #999;">' . esc_html__( 'No hosts available. Please create hosts first.', 'network-to-code' ) . '</p>';
	}

	echo '</div>';
}

/**
 * Save Hosts Metabox Data
 * 
 * Saves the selected hosts for webinar posts. Only processes data 
 * for posts with the 'webinars' category.
 * 
 * @param int $post_id The ID of the post being saved.
 * @since 1.0.0
 */
function ntc_save_hosts_metabox( $post_id ) {
	// Verify nonce
	if ( ! isset( $_POST['ntc_hosts_nonce_field'] ) || 
	     ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['ntc_hosts_nonce_field'] ) ), 'ntc_hosts_nonce' ) ) {
		return;
	}

	// Check if user has permission to edit the post
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	// Prevent autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check if post is in webinars category
	$webinars_category = get_category_by_slug( 'webinars' );
	
	if ( ! $webinars_category ) {
		return;
	}

	$post_categories = wp_get_post_categories( $post_id );
	
	// Only save hosts for posts in the webinars category
	if ( ! in_array( $webinars_category->term_id, $post_categories ) ) {
		// Clear hosts if post is removed from webinars category
		wp_set_object_terms( $post_id, array(), 'hosts' );
		return;
	}

	// Get and sanitize selected hosts
	$selected_hosts = isset( $_POST['ntc_selected_hosts'] ) ? array_map( 'absint', wp_unslash( $_POST['ntc_selected_hosts'] ) ) : array();

	// Validate that selected host IDs are valid
	if ( ! empty( $selected_hosts ) ) {
		$all_hosts = get_terms( array(
			'taxonomy' => 'hosts',
			'fields'   => 'ids',
			'hide_empty' => false,
		) );

		if ( ! is_wp_error( $all_hosts ) ) {
			// Filter to only include valid host IDs
			$selected_hosts = array_intersect( $selected_hosts, $all_hosts );
		}
	}

	// Save the hosts relationship
	wp_set_object_terms( $post_id, $selected_hosts, 'hosts', false );
}
add_action( 'save_post_post', 'ntc_save_hosts_metabox' );

/**
 * Hide Hosts Metabox from Admin Display if Not Webinar Post
 * 
 * Uses CSS to hide the metabox from non-webinar posts. 
 * This is a fallback to the message shown in ntc_render_hosts_metabox.
 * 
 * @since 1.0.0
 */
function ntc_hosts_metabox_admin_styles() {
	$screen = get_current_screen();
	
	if ( $screen->id !== 'post' ) {
		return;
	}

	global $post;
	
	if ( ! isset( $post ) || ! isset( $post->ID ) ) {
		return;
	}

	$webinars_category = get_category_by_slug( 'webinars' );
	
	if ( ! $webinars_category ) {
		return;
	}

	$post_categories = wp_get_post_categories( $post->ID );
	
	// Show alert and style if post is not in webinars category
	if ( ! in_array( $webinars_category->term_id, $post_categories ) ) {
		echo '<style>
			#ntc_hosts_metabox {
				background-color: #f5f5f5;
				opacity: 0.6;
			}
		</style>';
	}
}
add_action( 'admin_head', 'ntc_hosts_metabox_admin_styles' );

