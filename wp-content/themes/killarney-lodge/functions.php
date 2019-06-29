<?php

function load_stylesheets()
{
    wp_register_style('killarney-styles', get_template_directory_uri() . '/dist/all.css');
    wp_enqueue_style('killarney-styles');
}

function load_javascripts()
{
    wp_register_script('killarney-javascript', get_template_directory_uri() . '/dist/all.js', '', 1, true);
    wp_enqueue_script('killarney-javascript');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_javascripts');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);