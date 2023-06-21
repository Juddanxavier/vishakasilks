<div class="bg-green-600 h-64 grid justify-center content-end pb-12">
    <p class="Font-bold text-5xl text-white">
        <?php the_title(); ?>
    </p>
</div>
<div class="mx-12 md:mx-24 py-12">

    <?php
    do_action('woocommerce_after_main_content');
    ?>

</div>


</div>
<div class="my-5 mx-12 md:mx-24">
    <?php get_template_part('template-parts/sharingbox'); ?>

</div>