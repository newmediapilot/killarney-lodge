<!-- begin header.php -->

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
    <?PHP wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php include 'top-nav-menu.php'; ?>

<!-- end header.php -->