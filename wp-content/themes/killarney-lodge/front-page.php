<?php get_header();?>
<!-- begin front-page.php -->
<h1>
    <?php the_title()?>
</h1>
<p>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <? the_content(); ?>
    <?php endwhile; endif; ?>
</p>
<!-- end front-page.php -->
<?php get_footer();?>