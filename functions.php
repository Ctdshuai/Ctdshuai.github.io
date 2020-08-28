<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));


//添加菜单功能
if (function_exists('add_theme_support')) {
add_theme_support('nav-menus');
register_nav_menus( array( 'primary' => __( 'Primary Navigation', 'primary' ) ) );
}
?>