<?php 

add_theme_support( 'menus' );
register_nav_menus( array(
'main-nav'=>'Menu chính'
) );
function slider_post_type(){

    $label = array(
        'name' => 'Ảnh slider', 
        'singular_name' => 'Ảnh slider'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Ảnh slider',
        'supports' => array(
        	'title',
            'thumbnail'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true,
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-format-gallery',
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('slider', $args); 
 
}
add_action('init', 'slider_post_type');
function slider_post_type1(){

    $label = array(
        'name' => 'Ảnh đối tác', 
        'singular_name' => 'Ảnh đối tác'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Ảnh đối tác',
        'supports' => array(
            'title',
            'thumbnail'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true,
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-format-gallery',
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('slider-partner', $args); 
 
}
add_action('init', 'slider_post_type1');
function slider_post_type2(){

    $label = array(
        'name' => 'Ảnh báo trí', 
        'singular_name' => 'Ảnh báo trí'
    );
 

    $args = array(
        'labels' => $label, 
        'description' => 'Ảnh báo trí',
        'supports' => array(
            'title',
            'thumbnail'

        ), 
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true,
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-format-gallery',
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('slider-new', $args); 
 
}
add_action('init', 'slider_post_type2');
 ?>