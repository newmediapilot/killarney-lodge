<!-- begin header.php -->

<!DOCTYPE html>

<html lang="en">
<head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <?PHP wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php include 'top-nav-menu.php'; ?>

<!-- end header.php -->