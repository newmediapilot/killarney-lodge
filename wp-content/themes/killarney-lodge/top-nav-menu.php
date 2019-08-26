<!-- begin top-nav-menu -->

<?php $home_menu = wp_get_nav_menu_items('Home Menu'); ?>
<?php $main_menu = wp_get_nav_menu_items('Default Top Menu'); ?>
<?php $phone_menu = wp_get_nav_menu_items('Phone Menu'); ?>
<?php $reservation_menu = wp_get_nav_menu_items('Reservation Menu'); ?>

<?php
$main_menu_parents = array_filter($main_menu, function ($footer_item) {
    return $footer_item->menu_item_parent == "0";
});
foreach ($main_menu_parents as $menu_item_parent) {
    $menu_item_parent->menu_item_children = array_filter($main_menu, function ($footer_item) use ($menu_item_parent) {
        return $footer_item->menu_item_parent == $menu_item_parent->ID;
    });
}
//var_dump($main_menu_parents);
?>

<nav class="kl-navbar--desktop">
    <!-- top-nav-desktop -->
    <div class="kl-navbar-wrapper">
        <div class="kl-navbar--holder">

            <div class="kl-navbar--menu">
                <a href="<?php echo $home_menu[0]->url ?>"
                   title="<?php echo $home_menu[0]->title ?>">
                    <img src="/wp-content/themes/killarney-lodge/res/LOGO.png"
                         alt="<?php echo $home_menu[0]->title ?>">
                </a>
            </div>

            <div class="kl-navbar--items">

                <nav class="navbar navbar-expand-lg navbar-light">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <?php foreach ($main_menu_parents as $main_menu_parent) { ?>
                                <!-- normal menu type -->
                                <?php if (empty($main_menu_parent->menu_item_children)) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="<?php echo $main_menu_parent->url ?>"
                                           title="<?php echo $main_menu_parent->title ?>">
                                            <?php echo $main_menu_parent->title ?>
                                        </a>
                                    </li>
                                <?php } ?>
                                <!-- end normal menu type -->
                                <!-- dropdown menu type -->
                                <?php if (!empty($main_menu_parent->menu_item_children)) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle"
                                           href="<?php echo $main_menu_parent->url ?>"
                                           id="navbarDropdown<?php echo $main_menu_parent->id ?>"
                                           role="button"
                                           title="<?php echo $main_menu_parent->title ?>"
                                           data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <?php echo $main_menu_parent->title ?>
                                        </a>
                                        <div class="dropdown-menu"
                                             aria-labelledby="navbarDropdown<?php echo $main_menu_parent->id ?>">
                                            <?php foreach ($main_menu_parent->menu_item_children as $menu_child) { ?>
                                                <a class="dropdown-item" title="<?php echo $menu_child->title ?>"
                                                   href="<?php echo $menu_child->url ?>"><?php echo $menu_child->title ?></a>
                                            <?php } ?>
                                        </div>
                                    </li>
                                <?php } ?>
                                <!-- end dropdown menu type -->
                            <?php } ?>
                        </ul>
                    </div>
                </nav>

            </div>
            <div class="kl-navbar--phone">
                <a href="<?php echo $phone_menu[0]->url ?>"
                   title="<?php echo $phone_menu[0]->title ?>">
                    <div class="kl-navbar--phone-number"><?php echo $phone_menu[0]->attr_title ?></div>
                    <div class="kl-navbar--phone-title"><?php echo $phone_menu[0]->title ?></div>
                </a>
            </div>
        </div>
    </div><!-- end top-nav-desktop -->
    <!-- book now -->
    <a href="<?php echo $reservation_menu[0]->url ?>"
       target="_blank"
       title="<?php echo $reservation_menu[0]->title ?>"
       class="kl-navbar--book-now">
        <span>
        B<br>
        O<br>
        O<br>
        K<br>
        &nbsp;<br>
        H<br>
        E<br>
        R<br>
        E</span>
    </a>
    <!-- end book now -->
</nav>

<!-- end top-nav-menu -->