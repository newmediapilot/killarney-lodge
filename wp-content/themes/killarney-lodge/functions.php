<?php

function load_stylesheets()
{
    wp_register_style('killarney-styles', get_template_directory_uri().'/dist/all.css');
    wp_enqueue_style('killarney-styles');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');