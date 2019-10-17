<!-- begin header.php -->

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
    <?PHP wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23837992-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23837992-1');
    </script>
</head>
<body <?php body_class(); ?>>

<?php include 'top-nav-menu.php'; ?>

<!-- end header.php -->