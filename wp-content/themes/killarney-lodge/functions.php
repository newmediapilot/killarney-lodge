<?php

function load_stylesheets()
{
    wp_register_style('framework-styles', get_template_directory_uri() . '/dist/all.css');
    wp_enqueue_style('framework-styles');
}

function load_javascripts()
{
    wp_register_script('framework-javascript', get_template_directory_uri() . '/dist/all.js', '', 1, true);
    wp_enqueue_script('framework-javascript');

    wp_register_script('popper-javascript', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', '', 1, true);
    wp_enqueue_script('popper-javascript');

    wp_register_script('bootstrap-javascript', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script('bootstrap-javascript');

    wp_register_script('fontawesome-javascript', 'https://kit.fontawesome.com/e696fc9d2a.js', '', 1, true);
    wp_enqueue_script('fontawesome-javascript');
}

function add_meta_tags()
{
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
    echo '<meta name="keywords"  content="algonquin park lodge, algonquin park pine cabin, algonquin park accommodation, algonquin park lodge ontario, algonquin park cabin rental, algonquin lakeside inn" />';
}

function add_link_tags()
{
    echo '<link rel="icon" href="/wp-content/themes/framework-lodge/res/favicon.ico">';
}

add_action('wp_head', 'add_meta_tags');
add_action('wp_head', 'add_link_tags');
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_javascripts');

add_theme_support('menus');

add_filter( 'widget_text', 'do_shortcode' );

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
 * Function to use a template for a specific post category
 */
function check_for_category_single_template( $t )
{
    foreach( (array) get_the_category() as $cat )
    {
        if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
        if($cat->parent)
        {
            $cat = get_the_category_by_ID( $cat->parent );
            if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
        }
    }
    return $t;
}
add_filter('single_template', 'check_for_category_single_template');

add_theme_support( 'title-tag' );

/**
 * end functions.php
 */