<?php

    //  ** Load styles **
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/bootstrap.min.css'));
    wp_enqueue_style('style', get_theme_file_uri('/style.css'));
    wp_enqueue_style('slick', get_theme_file_uri('/addons/slick/slick.css'));
    wp_enqueue_style('slick-theme', get_theme_file_uri('/addons/slick/slick-theme.css'));


    // ** Load scripts **
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-1.12.0.min.js') );
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array('jquery') );
    wp_enqueue_script('slick', get_theme_file_uri('/addons/slick/slick.min.js'), array('jquery') );
