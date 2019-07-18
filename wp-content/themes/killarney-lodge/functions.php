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

function add_meta_tags() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
}

add_action('wp_head', 'add_meta_tags');
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_javascripts');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);
/*
 * get post by slug
 */
function wp_get_post_by_slug($slug, $post_type = 'post', $unique = true)
{
    $args = array(
        'name' => $slug,
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => 1
    );
    $my_posts = get_posts($args);
    if ($my_posts) {
        if ($unique) {
            return $my_posts[0];
        } else {
            return $my_posts;
        }
    }
    return false;
}

/**
 * get page children
 */
function wp_get_page_and_children($slug)
{
    $the_page = wp_get_post_by_slug($slug, 'page');
    return get_pages(array('child_of' => $the_page->ID, 'sort_column' => 'menu_order', 'sort_order' => 'ASC'));
}

/**
 * end functions.php
 */