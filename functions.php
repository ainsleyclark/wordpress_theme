<?php

wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js', array('jquery'), null, true);


//Add Widget Locations
function widgetInit() {

    //Main SideBar
    register_sidebar( 
        array(
            'name' => 'Side Bar',
            'id' => 'side_bar',
            'description' => __( 'This sidebar will display only on the contact page.'),
            'before_widget' => '<div class="sidebar_widget">',
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar_widget_title">',
            'after_title' => '</div>'
            )
        );

    //Footer Area 1
    register_sidebar(
        array(
            'id' => 'footer1',
            'name' => __('Footer Area 1'),
            'description' => __( 'This sidebar will display only in the footer on the left.'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<div class="footer_widget_title">',
            'after_title' => '</div>'
            )
        );

    //Footer Area 2
    register_sidebar(
        array(
            'id' => 'footer2',
            'name' => __('Footer Area 2'),
            'description' => __( 'This sidebar will display only in the footer in the middle left'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<div class="footer_widget_title">',
            'after_title' => '</div>'
            )
        );

    //Footer Area 3
    register_sidebar(
        array(
            'id' => 'footer3',
            'name' => __('Footer Area 3'),
            'description' => __( 'This sidebar will display only in the footer in the middle right'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<div class="footer_widget_title">',
            'after_title' => '</div>'
            )
        );

    //Footer Area 3
    register_sidebar(
        array(
            'id' => 'footer4',
            'name' => __('Footer Area 4'),
            'description' => __( 'This sidebar will display only in the footer on the right'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<div class="footer_widget_title">',
            'after_title' => '</div>'
            )
        );

}

add_action('widgets_init', 'widgetInit');

function theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);


function theme_Setup() {

    //Register Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Navigation Menu' ),
        'footer' => __( 'Footer Menu' ),
    ));
    //Add featured image support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_Setup');

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
?>