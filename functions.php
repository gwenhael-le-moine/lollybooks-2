<?php
if (function_exists('register_sidebar')) {
   register_sidebar(array(
                       'before_widget' => '<li id="%1$s" class="widget %2$s">',
                       'after_widget' => '</li>',
                       'before_title' => '<h2 class="widgettitle">',
                       'after_title' => '</h2>',
                       ));
}

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
   register_nav_menus(
      array(
         'menu' => __( 'Menu' )
         )
      );
}
?>