<?php
function photon_enqueue_assets() {
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', array(), false );
  wp_enqueue_style( 'fancybox-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
  //wp_enqueue_script( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js' );
  wp_enqueue_script( 'fancybox-js', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery'), false, false );
 	wp_enqueue_script( 'scrollreveal',  'https://unpkg.com/scrollreveal', array(), false, false );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/script.js', array(), false, false );
}
add_action( 'wp_enqueue_scripts', 'photon_enqueue_assets' );

function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:600', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:700', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=PT+Sans', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:600,700', false );

    }

    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


// Nav menu
function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  //Add widget for footer

function photon_widgets_init(){
register_sidebar( array(
    'name' => 'Custom Footer',
    'id' => 'custom-footer',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'photon_widgets_init');


  //Add Some functionalities

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );


   /*  to add “active” class to wp_nav_menu() current menu item */

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/*
Adding custom-logo/
*/

function photon_custom_logo_setup() {
$defaults = array(
'height'      => 100,
'width'       => 100,
'flex-height' => true,
'flex-width'  => true,
'header-text' => array( 'site-title', 'site-description' ),
);
add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'photon_custom_logo_setup' );


/* ACF Blocks registration */

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

      /* ACF Header Block registration */

      acf_register_block_type(array(
          'name'              => 'header',
          'title'             => __('Header'),
          'description'       => __('A custom header block.'),
          'render_template'   => 'blocks/header-block.php',
          'category'          => 'common', // common | formatting | layout | widgets |
          'icon'              => 'admin-media',
      ));

        /* ACF Text-Media Block registration */

        acf_register_block_type(array(
            'name'              => 'text_media',
            'title'             => __('Text-Media'),
            'description'       => __('A custom text-media block.'),
            'render_template'   => 'blocks/text_media-block.php',
            'category'          => 'common', // common | formatting | layout | widgets |
            'icon'              => 'admin-media',
        ));



        /* ACF Media-Text Block registration */

        acf_register_block_type(array(
            'name'              => 'media_text',
            'title'             => __('Media-Text'),
            'description'       => __('A custom Media-text block.'),
            'render_template'   => 'blocks/media_text-block.php',
            'category'          => 'common', // common | formatting | layout | widgets |
            'icon'              => 'admin-media',
        ));

        /* ACF Text-Media-2 Block registration */

        acf_register_block_type(array(
            'name'              => 'text_media_2',
            'title'             => __('Text-Media-2'),
            'description'       => __('A custom text-media-2 block.'),
            'render_template'   => 'blocks/text_media_2-block.php',
            'category'          => 'common', // common | formatting | layout | widgets |
            'icon'              => 'admin-media',
        ));

        /* ACF Portfolio Block registration */

        acf_register_block_type(array(
            'name'              => 'portfolio',
            'title'             => __('Portfolio'),
            'description'       => __('A custom portfolio block.'),
            'render_template'   => 'blocks/portfolio-block.php',
            'category'          => 'common', // common | formatting | layout | widgets |
            'icon'              => 'admin-media',
        ));

        /* ACF Text-Post Block registration */

        acf_register_block_type(array(
            'name'              => 'text-post',
            'title'             => __('Text-Post'),
            'description'       => __('A custom text-post block.'),
            'render_template'   => 'blocks/text_post-block.php',
            'category'          => 'common', // common | formatting | layout | widgets |
            'icon'              => 'admin-media',
        ));

        /* ACF Form Block registration */

        acf_register_block_type(array(
            'name'              => 'form',
            'title'             => __('Form'),
            'description'       => __('A custom form block.'),
            'render_template'   => 'blocks/form-block.php',
            'category'          => 'common', // common | formatting | layout | widgets |
            'icon'              => 'admin-media',
        ));

      }
  }

  /* Declaring Woocommerce support */

  function photon_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'photon_add_woocommerce_support' );


/* ACF Json */

     // Save 
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
    
}

    // Load

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $paths;
    
}

/* Backend view of Blocks in Gutenberg Editor */

add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_stylesheet_directory_uri() . '/style.css');
}
