<?php

// Activation de la zone de menu 

add_theme_support('nav_menus'); // Active les menus sur WordPress
register_nav_menu('header', 'Menu Header'); // Création du menu header
register_nav_menu('footer', 'Menu Footer'); // Création du menu footer

// Ajout d'une zone de widget

function my_sidebar() {
  register_sidebar(
    array (
      'name' => __('Sidebar', 'sidebar'),
      'id' => 'sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    )
  );
}

add_action('widgets_init', 'my_sidebar');

// Activation des images à la une sur les posts

add_theme_support('post-thumbnails');
