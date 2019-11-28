<?php

function add_styles_and_scripts () {
    //  ** Load styles **
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/bootstrap.min.css'));
    wp_enqueue_style('style', get_theme_file_uri('/style.css'));
    wp_enqueue_style('slick', get_theme_file_uri('/addons/slick/slick.css'));
    wp_enqueue_style('slick-theme', get_theme_file_uri('/addons/slick/slick-theme.css'));
    wp_enqueue_style('animate', get_theme_file_uri('/animate.css'));
    wp_enqueue_style('uptop', get_theme_file_uri('/addons/uptop/css/ui.totop.css'));

    // ** Load scripts **
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-1.12.0.min.js') );
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array('jquery') );
    wp_enqueue_script('slick', get_theme_file_uri('/addons/slick/slick.min.js'), array('jquery') );
    wp_enqueue_script('masked', get_theme_file_uri('/js/jquery.maskedinput.min.js'), array('jquery') );
    wp_enqueue_script('wow', get_theme_file_uri('/js/wow.min.js'));
    wp_enqueue_script('up', get_theme_file_uri('/addons/uptop/js/jquery.ui.totop.js'), array('jquery'));
    wp_enqueue_script('up_easing', get_theme_file_uri('/addons/uptop/js/easing.js'), array('jquery'));
}

add_action('wp_enqueue_scripts', 'add_styles_and_scripts');

register_nav_menu('top', 'главное меню');










