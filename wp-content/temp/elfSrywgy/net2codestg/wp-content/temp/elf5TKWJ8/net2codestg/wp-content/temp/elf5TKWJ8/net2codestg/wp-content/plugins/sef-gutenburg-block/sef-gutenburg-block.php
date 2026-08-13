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

?>