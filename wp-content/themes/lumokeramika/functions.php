<?php

    //  ** Load bootstrap styles **
   wp_enqueue_style('bootstrap-min', get_theme_file_uri('/bootstrap.min.css'));
    // ** Load project common styles **
    wp_enqueue_style('style', get_theme_file_uri('/style.css'));
    // ** Load bootsrap script **
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array('jquery') );

    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-1.12.0.min.js') );
