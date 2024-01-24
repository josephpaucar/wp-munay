<?php 

function init_template(){

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

register_nav_menus(
    array(
        'top_menu' => 'Menú Principal'
    )
);

}

add_action( 'after_setup_theme', 'init_template');

function assets(){

  wp_register_style( 'heebo', 'https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap','','1.0','all');

  wp_enqueue_style('estilos', get_stylesheet_uri(), array( 'heebo' ), '1.0', 'all');

  wp_enqueue_style( 'custom', get_template_directory_uri(  ).'/assets/css/custom.css', array(), '1.0', 'all' );
  wp_enqueue_script( 'custom', get_template_directory_uri(  ).'/assets/js/custom.js', '', '1.0', true );
  
}

add_action( 'wp_enqueue_scripts', 'assets' );