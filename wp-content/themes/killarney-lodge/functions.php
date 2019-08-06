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

function add_meta_tags()
{
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
    echo '<meta name="description"  content="Killarney Lodge photo gallery showcases the ultimate experience of wilderness which completely fetched the rustic beauty of the wild Algonquin Park landscape." />';
    echo '<meta name="keywords"  content="algonquin park lodge,algonquin park tour,algonquin park cottage,algonquin cottage rental,algonquin park lodge activities,algonquin camping,algonquin park inn" />';
}

function add_link_tags()
{
    echo '<link rel="icon" href="/wp-content/themes/killarney-lodge/res/favicon.ico">';
}

add_action('wp_head', 'add_meta_tags');
add_action('wp_head', 'add_link_tags');
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
 * Disable the emoji's
 */
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin
 */
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/**
 * end functions.php
 */