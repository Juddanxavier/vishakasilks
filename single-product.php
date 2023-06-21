<?php
get_header(); ?>
<div class="bg-green-600 h-64 grid justify-center content-end pb-12">
    <p class="Font-bold text-5xl text-white">
        <?php the_title(); ?>
    </p>
</div>
<div class="my-5 mx-12 md:mx-24">
    <?php
    do_action('woocommerce_before_main_content');
    ?>
    <?php
    while (have_posts()): ?>
        <?php the_post(); ?>
        <?php wc_get_template_part('content', 'single-product'); ?>
    <?php endwhile;
    ?>
    <?php
    do_action('woocommerce_after_main_content');
    ?>
</div>
<div class="my-5 mx-12 md:mx-24">
    <?php get_template_part('template-parts/sharingbox'); ?>

</div>
<?php get_footer(); ?>