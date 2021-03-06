<?php

/*=============================
=           Widgets           =
=============================*/

function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the hompage');
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the hompage');
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the hompage');
// sidebar
create_widget( 'Page Sidebar', 'page', 'Displays on side of pages with sidebar');

/*=============================
=        Google FOnts         =
=============================*/
function tutsplus_add_google_fonts() {
  wp_register_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300');
  wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'tutsplus_add_google_fonts' );

/*=============================
=            Menus            =
=============================*/
add_theme_support( 'menus' );
function domsters_register_menu() {
  register_nav_menu('main-menu', __( 'Main Menu') );
}

add_action('init', 'domsters_register_menu');

//load css
  function theme_styles() {
      wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/basic.css' );
  }

  add_action( 'wp_enqueue_scripts', 'theme_styles' );

//load javascript
  function theme_js() {
    wp_enqueue_script( 'global_js', get_template_directory_uri() . '/js/global.js', '', '', true );
    wp_enqueue_script( 'home_js', get_template_directory_uri() . '/js/home.js', '', '', true );
    wp_enqueue_script( 'about_js', get_template_directory_uri() . '/js/about.js', '', '', true );
    wp_enqueue_script( 'photos_js', get_template_directory_uri() . '/js/photos.js', '', '', true );
    wp_enqueue_script( 'contact_js', get_template_directory_uri() . '/js/contact.js', '', '', true );
  }

  add_action( 'wp_enqueue_scripts', 'theme_js' );
