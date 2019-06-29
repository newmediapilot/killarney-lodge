<?php $homepage = get_page_by_path('homepage_main'); ?>
<?php $homepage_section_1 = get_page_by_path('homepage_section_1'); ?>
<?php $homepage_section_2 = get_page_by_path('homepage_section_2'); ?>
<?php $homepage_section_3 = get_page_by_path('homepage_section_3'); ?>

<?php get_header(); ?>

    <div class="container">
        <?php echo $homepage->post_title ?>
    </div>

<?php get_footer(); ?>