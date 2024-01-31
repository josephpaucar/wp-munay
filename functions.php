<?php 

function init_template(){

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

register_nav_menus(
    array(
        'top_menu' => 'Menú Principal',
        'footer_menu' => 'Menú en el Footer'
    )
);

}

add_action( 'after_setup_theme', 'init_template');

function assets(){

  wp_register_style( 'heebo', 'https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap','','1.0','all');

  wp_enqueue_style('estilos', get_stylesheet_directory_uri(), array( 'heebo' ), '1.0', 'all');

  wp_enqueue_style( 'custom', get_stylesheet_directory_uri().'/assets/css/custom.css', array(), '1.0', 'all' );
  wp_enqueue_script( 'custom', get_stylesheet_directory_uri().'/assets/js/custom.js', '', '1.0', true );
  
}

add_action( 'wp_enqueue_scripts', 'assets', 11 );


function sidebar_footer() {
  register_sidebar( 
    array(
      'name' => 'Pie de página',
      'id' => 'footer',
      'description' => 'Zona de Widgets para pie de página',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
      'before_widget' => '<div id="%1$s" class="%2$s">',
      'after_widget' => '</div>'
    )
  );
}

add_action( 'widgets_init', 'sidebar_footer' );