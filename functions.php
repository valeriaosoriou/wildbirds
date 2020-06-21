<?php
//-------------------- HEADER: STYLESHEETS, BOOTSTRAP AND JS-------------------//
function add_css_js() {
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300;400&display=swap'); //google-fonts CDN
  wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(),'5.13.0', false);//font awesome CDN
  wp_enqueue_style( 'style', get_stylesheet_uri()); //style.css
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'false', 'all'); //boostrap CSS
  
  
  wp_enqueue_script( 'jquery'); //jquery
  wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '1.14', true); //Popper CDN
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true); //bootstrap JS
  wp_enqueue_script( 'js', get_template_directory_uri() . '/js/script.js', array('bootstrap'), '1.0', true);//custom JS
}
add_action( 'wp_enqueue_scripts', 'add_css_js' );

//------------------------------ MENU ------------------------------------//
// function wildbirs_register_nav_menus() {
//   register_nav_menus(
//     array(
//       'Principal menu' => __( 'Header Menu' )
//       // 'extra-menu' => __( 'Extra Menu' )
//     )
//   );
// }
// add_action( 'init', 'wildbirs_register_nav_menus' );

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
function theme_setup(){
  // Menus
    register_nav_menus(
      array(
        // location of menu => What it is called on wordpress customise
        'primary' => __('Header Menu', 'wildbirds'),
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
        'social-menu' => 'Social media menu controls'
      )
    );
  }

  // <a> CLASS (can be done in CSS)
    add_filter('nav_menu_link_attributes', 'a_class_nav', 10, 3);
      function a_class_nav ($atts, $item, $args){
        $class = 'nav-link';
        $atts ['class'] = $class;
        return $atts;
      }
      add_filter( 'nav_menu_link_attributes', 'a_class_nav', 10, 3 );
//-----------------------------------HEADER -------------------------------//
// $args = array(
//   'flex-width'    => true,
//   'header-text'   => true,
//   'width'         => 1920,
//   'flex-height'   => true,
//   'height'        => 800,
//   'default-image' => get_template_directory_uri() . '/images/header.jpg',
// );
// add_theme_support( 'custom-header', $args );

//----------------------------- LOGO ------------------------------------//
function wildbirs_custom_logo_setup() { //Adding custom logo with 5 arguments
  $defaults = array(
    'height'      => 50,
    'width'       => 50,
    'flex-height' => false,
    'flex-width'  => false,
    'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults ); 
}
add_action( 'after_setup_theme', 'wildbirs_custom_logo_setup' );

//-------------------------------- THUMBNAIL IMAGES POST -------------------//
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

//----------------------------------SIDEBAR ---------------------------------//
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'My primary custom sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-3 customwidget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3><hr>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
  //   register_sidebar(
  //     array(
  //         'id'            => 'woocommerce',
  //         'name'          => __( 'Shop Sidebar' ),
  //         'description'   => __( 'My shop custom sidebar.' ),
  //         'before_widget' => '<div id="%1$s" class="widget %2$s my-3 customwidget">',
  //         'after_widget'  => '</div>',
  //         'before_title'  => '<h3 class="widget-title">',
  //         'after_title'   => '</h3><hr>',
  //     )
  // );
}

//------------------------------------WOOCOMMERCE ---------------------------------//
//unhook WC wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//hook
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

//---------------------------------Theme customization API-----------------------------//
require_once get_template_directory() . '/customizer.php';

//---------------------------------TAXONOMY- NON HIERARCHICAL -----------------------------//
//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );
 
function create_topics_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Topics', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Topics' ),
    'popular_items' => __( 'Popular Topics' ),
    'all_items' => __( 'All Topics' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Topic' ), 
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'separate_items_with_commas' => __( 'Separate topics with commas' ),
    'add_or_remove_items' => __( 'Add or remove topics' ),
    'choose_from_most_used' => __( 'Choose from the most used topics' ),
    'menu_name' => __( 'Topics' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('topics','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
  ));
}

//---------------------------------CUSTOM POST -----------------------------//
// Our custom post type function
function create_posttype() {
 
  register_post_type( 'movies',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Movies' ),
              'singular_name' => __( 'Movie' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'movies'),
          'show_in_rest' => true,

      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

//---------------------------------#### -----------------------------//
?>