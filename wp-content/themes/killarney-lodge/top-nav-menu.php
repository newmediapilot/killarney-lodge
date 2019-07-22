<!-- begin top-nav-menu -->

<?php $home_menu = wp_get_nav_menu_items('Home Menu'); ?>
<?php $main_menu = wp_get_nav_menu_items('Main Menu'); ?>
<?php $phone_menu = wp_get_nav_menu_items('Phone Menu'); ?>
<?php $reservation_menu = wp_get_nav_menu_items('Reservation Menu'); ?>

<nav class="kl-navbar--mobile">
    <div class="kl-navbar--mobile--wrapper">
        <div class="kl-navbar--mobile--trigger">

        </div>
    </div>
</nav>

<nav class="kl-navbar--desktop">
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
                <ul>
                    <?php foreach ($main_menu as $menu_item) { ?>
                        <li>
                            <a href="<?php echo $menu_item->url ?>"
                               title="<?php echo $menu_item->title ?>"><?php echo $menu_item->title ?></a>
                        </li>
                    <?php } ?>
                </ul>
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
</nav>

<!-- end top-nav-menu -->