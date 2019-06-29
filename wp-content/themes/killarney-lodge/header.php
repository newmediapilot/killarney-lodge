<!-- begin header.php -->

<!DOCTYPE html>
</html>
<head>
    <?PHP wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="sticky-top">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-menu'
        )
    )
    ?>
</header>

<!-- end header.php -->