<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('VISHAKA-scripts', get_template_directory_uri() . '/assets/dist/main.bundle.js', [], '1.0.0', true);
});
wp_enqueue_style('VISHAKA-tailwind', get_template_directory_uri() . '/assets/dist/main.bundle.css', array());

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

function register_my_menus()
{
    register_nav_menus(
        array(
            'header' => __('Header Menu')
        )
    );
}
add_action('init', 'register_my_menus');

function register_widget_areas()
{

    register_sidebar(
        array(
            'name' => 'Footer area one',
            'id' => 'footer_area_one',
            'description' => 'This widget area discription',
            'before_widget' => '<section class="footer-area footer-area-one">',
            'after_widget' => '</section>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        )
    );
}
add_action('widgets_init', 'register_widget_areas');

add_action('woocommerce_shop_loop_item_title', 'custom_attributes_display', 20);
function custom_attributes_display()
{

    // Just for product category archives pages
    if (is_product_category()) {
        global $product;

        // the array of attributes names
        $attribute_names = array('pa_nopeus', 'pa_liito', 'pa_vakaus', 'pa_feidi');
        foreach ($attribute_names as $key => $attribute_name) {

            // For WooCommerce version 3.0+
            $product_id = $product->get_id(); // WC 3.0+

            // Getting the value of an attribute (OK for WC 3.0+)
            $wc_term = wc_get_product_terms($product_id, $attribute_name);
            $attribute_value = array_shift($wc_term);

            // Displays only if attribute exist for the product
            if (!empty($attribute_value) || '0' == $attribute_value) { // Updated
                echo $attribute_value;

                // Separating each number by a " / "
                if ($key < 3)
                    echo ' / ';
            }
        }
    }
}
// function create_posttype()
// {
//     register_post_type(
//         'Product',
//         // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __('Products'),
//                 'singular_name' => __('Product')
//             ),
//             'public' => true,
//             'has_archive' => false,
//             'rewrite' => array('slug' => 'product'),
//         )
//     );
// }

// function cw_post_type_products()
// {
//     $supports = array(
//         'title',
//         // post title
//         'editor',
//         // post content
//         'author',
//         // post author
//         'thumbnail',
//         // featured images
//         // 'excerpt',
//         // post excerpt
//         'custom-fields',
//         // custom fields
//         // 'comments',
//         // post comments
//         'revisions',
//         // post revisions
//         'post-formats', // post formats
//     );
//     $labels = array(
//         'name' => _x('products', 'plural'),
//         'singular_name' => _x('product', 'singular'),
//         'menu_name' => _x('products', 'admin menu'),
//         'name_admin_bar' => _x('products', 'admin bar'),
//         'add_new' => _x('Add New', 'add new'),
//         'add_new_item' => __('Add New Products'),
//         'new_item' => __('New Products'),
//         'edit_item' => __('Edit Products'),
//         'view_item' => __('View Products'),
//         'all_items' => __('All Products'),
//         'search_items' => __('Search Products'),
//         'not_found' => __('No Products found.'),
//     );
//     $args = array(
//         'supports' => $supports,
//         'labels' => $labels,
//         'public' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'products'),
//         'has_archive' => true,
//         'hierarchical' => false,
//     );
//     register_post_type('products', $args);
// }
// add_action('init', 'cw_post_type_products');

function themename_custom_logo_setup()
{
    $defaults = array(
        'height' => 75,
        'width' => 75,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');
// Hooking up our function to theme setup

function wbp_posts_nav()
{
    $next_post = get_next_post();
    $prev_post = get_previous_post();

    if ($next_post || $prev_post): ?>
        <div class="flex flex-row justify-between my-12">
            <div>
                <?php if (!empty($prev_post)): ?>
                    <a href="<?php echo get_permalink($prev_post); ?>">
                        <div class="flex flex-col">
                            <div class="flex uppercase font-bold text-gray-700">
                                <svg viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M13.775,18.707,8.482,13.414a2,2,0,0,1,0-2.828l5.293-5.293,1.414,1.414L9.9,12l5.293,5.293Z" />
                                </svg>
                                <div>
                                    <?php _e('Previous', 'textdomain'); ?>
                                </div>

                            </div>
                            <div class="flex font-bold text-gray-700">
                                <?php echo get_the_title($prev_post); ?>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
            <div class="flex">
                <?php if (!empty($next_post)): ?>
                    <a href="<?php echo get_permalink($next_post); ?>">
                        <div class="flex flex-col">
                            <div class="flex uppercase font-bold text-gray-700">
                                <?php _e('Next', 'textdomain') ?>
                                <svg viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M10.811,18.707,9.4,17.293,14.689,12,9.4,6.707l1.415-1.414L16.1,10.586a2,2,0,0,1,0,2.828Z" />
                                </svg>
                            </div>
                            <div class="flex font-bold text-gray-700">
                                <h4>
                                    <?php echo get_the_title($next_post); ?>
                                </h4>
                            </div>

                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        </div>
    <?php endif;
}

// Numbered Pagination
if (!function_exists('wpex_pagination')) {

    function wpex_pagination()
    {

        $prev_arrow = is_rtl() ? '→' : '←';
        $next_arrow = is_rtl() ? '←' : '→';

        global $wp_query;
        $total = $wp_query->max_num_pages;
        $big = 999999999; // need an unlikely integer
        if ($total > 1) {
            if (!$current_page = get_query_var('paged'))
                $current_page = 1;
            if (get_option('permalink_structure')) {
                $format = 'page/%#%/';
            } else {
                $format = '&paged=%#%';
            }
            echo paginate_links(
                array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => $format,
                    'current' => max(1, get_query_var('paged')),
                    'total' => $total,
                    'mid_size' => 1,
                    'type' => 'list',
                    'prev_text' => $prev_arrow,
                    'next_text' => $next_arrow,
                )
            );
        }
    }

}
function wpdocs_custom_excerpt_length($length)
{
    return 40;
}
function wpdocs_excerpt_more($more)
{
    if (!is_single()) {
        $more = sprintf(
            '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink(get_the_ID()),
            __('[Read More...]', 'textdomain')
        );
    }

    return $more;
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
add_theme_support('post-thumbnails');

function add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'add_woocommerce_support')
    ?>