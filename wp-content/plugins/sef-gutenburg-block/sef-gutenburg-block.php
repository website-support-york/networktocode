<?php
/**
* Plugin Name: Sef Gutenburg Block
* Description: Sef Gutenburg Block for addition purpose
* Author: Sef Ali Khan
* Version: 1.0.0
**/

defined( 'ABSPATH' ) or die( 'No Authorised Access!' );

// Start of adding block category listing

function sef_plugin_block_categories( $categories ) {
  return array_merge(
    $categories,
    [
      [
        'slug'  => 'sef-blocks',
        'title' => __( 'Sef Blocks', 'sef-boilerplate' ),
      ],
    ]
  );
}
add_action( 'block_categories_all', 'sef_plugin_block_categories', 10, 2 );

// End of adding block category listing

// start of Sef Hero Banner

add_action( 'acf/init', 'sef_hero_banner');
function sef_hero_banner() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefherobanner',
      'title'             => __('Sef Hero Banner'),
      'description'       => __('Sef block for hero banner.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-hero-banner.php',
      'category'          => 'sef-blocks',
      'icon'              => 'art',
      'keywords'          => array( 'Hero', 'Banner', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Hero Banner

// Start of Sef Accordian with left Image

add_action( 'acf/init', 'sef_accoridan_image_l');
function sef_accoridan_image_l() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefaccoridanimagel',
      'title'             => __('Sef Accordian With Image'),
      'description'       => __('Sef block Accordian with left Image.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-accoridan-image-l.php',
      'category'          => 'sef-blocks',
      'icon'              => 'analytics',
      'keywords'          => array( 'Accordian', 'Faq', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Accordian with left Image


// Start of Sef Key Solution 

add_action( 'acf/init', 'sef_key_solution');
function sef_key_solution() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefkeysolution',
      'title'             => __('Sef Key Solution'),
      'description'       => __('Sef block for key solutions.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-key-solution.php',
      'category'          => 'sef-blocks',
      'icon'              => 'admin-network',
      'keywords'          => array( 'Solution', 'Key', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Key solution



// Start of Sef Case Studies

add_action( 'acf/init', 'sef_case_studies');
function sef_case_studies() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefcasestudies',
      'title'             => __('Sef Case Studies'),
      'description'       => __('Sef block for Case Studies.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-case-studies.php',
      'category'          => 'sef-blocks',
      'icon'              => 'welcome-learn-more',
      'keywords'          => array( 'Case', 'Studies', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Case Studies


// Start of Sef Media and Content

add_action( 'acf/init', 'sef_media_content');
function sef_media_content() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefmediacontent',
      'title'             => __('Sef Media And Content'),
      'description'       => __('Sef block for Media And Content.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-media-content.php',
      'category'          => 'sef-blocks',
      'icon'              => 'align-pull-left',
      'keywords'          => array( 'Media', 'Content', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Media and Content


// Start of Sef Earned Numbers

add_action( 'acf/init', 'sef_earned_number');
function sef_earned_number() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefearnednuumber',
      'title'             => __('Sef Earned Number'),
      'description'       => __('Sef block for Earned Numbers.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-earned-number.php',
      'category'          => 'sef-blocks',
      'icon'              => 'performance',
      'keywords'          => array( 'Earned', 'Number', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Earned Numbers



// Start of Sef Hero Section

add_action( 'acf/init', 'sef_hero_section');
function sef_hero_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefherosection',
      'title'             => __('Sef Hero Section'),
      'description'       => __('Sef block for Hero Section.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-hero-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'tide',
      'keywords'          => array( 'Hero', 'Section', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Hero Section


// Start of Sef Logo Slider

add_action( 'acf/init', 'sef_logo_slider');
function sef_logo_slider() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'seflogoslider',
      'title'             => __('Sef Logo Slider'),
      'description'       => __('Sef block for Logo Slider.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-logo-slider.php',
      'category'          => 'sef-blocks',
      'icon'              => 'vault',
      'keywords'          => array( 'Logo', 'Slider', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Logo Slider


// Start of Sef Tab

add_action( 'acf/init', 'sef_tab');
function sef_tab() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'seftab',
      'title'             => __('Sef Tab'),
      'description'       => __('Sef block for Tab.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-tab.php',
      'category'          => 'sef-blocks',
      'icon'              => 'networking',
      'keywords'          => array( 'Tab', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Tab


// Start of Sef Post Tab

add_action( 'acf/init', 'sef_post_tab');
function sef_post_tab() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefposttab',
      'title'             => __('Sef Post Tab'),
      'description'       => __('Sef block for Post Tab.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-post-tab.php',
      'category'          => 'sef-blocks',
      'icon'              => 'superhero',
      'keywords'          => array( 'Post', 'Tab', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Post Tab



// Start of Sef Get In Touch

add_action( 'acf/init', 'sef_get_in_touch');
function sef_get_in_touch() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefgetintouch',
      'title'             => __('Sef Get in Touch'),
      'description'       => __('Sef block for Get in Touch.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-get-in-touch.php',
      'category'          => 'sef-blocks',
      'icon'              => 'phone',
      'keywords'          => array( 'Contact', 'Get In Touch', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Get In Touch


// Start of Sef Richtext

add_action( 'acf/init', 'sef_richtext');
function sef_richtext() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefrichtext',
      'title'             => __('Sef Rich Text'),
      'description'       => __('Sef block for Rich Text.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-richtext.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-text',
      'keywords'          => array( 'Richtext', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Richtext

// Start of Sef Richquote

add_action( 'acf/init', 'sef_richquote');
function sef_richquote() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefrichquote',
      'title'             => __('Sef Rich Quote'),
      'description'       => __('Sef block for Rich Quote.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-richquote.php',
      'category'          => 'sef-blocks',
      'icon'              => 'format-quote',
      'keywords'          => array( 'Quote', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Richquote



// Start of Top Banner

add_action( 'acf/init', 'sef_top_banner');
function sef_top_banner() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'seftopbanner',
      'title'             => __('Sef Top Banner'),
      'description'       => __('Sef block for Add Top Banner.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-top-banner.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-interactive',
      'keywords'          => array( 'Banner', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Top Banner


// Start of Image with Text

add_action( 'acf/init', 'sef_image_text');
function sef_image_text() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefimagetext',
      'title'             => __('Sef Image with Text'),
      'description'       => __('Sef block for Image with Text.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-image-text.php',
      'category'          => 'sef-blocks',
      'icon'              => 'id',
      'keywords'          => array( 'Image', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Image with Text


// Start of Sef flowchart

add_action( 'acf/init', 'sef_flowchart');
function sef_flowchart() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefflowchart',
      'title'             => __('Sef Flowchart'),
      'description'       => __('Sef block for Flowchart.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-flowchart.php',
      'category'          => 'sef-blocks',
      'icon'              => 'align-wide',
      'keywords'          => array( 'Flow', 'Chart', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef flowchart


// Start of Text Block

add_action( 'acf/init', 'sef_text_block');
function sef_text_block() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'seftextblock',
      'title'             => __('Sef Text Block'),
      'description'       => __('Sef block for Text.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-text-block.php',
      'category'          => 'sef-blocks',
      'icon'              => 'text',
      'keywords'          => array( 'Text', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Image with Text


// Start of Icon with Text

add_action( 'acf/init', 'sef_icon_text');
function sef_icon_text() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'seficontext',
      'title'             => __('Sef Icon with Text'),
      'description'       => __('Sef block for Icon with Text.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-icon-text.php',
      'category'          => 'sef-blocks',
      'icon'              => 'id',
      'keywords'          => array( 'Text', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Icon with Text.


// Start of Icon List

add_action( 'acf/init', 'sef_icon_list');
function sef_icon_list() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'seficonlist',
      'title'             => __('Sef Icon List'),
      'description'       => __('Sef block for Icon List.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-icon-list.php',
      'category'          => 'sef-blocks',
      'icon'              => 'id',
      'keywords'          => array( 'Text', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Icon List.


// Start of Single Image

add_action( 'acf/init', 'sef_single_img');
function sef_single_img() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefsingleimg',
      'title'             => __('Sef Single Image'),
      'description'       => __('Sef block for Single Image.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-single-image.php',
      'category'          => 'sef-blocks',
      'icon'              => 'art',
      'keywords'          => array( 'Image', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Single Image.


// Start of Packages

add_action( 'acf/init', 'sef_packages');
function sef_packages() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefpackages',
      'title'             => __('Sef Packages'),
      'description'       => __('Sef block for Pacakges.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-packages.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-interactive',
      'keywords'          => array( 'Packages', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Packages.


// Start of Services Icon List

add_action( 'acf/init', 'sef_service_icon_list');
function sef_service_icon_list() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefserviceiconlist',
      'title'             => __('Sef Service Icon List'),
      'description'       => __('Sef block for Service Icon List.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-sevices-icon-list.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-interactive',
      'keywords'          => array( 'Service Icon List', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Services Icon List.


// Start of Side By List

add_action( 'acf/init', 'sef_side_by_list');
function sef_side_by_list() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefsidebylist',
      'title'             => __('Sef Side By List'),
      'description'       => __('Sef block for Side By List.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-side-by-list.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-interactive',
      'keywords'          => array( 'Side By List', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Side By List.


// Start of Sef List with Image

add_action( 'acf/init', 'sef_list_with_image');
function sef_list_with_image() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'seflistwithimage',
      'title'             => __('Sef List with Image'),
      'description'       => __('Sef block for List with Image.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-list-with-image.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-interactive',
      'keywords'          => array( 'List', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef List with Image.


// Start of Sef Get To Know

add_action( 'acf/init', 'sef_get_to_know');
function sef_get_to_know() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefgettoknow',
      'title'             => __('Sef Get To Know'),
      'description'       => __('Sef block for Get To Know.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-get-to-know.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-interactive',
      'keywords'          => array( 'List', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Get To Know


// Start of Sef Journey

add_action( 'acf/init', 'sef_journey');
function sef_journey() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefjourney',
      'title'             => __('Sef Journey'),
      'description'       => __('Sef block for journey.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-journey.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-interactive',
      'keywords'          => array( 'List', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Journey

// Start of Sef Post grid

add_action( 'acf/init', 'sef_post_grid');
function sef_post_grid() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefpostgrid',
      'title'             => __('Sef Post Grid'),
      'description'       => __('Sef block for post grid.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-post-grid.php',
      'category'          => 'sef-blocks',
      'icon'              => 'columns',
      'keywords'          => array( 'Post', 'Grid', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Post grid


// Start of Sef Contact form

add_action( 'acf/init', 'sef_contact_form');
function sef_contact_form() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefcontactform',
      'title'             => __('Sef Contact Form'),
      'description'       => __('Sef block for contact form.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-contact-form.php',
      'category'          => 'sef-blocks',
      'icon'              => 'clipboard',
      'keywords'          => array( 'Contact', 'Form', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Contact form



// Start of Sef Team Card

add_action( 'acf/init', 'sef_team_card');
function sef_team_card() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefteamcard',
      'title'             => __('Sef Team Card'),
      'description'       => __('Sef block for team card.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-team-card.php',
      'category'          => 'sef-blocks',
      'icon'              => 'grid-view',
      'keywords'          => array( 'Team', 'Card', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Team Card


// Start of Sef Gallery Section

add_action( 'acf/init', 'sef_Gallery_grid');
function sef_Gallery_grid() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefgallerygrid',
      'title'             => __('Sef Gallery Grid'),
      'description'       => __('Sef block for Gallery grid.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-gallery-grid.php',
      'category'          => 'sef-blocks',
      'icon'              => 'grid-view',
      'keywords'          => array( 'Gallery', 'Grid', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Gallery Section


// Start of Sef Image with list

add_action( 'acf/init', 'sef_image_with_list');
function sef_image_with_list() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefimagewithlist',
      'title'             => __('Sef Image with List'),
      'description'       => __('Sef block for Image with List.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-image-with-list.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-interactive',
      'keywords'          => array( 'Image', 'List', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Image with list

// Start of Sef Roadmap Block

add_action( 'acf/init', 'sef_roadmap_block');
function sef_roadmap_block() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefroadmapblock',
      'title'             => __('Sef Roadmap Block'),
      'description'       => __('Sef block for Roadmap.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-roadmap-block.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Roadmap', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Roadmap Block


// Start of Sef Apps & Solution

add_action( 'acf/init', 'sef_apps_block');
function sef_apps_block() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefappsblock',
      'title'             => __('Sef Apps Block'),
      'description'       => __('Sef block for Apps.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-apps-block.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Apps', 'Solution', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Apps & Solution


// Start of Sef Case Study Listing

add_action( 'acf/init', 'sef_case_study_list');
function sef_case_study_list() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefcasestudylist',
      'title'             => __('Sef Case Study Listing'),
      'description'       => __('Sef block for Case Study Listing.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-case-study-list.php',
      'category'          => 'sef-blocks',
      'icon'              => 'list-view',
      'keywords'          => array( 'Case', 'Study', 'list', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Case Study Listing


// Start of Sef Course Listing Block

add_action( 'acf/init', 'sef_course_list');
function sef_course_list() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefcourselist',
      'title'             => __('Sef Course Listing'),
      'description'       => __('Sef block for Course Listing.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-coruse-list.php',
      'category'          => 'sef-blocks',
      'icon'              => 'list-view',
      'keywords'          => array( 'Course', 'list', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Course Listing Block


// Start of Sef Graph Block

add_action( 'acf/init', 'sef_graph');
function sef_graph() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefgraph',
      'title'             => __('Sef Graph'),
      'description'       => __('Sef block for Graph.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-graph.php',
      'category'          => 'sef-blocks',
      'icon'              => 'chart-bar',
      'keywords'          => array( 'Graph', 'Sef' ),
      'supports' => array( 'anchor' => true ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Graph Block


// Start of Sef CTA Block

add_action( 'acf/init', 'sef_cta');
function sef_cta() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a testimonial block.
    acf_register_block_type( array(
      'name'              => 'sefcta',
      'title'             => __('Sef CTA'),
      'description'       => __('Sef block for CTA.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-cta.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'CTA', 'Button', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef CTA Block


// Start of Sef Case Study Details

add_action( 'acf/init', 'sef_case_study_detail');
function sef_case_study_detail() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Case Study Details block.
    acf_register_block_type( array(
      'name'              => 'sefcasestudydetail',
      'title'             => __('Sef Case Study detail'),
      'description'       => __('Sef block for Case Study detail.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-case-study-detail.php',
      'category'          => 'sef-blocks',
      'icon'              => 'welcome-widgets-menus',
      'keywords'          => array( 'Case', 'Study', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Case Study Details

// Start of Sef Resource

add_action( 'acf/init', 'sef_resource');
function sef_resource() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Case Study Details block.
    acf_register_block_type( array(
      'name'              => 'sefresource',
      'title'             => __('Sef Resource'),
      'description'       => __('Sef block for Resource.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-resource.php',
      'category'          => 'sef-blocks',
      'icon'              => 'admin-tools',
      'keywords'          => array( 'resource', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Resource


// Start of Sef News

add_action( 'acf/init', 'sef_news');
function sef_news() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Case Study Details block.
    acf_register_block_type( array(
      'name'              => 'sefnews',
      'title'             => __('Sef News'),
      'description'       => __('Sef block for news.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-news.php',
      'category'          => 'sef-blocks',
      'icon'              => 'admin-tools',
      'keywords'          => array( 'news', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef News


// Start of Sef eBooks

add_action( 'acf/init', 'sef_ebooks');
function sef_ebooks() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Case Study Details block.
    acf_register_block_type( array(
      'name'              => 'sefebooks',
      'title'             => __('Sef eBooks'),
      'description'       => __('Sef block for eBooks.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-ebooks.php',
      'category'          => 'sef-blocks',
      'icon'              => 'book-alt',
      'keywords'          => array( 'eBooks', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef eBooks


// Start of Sef Apps Details

add_action( 'acf/init', 'sef_apps_detail');
function sef_apps_detail() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Case Study Details block.
    acf_register_block_type( array(
      'name'              => 'sefappsdetail',
      'title'             => __('Sef Apps detail'),
      'description'       => __('Sef block for Apps detail.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-apps-detail.php',
      'category'          => 'sef-blocks',
      'icon'              => 'welcome-widgets-menus',
      'keywords'          => array( 'Apps', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Apps Details


// Start of Sef Bootcamps

add_action( 'acf/init', 'sef_bootcamps');
function sef_bootcamps() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Case Study Details block.
    acf_register_block_type( array(
      'name'              => 'sefbootcamps',
      'title'             => __('Sef Bootcamps'),
      'description'       => __('Sef block for bootcamps.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-bootcamps.php',
      'category'          => 'sef-blocks',
      'icon'              => 'welcome-widgets-menus',
      'keywords'          => array( 'Bootcamps', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Bootcamps


// Start of Sef Podcasts

add_action( 'acf/init', 'sef_podcasts');
function sef_podcasts() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Case Study Details block.
    acf_register_block_type( array(
      'name'              => 'sefpodcasts',
      'title'             => __('Sef Podcasts'),
      'description'       => __('Sef block for podcasts.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-podcasts.php',
      'category'          => 'sef-blocks',
      'icon'              => 'megaphone',
      'keywords'          => array( 'Podcasts', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Podcasts



// Start of Sef Meetups

add_action( 'acf/init', 'sef_meetups');
function sef_meetups() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Case Study Details block.
    acf_register_block_type( array(
      'name'              => 'sefmeetups',
      'title'             => __('Sef Meetups'),
      'description'       => __('Sef block for Meetups.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-meetups.php',
      'category'          => 'sef-blocks',
      'icon'              => 'admin-tools',
      'keywords'          => array( 'meetups', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Meetups



// Start of Sef Event

add_action( 'acf/init', 'sef_event');
function sef_event() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Case Study Details block.
    acf_register_block_type( array(
      'name'              => 'sefevent',
      'title'             => __('Sef Event'),
      'description'       => __('Sef block for Event.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-event.php',
      'category'          => 'sef-blocks',
      'icon'              => 'admin-tools',
      'keywords'          => array( 'event', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Event


// Start of Sef Custom Tab

add_action( 'acf/init', 'sef_custom_tab');
function sef_custom_tab() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom tabs block.
    acf_register_block_type( array(
      'name'              => 'sefcustomtab',
      'title'             => __('Sef Custom Tab'),
      'description'       => __('Sef block for Tab Details.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-custom-tab.php',
      'category'          => 'sef-blocks',
      'icon'              => 'feedback',
      'keywords'          => array( 'tab', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Custom tab



// Start of Sef Tab for Platform development

add_action( 'acf/init', 'sef_tab_for_platform_development');
function sef_tab_for_platform_development() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom tabs block.
    acf_register_block_type( array(
      'name'              => 'seftabforplatformdevelopment',
      'title'             => __('Sef Tab For Platform Development'),
      'description'       => __('Sef block Tab For Platform Development.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-tab-platform-development.php',
      'category'          => 'sef-blocks',
      'icon'              => 'feedback',
      'keywords'          => array( 'tab', 'Sef', 'Platform', 'Development' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Tab for Platform development


// Start of Sef Tab for Security Compilance

add_action( 'acf/init', 'sef_tab_for_security_compilance');
function sef_tab_for_security_compilance() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom tabs block.
    acf_register_block_type( array(
      'name'              => 'seftabforsecuritycompilance',
      'title'             => __('Sef Tab For Security Compilance'),
      'description'       => __('Sef block Tab For Security Compilance.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-tab-security-compilance.php',
      'category'          => 'sef-blocks',
      'icon'              => 'feedback',
      'keywords'          => array( 'tab', 'Sef', 'Security', 'Compilance' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Tab for Security Compilance



// Start of Sef Tab for Workflow Automation

add_action( 'acf/init', 'sef_tab_for_workflow_automation');
function sef_tab_for_workflow_automation() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom tabs block.
    acf_register_block_type( array(
      'name'              => 'seftabforworkflowautomation',
      'title'             => __('Sef Tab For workflow Automation'),
      'description'       => __('Sef block Tab For workflow Automation.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-tab-workflow-automation.php',
      'category'          => 'sef-blocks',
      'icon'              => 'feedback',
      'keywords'          => array( 'tab', 'Sef', 'Workflow', 'Automation' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Tab for Workflow Automation


// Start of Sef Contact Us

add_action( 'acf/init', 'sef_contact_us');
function sef_contact_us() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom tabs block.
    acf_register_block_type( array(
      'name'              => 'sefcontactus',
      'title'             => __('Sef Contact Us'),
      'description'       => __('Sef block Contact Us.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-contact-us.php',
      'category'          => 'sef-blocks',
      'icon'              => 'feedback',
      'keywords'          => array( 'Contact Us', 'Forms' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Contact Us


// Start of Sef Tab for Network Automation

add_action( 'acf/init', 'sef_tab_for_network_automation');
function sef_tab_for_network_automation() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom tabs block.
    acf_register_block_type( array(
      'name'              => 'seftabfornetworkautomation',
      'title'             => __('Sef Tab For network Automation'),
      'description'       => __('Sef block Tab For network Automation.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-tab-network-automation.php',
      'category'          => 'sef-blocks',
      'icon'              => 'feedback',
      'keywords'          => array( 'tab', 'Sef', 'Network', 'Automation' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Tab for Network Automation


// Start of Sef Section

add_action( 'acf/init', 'sef_section');
function sef_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom section block.
    acf_register_block_type( array(
      'name'              => 'sefsection',
      'title'             => __('Sef Section'),
      'description'       => __('Sef block Section.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'editor-insertmore',
      'keywords'          => array( 'Section', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Section


// Start of Sef Product Banner

add_action( 'acf/init', 'sef_product_banner');
function sef_product_banner() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef Product Banner block.
    acf_register_block_type( array(
      'name'              => 'sefproductbanner',
      'title'             => __('Sef Product Banner'),
      'description'       => __('Sef block for Product Banner.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-product-banner.php',
      'category'          => 'sef-blocks',
      'icon'              => 'cover-image',
      'keywords'          => array( 'Product', 'Banner', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Product Banner


// Start of Sef Table

add_action( 'acf/init', 'sef_table');
function sef_table() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom Table block.
    acf_register_block_type( array(
      'name'              => 'seftable',
      'title'             => __('Sef Table'),
      'description'       => __('Sef block Table.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-table.php',
      'category'          => 'sef-blocks',
      'icon'              => 'table-row-after',
      'keywords'          => array( 'Table', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Table


// Start of Sef Awards

add_action( 'acf/init', 'sef_awards');
function sef_awards() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom Table block.
    acf_register_block_type( array(
      'name'              => 'sefawards',
      'title'             => __('Sef Awards'),
      'description'       => __('Sef block For Awards.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-awards.php',
      'category'          => 'sef-blocks',
      'icon'              => 'awards',
      'keywords'          => array( 'Awards', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Awards


// Start of Sef Sub Processors

add_action( 'acf/init', 'sef_sub_processors');
function sef_sub_processors() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a sef custom Sub Processors block.
    acf_register_block_type( array(
      'name'              => 'sefsubprocessors',
      'title'             => __('Sef Sub Processors'),
      'description'       => __('Sef block For Sub Processors.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-sub-processors.php',
      'category'          => 'sef-blocks',
      'icon'              => 'editor-customchar',
      'keywords'          => array( 'Sub Processors', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Sub Processors


// Start of Sef Press

add_action( 'acf/init', 'sef_press');
function sef_press() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sefpress',
      'title'             => __('Sef Press'),
      'description'       => __('Sef block for Press.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-press.php',
      'category'          => 'sef-blocks',
      'icon'              => 'admin-tools',
      'keywords'          => array( 'press', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Press


// Start of Sef Achieve Card

add_action( 'acf/init', 'sef_achieve_card');
function sef_achieve_card() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sefachievecard',
      'title'             => __('Sef Achieve Card'),
      'description'       => __('Sef block for Achieve Card.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-achieve-card.php',
      'category'          => 'sef-blocks',
      'icon'              => 'portfolio',
      'keywords'          => array( 'Achieve', 'Card', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Achieve Card


// Start of Sef Blog listing

add_action( 'acf/init', 'sef_blog_listing');
function sef_blog_listing() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sefbloglisting',
      'title'             => __('Sef Blog Listing'),
      'description'       => __('Sef block for Blog Listing.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-blog-listing.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-archive',
      'keywords'          => array( 'Blog', 'listing', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Blog Listing


// Start of Sef Blog Detail

add_action( 'acf/init', 'sef_blog_detail');
function sef_blog_detail() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sefblogdetail',
      'title'             => __('Sef Blog Detail'),
      'description'       => __('Sef block for Blog Detail.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-blog-detail.php',
      'category'          => 'sef-blocks',
      'icon'              => 'images-alt2',
      'keywords'          => array( 'Blog', 'Detail', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Blog Detail


// Start of Sef Blog Quote

add_action( 'acf/init', 'sef_blog_quote');
function sef_blog_quote() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sefblogquote',
      'title'             => __('Sef Blog Quote'),
      'description'       => __('Sef block for Blog Quote.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-blog-quote.php',
      'category'          => 'sef-blocks',
      'icon'              => 'images-alt2',
      'keywords'          => array( 'Blog', 'Quote', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Blog Quote

// Start of Sef Case Quote

add_action( 'acf/init', 'sef_case_quote');
function sef_case_quote() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sefcasequote',
      'title'             => __('Sef Case Quote'),
      'description'       => __('Sef block for Case Quote.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-case-quote.php',
      'category'          => 'sef-blocks',
      'icon'              => 'images-alt2',
      'keywords'          => array( 'Case', 'Quote', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Case Quote


// Start of Sef Case Study Banner

add_action( 'acf/init', 'sef_case_study_banner');
function sef_case_study_banner() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sefcasestudybanner',
      'title'             => __('Sef Case Study Banner'),
      'description'       => __('Sef block for Case Study Banner.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-case-study-banner.php',
      'category'          => 'sef-blocks',
      'icon'              => 'analytics',
      'keywords'          => array( 'Case', 'Banner', 'Sef' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Sef Case Study Banner

// Start of Card Block

add_action( 'acf/init', 'sef_card_block');
function sef_card_block() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sefcardblock',
      'title'             => __('Sef Card Block'),
      'description'       => __('Sef block for Card Block.'),
            // 'render_callback'   => function() {
            //     echo '<h3>Our travel block</h3>';
            // },
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-card-block.php',
      'category'          => 'sef-blocks',
      'icon'              => 'analytics',
      'keywords'          => array( 'card', 'two col', 'half' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Card Block


// Start of Case study

add_action( 'acf/init', 'sef_casestudy');
function sef_casestudy() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sef_casestudy',
      'title'             => __('Sef New casestudy'),
      'description'       => __('Sef block for sef_casestudy.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-newcasestudy.php',
      'category'          => 'sef-blocks',
      'icon'              => 'dashicons-editor-paste-word',
      'keywords'          => array( 'case', 'updated', 'workflow' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Case study

// Start of Case study

add_action( 'acf/init', 'sef_newblogs');
function sef_newblogs() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sef_newblogs',
      'title'             => __('Sef New Blogs'),
      'description'       => __('Sef block for sef_newblogs.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-newblogs.php',
      'category'          => 'sef-blocks',
      'icon'              => 'dashicons-editor-paste-word',
      'keywords'          => array( 'blogs', 'posts', 'new' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}

// End of Case study

// Start of Case study

add_action( 'acf/init', 'sef_two_col');
function sef_two_col() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {

        // register a Press Details block.
    acf_register_block_type( array(
      'name'              => 'sef_two_col',
      'title'             => __('Sef Two Cols'),
      'description'       => __('Sef block for sef_two_col.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-two-cols.php',
      'category'          => 'sef-blocks',
      'icon'              => 'image-flip-horizontal',
      'keywords'          => array( 'blogs', 'posts', 'new' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      'enqueue_assets'    => function() {
        wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

        wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
        wp_enqueue_style('Google_Font_Roboto');

        wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('Owl_Carousel');

        wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
        wp_enqueue_style('Bootstrap_Icons');

        wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
        wp_enqueue_style('Animation_Css');

        wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
        wp_enqueue_style('Jquery_Ui');

        wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
        wp_enqueue_style('Slick_Slider');

        wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style('Bootstrap_Css');

        wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
        wp_enqueue_style('Ntc_Stylesheet');

        wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
        wp_enqueue_style('Cursor_Stylesheet');

      }            
    ) );
  }

}
// End of Case study

/*Improved code starts from here*/


function get_assets_ntc(){
  wp_enqueue_style( 'network-to-code-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_style_add_data( 'network-to-code-style', 'rtl', 'replace' );

  wp_register_style( 'Google_Font_Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Zilla+Slab:wght@300;400;500;600;700&display=swap' );
  wp_enqueue_style('Google_Font_Roboto');

  wp_register_style( 'Owl_Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
  wp_enqueue_style('Owl_Carousel');

  wp_register_style( 'Bootstrap_Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );
  wp_enqueue_style('Bootstrap_Icons');

  wp_register_style( 'Animation_Css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
  wp_enqueue_style('Animation_Css');

  wp_register_style( 'Jquery_Ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css' );
  wp_enqueue_style('Jquery_Ui');

  wp_register_style( 'Slick_Slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css' );
  wp_enqueue_style('Slick_Slider');

  wp_register_style( 'Bootstrap_Css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
  wp_enqueue_style('Bootstrap_Css');

  wp_register_style( 'Ntc_Stylesheet', get_template_directory_uri() . '/assets/scss/style.css' );
  wp_enqueue_style('Ntc_Stylesheet');

  wp_register_style( 'Cursor_Stylesheet', get_template_directory_uri() . '/assets/css/cursor.css' );
  wp_enqueue_style('Cursor_Stylesheet');
}

// Start of Homepage Logo Section
add_action( 'acf/init', 'home_logo_section');
function home_logo_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'home_logo_section',
      'title'             => __('Logo Section'),
      'description'       => __('Sef block for Logo Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/logo-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'image-filter',
      'keywords'          => array( 'logo', 'home', 'slider', 'brands', 'Solutions' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Homepage Logo Section

// Start of Dowload CTA Section
add_action( 'acf/init', 'download_cta');
function download_cta() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'download_cta',
      'title'             => __('Download CTA Section'),
      'description'       => __('Sef block for Download CTA Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/download-cta.php',
      'category'          => 'sef-blocks',
      'icon'              => 'download',
      'keywords'          => array( 'Cycle', 'Automation', 'Download', 'CTA', 'image' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Dowload CTA Section

// Start of Video Section
add_action( 'acf/init', 'video_section');
function video_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'video_section',
      'title'             => __('Video Section'),
      'description'       => __('Sef block for Video Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/video-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'video-alt3',
      'keywords'          => array( 'video', 'embedded', 'youtube', 'iframe', 'image' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Video Section

// Start of Image + Icon Content Section
add_action( 'acf/init', 'two_col_image_icon');
function two_col_image_icon() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'two_col_image_icon',
      'title'             => __('Image + Icon Content Section'),
      'description'       => __('Sef block for Video Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/image-icon-content.php',
      'category'          => 'sef-blocks',
      'icon'              => 'align-pull-left',
      'keywords'          => array( 'two', 'row', 'col', 'icon', 'image' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Image + Icon Content Section


// Start of Image + Icon Content Section
add_action( 'acf/init', 'integration_partners');
function integration_partners() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'integration_partners',
      'title'             => __('Integration + Technology Partners'),
      'description'       => __('Sef block for Integration + Technology Partners Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/integration-partners.php',
      'category'          => 'sef-blocks',
      'icon'              => 'grid-view',
      'keywords'          => array( 'logo', 'grid', 'Technology', 'partnership', 'image' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Image + Icon Content Section


// Start of Single Image Section
add_action( 'acf/init', 'single_image_section');
function single_image_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'single_image_section',
      'title'             => __('Single Image Section'),
      'description'       => __('Sef block for Single Image Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/single-image-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'grid-view',
      'keywords'          => array( 'single', 'image', 'section' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Single Image Section

// Start of NTC Case Studies Section
add_action( 'acf/init', 'ntc_case_studies_section');
function ntc_case_studies_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'ntc_case_studies_section',
      'title'             => __('NTC Case Study Section'),
      'description'       => __('Sef block for NTC Case Study Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/ntc-case-study-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'grid-view',
      'keywords'          => array( 'case study', 'grid', 'section' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of NTC Case Studies Section

// Start of NTC Case Studies Section
add_action( 'acf/init', 'partner_case_studies_section');
function partner_case_studies_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'partner_case_studies_section',
      'title'             => __('Partner Case Study Section'),
      'description'       => __('Sef block for Partner Case Study Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/partner-case-study-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'grid-view',
      'keywords'          => array( 'case study', 'partner', 'section' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of NTC Case Studies Section

// Start of Video Case Study Section
add_action( 'acf/init', 'video_case_studies_section');
function video_case_studies_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'video_case_studies_section',
      'title'             => __('Video Case Study Section'),
      'description'       => __('Sef block for Video Case Study Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/video-case-study-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'grid-view',
      'keywords'          => array( 'case study', 'videos', 'section' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Video Case Study Section

// Start of Transcript Highlight Section
add_action( 'acf/init', 'transcript_highlight_section');
function transcript_highlight_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'transcript_highlight_section',
      'title'             => __('Transcript Highlight Section'),
      'description'       => __('York block for Transcript Highlight Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/transcript-highlight-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'align-pull-left',
      'keywords'          => array( 'transcript', 'highlight', 'section' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Transcript Highlight Section

// Start of Full Transcript Section
add_action( 'acf/init', 'full_transcript_section');
function full_transcript_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'full_transcript_section',
      'title'             => __('Full Transcript Section'),
      'description'       => __('York block for Full Transcript Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/full-transcript-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'editor-justify',
      'keywords'          => array( 'transcript', 'full', 'section' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Full Transcript Section

// Start of Related Video Case Studies Section
add_action( 'acf/init', 'related_video_casestudies_section');
function related_video_casestudies_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'related_video_casestudies_section',
      'title'             => __('Related Video Case Studies Section'),
      'description'       => __('York block for Related Video Case Studies Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/related-video-casestudies-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'columns',
      'keywords'          => array( 'related', 'video', 'case studies' ),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Related Video Case Studies Section

// Start of Related Video Case Studies Section
add_action( 'acf/init', 'table_of_content_section');
function table_of_content_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'table_of_content_section',
      'title'             => __('Table of Content Section'),
      'description'       => __('York block for Table of Content Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/table-of-content-section-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'columns',
      'keywords'          => array( 'table', 'content'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Related Video Case Studies Section

// Start of Related Video Case Studies Section
add_action( 'acf/init', 'support_two_column_section');
function support_two_column_section() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'support_two_column_section',
      'title'             => __('Support two Column Section'),
      'description'       => __('York block for Support two Column Section.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/support-two-column-section.php',
      'category'          => 'sef-blocks',
      'icon'              => 'columns',
      'keywords'          => array( 'support', 'column'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Related Video Case Studies Section



// Start of Related York book description
add_action( 'acf/init', 'york_book_desc');
function york_book_desc() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'york_book_description',
      'title'             => __('York book description'),
      'description'       => __('York block for Support York book description.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/york-book-description.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-text',
      'keywords'          => array( 'York', 'book ', 'description'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Related York book description




// Start of York Video webinar description section
add_action( 'acf/init', 'york_video_webinar_desc');
function york_video_webinar_desc() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'york_video_webinar_desc',
      'title'             => __('York video with description'),
      'description'       => __('York block for Support York webinar description.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/york-webinar-description.php',
      'category'          => 'sef-blocks',
      'icon'              => 'format-video',
      'keywords'          => array( 'York', 'webinar ', 'description'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of York Video webinar description section


// Start of York Related Webinar Video section
add_action( 'acf/init', 'york_related_webinar_video');
function york_related_webinar_video() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'york_related_webinar_video',
      'title'             => __('York Related Webinar Video'),
      'description'       => __('York block for Support York related video.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/york-related-webinar-video.php',
      'category'          => 'sef-blocks',
      'icon'              => 'embed-video',
      'keywords'          => array( 'York', 'webinar ', 'Related', 'video'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of York Related Webinar Video section


// Start of Sef NautobotGPT CTA
add_action( 'acf/init', 'sef_nautobotGPT_CTA');
function sef_nautobotGPT_CTA() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_nautobotGPT_CTA',
      'title'             => __('Sef NautobotGPT CTA'),
      'description'       => __('York block for Support NautobotGPT CTA.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nautobotgpt-cta.php',
      'category'          => 'sef-blocks',
      'icon'              => 'text-page',
      'keywords'          => array( 'sef', 'Product ', 'NautobotGPT', 'CTA'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of York Product breaf CTA




// Start of Sef heading with content
add_action( 'acf/init', 'sef_heading_with_content');
function sef_heading_with_content() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_heading_with_content',
      'title'             => __('Sef heading with content'),
      'description'       => __('York block for Support Heading With Content.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/heading-with-content.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-text',
      'keywords'          => array( 'sef', 'heading ', 'with', 'content'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef heading with content


// Start of Sef Image with bullet points 
add_action( 'acf/init', 'sef_image_with_content');
function sef_image_with_content() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_image_with_content',
      'title'             => __('Sef Image with Content'),
      'description'       => __('York block for Image with Content.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/image-with-content.php',
      'category'          => 'sef-blocks',
      'icon'              => 'menu-alt3',
      'keywords'          => array( 'sef', 'image ', 'with', 'content'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef image with bullets points




// Start of Sef box content
add_action( 'acf/init', 'sef_box_content');
function sef_box_content() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_box_content',
      'title'             => __('Sef box content'),
      'description'       => __('York block for box content.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/box-content.php',
      'category'          => 'sef-blocks',
      'icon'              => 'format-video',
      'keywords'          => array( 'sef','content', 'box'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef box content


// Start of Sef Bullets point with video
add_action( 'acf/init', 'sef_bullets_points_with_video');
function sef_bullets_points_with_video() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_bullets_points_with_video',
      'title'             => __('Sef Bullets point with video'),
      'description'       => __('York block for Bullets point with video.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-bullets-points-with-video.php',
      'category'          => 'sef-blocks',
      'icon'              => 'media-text',
      'keywords'          => array( 'sef', 'bullets ', 'points', 'with', 'video'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef Bullets point with video




// Start of Sef Two box content
add_action( 'acf/init', 'sef_two_box_content');
function sef_two_box_content() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_two_box_content',
      'title'             => __('Sef Two box content'),
      'description'       => __('York block for Two box content.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-two-box-content.php',
      'category'          => 'sef-blocks',
      'icon'              => 'columns',
      'keywords'          => array( 'sef', 'two ', 'box', 'content'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef Two box content


// Start of Sef cards
add_action( 'acf/init', 'sef_cards');
function sef_cards() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_cards',
      'title'             => __('Sef Cards'),
      'description'       => __('York block for Cards.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-cards.php',
      'category'          => 'sef-blocks',
      'icon'              => 'columns',
      'keywords'          => array( 'sef', 'cards '),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef cards



// Start of Sef Tab For Success Stories
add_action( 'acf/init', 'sef_tab_success_stories');
function sef_tab_success_stories() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_tab_success_stories',
      'title'             => __('Sef Tab For Success Stories'),
      'description'       => __('York block for Success Stories.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-tab-success-stories.php',
      'category'          => 'sef-blocks',
      'icon'              => 'table-row-before',
      'keywords'          => array( 'sef', 'success', 'stories'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef Tab For Success Stories


// Start of Sef Tab For Success Stories
add_action( 'acf/init', 'nautobot_cloud_offers_table');
function nautobot_cloud_offers_table() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nautobot_cloud_offers_table',
      'title'             => __('Sef Nautobot Cloud Offers Table'),
      'description'       => __('York block for Nautobot Cloud Offers Table.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nc-offers-table.php',
      'category'          => 'sef-blocks',
      'icon'              => 'table-row-before',
      'keywords'          => array( 'sef', 'table', 'addon', 'NC'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef Tab For Success Stories

// Start of Sef Tab For Success Stories
add_action( 'acf/init', 'nautobot_cloud_plans');
function nautobot_cloud_plans() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nautobot_cloud_plans',
      'title'             => __('Sef Nautobot Cloud Plans'),
      'description'       => __('York block for Nautobot Cloud Plans Cards.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nc-plans.php',
      'category'          => 'sef-blocks',
      'icon'              => 'table-row-before',
      'keywords'          => array( 'sef', 'table', 'addon', 'NC Plan'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef Tab For Success Stories



// Start of Sef Related Podcast
add_action( 'acf/init', 'related_podcast');
function related_podcast() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'related_podcast',
      'title'             => __('Sef Related Podcast'),
      'description'       => __('York block for Related Podcast.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-related-podcast.php',
      'category'          => 'sef-blocks',
      'icon'              => 'table-row-before',
      'keywords'          => array( 'sef', 'related', 'podcast'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef Related Podcast


// Start of Sef Legal pages
add_action( 'acf/init', 'sef_legal_pages');
function sef_legal_pages() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_legal_pages',
      'title'             => __('Sef Legal pages'),
      'description'       => __('York block for Legal Pages.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-legal-pages.php',
      'category'          => 'sef-blocks',
      'icon'              => 'table-row-before',
      'keywords'          => array( 'sef', 'legal', 'pages'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef Legal pages




// Start of Sef Boxes
add_action( 'acf/init', 'sef_boxes');
function sef_boxes() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_boxes',
      'title'             => __('Sef Boxes'),
      'description'       => __('York block for Boxes.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-boxes.php',
      'category'          => 'sef-blocks',
      'icon'              => 'editor-table',
      'keywords'          => array( 'sef', 'boxes'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Sef Boxes


// Start of Open Source - Network Belief
add_action( 'acf/init', 'open_source_network_belief');
function open_source_network_belief() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'open_source_network_belief',
      'title'             => __('Open Source - Network Belief'),
      'description'       => __('York block for Boxes.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/os-network-belief.php',
      'category'          => 'sef-blocks',
      'icon'              => 'editor-table',
      'keywords'          => array( 'Open Source', 'Network Belief'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Open Source - Network Belief


// Start of Open Source - Testimonial
add_action( 'acf/init', 'open_source_testimonial');
function open_source_testimonial() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'open_source_testimonial',
      'title'             => __('Open Source - Testimonial'),
      'description'       => __('York block for Testimonial Boxes. To update testimonial content you need to go to testimonial post type.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/os-testimonial.php',
      'category'          => 'sef-blocks',
      'icon'              => 'cover-image',
      'keywords'          => array( 'Open Source', 'Testimonial'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Open Source - Testimonial


// Start of Open Source - Automation Block
add_action( 'acf/init', 'open_source_automation_block');
function open_source_automation_block() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'open_source_automation_block',
      'title'             => __('Open Source - Automation Block'),
      'description'       => __('York block for Automation Block.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/os-automation-block.php',
      'category'          => 'sef-blocks',
      'icon'              => 'welcome-widgets-menus',
      'keywords'          => array( 'Open Source', 'Automation Block'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Open Source - Automation Block


// Start of Open Source - Project by NTC
add_action( 'acf/init', 'open_source_projectbyntc');
function open_source_projectbyntc() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'open_source_projectbyntc',
      'title'             => __('Open Source - Project by NTC'),
      'description'       => __('York block for Project by NTC.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/os-projectbyntc.php',
      'category'          => 'sef-blocks',
      'icon'              => 'grid-view',
      'keywords'          => array( 'Open Source', 'Project by NTC'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Open Source - Project by NTC


// Start of Faq Banner  - Project by NTC
add_action( 'acf/init', 'faq_banner');
function faq_banner() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'faq_banner',
      'title'             => __('FAQ Banner'),
      'description'       => __('York block for FAQ Banner.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/faq-banner.php',
      'category'          => 'sef-blocks',
      'icon'              => 'slides',
      'keywords'          => array( 'FAQ', 'Banner'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Faq Banner - Project by NTC


// Start of Faq Accordion  - Project by NTC
add_action( 'acf/init', 'faq_accordion');
function faq_accordion() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'faq_accordion',
      'title'             => __('Faq Accordion'),
      'description'       => __('York block for Project by NTC.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/faq-accordion.php',
      'category'          => 'sef-blocks',
      'icon'              => 'editor-kitchensink',
      'keywords'          => array( 'FAQ', 'Accordion'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Faq Accordion - Project by NTC


// Start of Two box cta  - Project by NTC
add_action( 'acf/init', 'twobox_cta');
function twobox_cta() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'twobox_cta',
      'title'             => __('Two box cta'),
      'description'       => __('York block for Two box CTA.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/twobox-cta.php',
      'category'          => 'sef-blocks',
      'icon'              => 'excerpt-view',
      'keywords'          => array( 'Two', 'Box', 'CTA'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Two box cta - Project by NTC


// Start of Resource Box content  - Project by NTC
add_action( 'acf/init', 'resource_box_content');
function resource_box_content() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'resource_box_content',
      'title'             => __('Resource box Content'),
      'description'       => __('York block for Resource Box content.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/resource-box-content.php',
      'category'          => 'sef-blocks',
      'icon'              => 'grid-view',
      'keywords'          => array( 'Resource', 'Box', 'Content'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Resource Box content - Project by NTC




// Start of Box content with cta  - Project by NTC
add_action( 'acf/init', 'box_contentwith_cta');
function box_contentwith_cta() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'box_contentwith_cta',
      'title'             => __('Box Content With CTA'),
      'description'       => __('York block for Box content with cta.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/box-contentwith-cta.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Box', 'Content', 'with', 'cta'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Box content with cta - Project by NTC


// Start of Nautobot Open Source Apps  - Project by NTC
add_action( 'acf/init', 'nb_oss_apps');
function nb_oss_apps() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nb_oss_apps',
      'title'             => __('Nautobot Open Source Apps'),
      'description'       => __('York block for Nautobot Open Source Apps.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nb-oss-apps.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Open', 'Source', 'Apps', 'nautobot'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Nautobot Open Source Apps - Project by NTC

// Start of Nautobot Stand Alone Apps  - Project by NTC
add_action( 'acf/init', 'nb_standalone_app');
function nb_standalone_app() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nb_standalone_app',
      'title'             => __('Nautobot Stand Alone App'),
      'description'       => __('York block for Nautobot Stand Alone App.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nb-standalone-app.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Stand Alone', 'App', 'nautobot'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Nautobot Stand Alone Apps - Project by NTC


// Start of Nautobot Popular Apps  - Project by NTC
add_action( 'acf/init', 'nb_popular_app');
function nb_popular_app() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nb_popular_app',
      'title'             => __('Nautobot Popular Apps'),
      'description'       => __('York block for Nautobot Popular Apps.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nb-popular-apps.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Popular', 'Apps', 'nautobot'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Nautobot Popular Apps - Project by NTC


// Start of Nautobot Search Apps
add_action( 'acf/init', 'nb_search_app');
function nb_search_app() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nb_search_app',
      'title'             => __('Nautobot Search Apps'),
      'description'       => __('York block for Nautobot Search Apps.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nautobot-app-search.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Accordion', 'Ecosystem', 'Explore'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Nautobot Nautobot Search Apps

// Start of Nautobot Professional Apps
add_action( 'acf/init', 'nb_professional_app');
function nb_professional_app() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nb_professional_app',
      'title'             => __('Nautobot Professional Apps'),
      'description'       => __('York block for Nautobot Professional Apps.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nautobot-professional-apps.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Nautobot', 'Professional', 'Apps'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Nautobot Nautobot Professional Apps

// Start of Nautobot Professional Apps
add_action( 'acf/init', 'nb_enterprise_app');
function nb_enterprise_app() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nb_enterprise_app',
      'title'             => __('Nautobot Enterprise Apps'),
      'description'       => __('York block for Nautobot Enterprise Apps.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nautobot-enterprise-apps.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Nautobot', 'Enterprise', 'Apps'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Nautobot Nautobot Professional Apps


// Start of Nautobot App Description
add_action( 'acf/init', 'nb_app_description');
function nb_app_description() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nb_app_description',
      'title'             => __('Nautobot App Description'),
      'description'       => __('York block for Nautobot App Description.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nautobot-apps-description.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Nautobot', 'Description', 'Apps'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Nautobot Nautobot App Description

// Start of Nautobot App Screenshots
add_action( 'acf/init', 'nb_app_screenshots');
function nb_app_screenshots() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nb_app_screenshots',
      'title'             => __('Nautobot App Screenshots'),
      'description'       => __('York block for Nautobot App Screenshots.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nautobot-apps-screenshots.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Nautobot', 'Screenshots', 'App'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Nautobot Nautobot App Screenshots

// Start of Nautobot App Screenshots
add_action( 'acf/init', 'nb_app_info');
function nb_app_info() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'nb_app_info',
      'title'             => __('Nautobot App Info'),
      'description'       => __('York block for Nautobot App Info.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/nautobot-apps-info.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Nautobot', 'info', 'App'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Nautobot Nautobot App Screenshots



// Start of Cta with Review
add_action( 'acf/init', 'cta_with_review');
function cta_with_review() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'cta_with_review',
      'title'             => __('Cta with Review'),
      'description'       => __('York block for Cta with Review.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/ctawith-review.php',
      'category'          => 'sef-blocks',
      'icon'              => 'button',
      'keywords'          => array( 'Cta', 'with', 'Review'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
      // 'enqueue_assets'    => get_assets_ntc(),          
    ) );
  }

}
// End of Cta with Review

// Start of Three Icon Box
add_action( 'acf/init', 'sef_three_icon_box');
function sef_three_icon_box() {

   // Check function exists.
  if( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type( array(
      'name'              => 'sef_three_icon_box',
      'title'             => __('Three Icon Box'),
      'description'       => __('Sef block for Three Icon Box.'),
      'render_template'   => plugin_dir_path( __FILE__ ) .'template-parts/sef-three-icon-box.php',
      'category'          => 'sef-blocks',
      'icon'              => 'screenoptions',
      'keywords'          => array( 'Three', 'Icon', 'Box'),
      'supports' => array( 'anchor' => true, 'jsx' => true, ),
    ) );
  }

}
// End of Three Icon Box
?>