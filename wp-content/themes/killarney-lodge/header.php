<!-- begin header.php -->

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <?php
        global $post;
        $master = $post;
        $seo_title_source = get_metadata('post', $master->ID, 'title', true);
        $seo_description_source = get_metadata('post', $master->ID, 'description', true);
    ?>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?><?php if($seo_title_source){ echo ' &raquo; '.$seo_title_source; } ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
    <?php if($seo_description_source){ echo '<meta name="description" content="'.$seo_description_source.'" />'; } ?>
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