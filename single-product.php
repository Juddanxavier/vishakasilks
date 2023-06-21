<?php
get_header(); ?>

<?php
while (have_posts()):
    the_post();
    get_template_part('template-parts/product-content.php', get_post_format());
endwhile;
?>

<?php get_footer(); ?>