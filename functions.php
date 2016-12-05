<?php

//load class
  function load_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'load_style');

  register_nav_menus(array(
    'main_menu' => 'Menu Utama',
    'footer_menu' => 'Footer Utama'
  ));

  function get_excerpt_length(){
    return 35;
  }

  function return_excerpt_text(){
    return '';
  }

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');
 ?>
