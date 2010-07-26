<?php


/* //////////////////// Next is to add WP3 custom-menu ability to thematic /////////// */
/* /// http://www.divydovy.com/2010/07/wordpress-3-custom-menu-support-in-thematic/ // */
/* // Add support for WP3 custom menus */
/* add_theme_support( 'nav-menus' ); */

/* // Remove Thematic default menu */
/* function remove_thematic_menu() { */
/* remove_action('thematic_header','thematic_access',9); */
/* } */
/* add_action('init','remove_thematic_menu'); */

/* // Register the custom menu with the theme */
/* function register_custom_menu() { */
/* register_nav_menu( 'primary-menu', __( 'Primary Menu' ) ); */
/* } */
/* add_action( 'init', 'register_custom_menu' ); */

/* // Output the new menu to the thematic header */
/* function childtheme_access(){ */
/* wp_nav_menu( array('primary-menu', 'menu_class' => 'sf-menu' ) ); */
/* } */
/* add_action('thematic_header', 'childtheme_access', 4); */
?>