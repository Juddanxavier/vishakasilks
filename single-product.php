<div
    class="h-[18rem] flex flex-row wavyline justify-center content-center flex-wrap text-center bg-green-600 relative ">
    <div class="absolute self-center">
        <p class="text-4xl font-bold mb-4 text-white">
            <?php the_title(); ?>
        </p>

    </div>
</div>
<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>
<div class="mx-12 md:mx-24 my-12 grid md:grid-cols-2">

    <!-- <?php
    /**
     * woocommerce_before_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
     * @hooked woocommerce_breadcrumb - 20
     */
    do_action('woocommerce_before_main_content');
    ?> -->
    <!-- <?php while (have_posts()): ?>
        <?php the_post(); ?>

        <?php wc_get_template_part('content', 'single-product'); ?>

    <?php endwhile; // end of the loop. ?> -->
    <div>
        <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action('woocommerce_before_single_product_summary');
        ?>
    </div>
    <div>
        <?php
        /**
         * Hook: Woocommerce_single_product_summary.
         *
         * @hooked woocommerce_template_single_title - 5
         * @hooked woocommerce_template_single_rating - 10
         * @hooked woocommerce_template_single_price - 10
         * @hooked woocommerce_template_single_excerpt - 20
         * @hooked woocommerce_template_single_add_to_cart - 30
         * @hooked woocommerce_template_single_meta - 40
         * @hooked woocommerce_template_single_sharing - 50
         * @hooked WC_Structured_Data::generate_product_data() - 60
         */
        do_action('woocommerce_single_product_summary');
        ?>
    </div>
    <?php
    /**
     * woocommerce_after_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
     */
    do_action('woocommerce_after_main_content');
    ?>



    <?php
    get_footer();

    /* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */