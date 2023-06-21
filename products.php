<?php /* Template Name: Product Page */?>
<?php get_header(); ?>
<div class="flex flex-col h-[38rem] w-full relative justify-center content-center -mt-[120px] z-0">
    <img class="w-full object-cover min-h-0" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/about.jpg"
        alt="yarnleo">
    <div class="absolute">
        <p class=" text-6xl font-bold mx-12 text-white">Our Silk Saree Collection</p>
    </div>
</div>

<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <!-- <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-8 cursor-pointer">
        <?php
        $paged = get_query_var('paged');

        $args = array(
            'post_type' => 'products',
            'paged' => $paged,
            'orderby' => 'date',
            'order' => 'ASC',
            'posts_per_page' => 6,
            'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <a href="<?php the_permalink(); ?>">
                    <section
                        class="p-5 py-10 bg-purple-50 text-center transform duration-500 hover:-translate-y-2 cursor-pointer">
                        <img src="https://www.dropbox.com/s/mlor33hzk73rh0c/x14423.png?dl=1" alt="">

                        <h1 class="text-3xl my-5 break-all">
                            <?php the_title(); ?>
                        </h1>
                        <button type="button"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">See
                            More...</button>

                    </section>
                </a>
                <?php
            }

        }

        wp_reset_query();
        ?>


    </div>
    <div class="flex justify-center my-10">
        <?php
        echo '<div class="flex justify-center">' . paginate_links(
            array(
                'total' => $the_query->max_num_pages,
                'before_page_number' => '<div class="px-3 py-1 rounded-md mr-2">',
                'after_page_number' => '</div>',
                'prev_text' => '<div class="bg-gray-200 px-3 py-1 rounded-md mr-2">Previous</div>',
                'next_text' => '<div class="bg-gray-200 px-3 py-1 rounded-md">Next</div>'
            )
        ) . '</div>';
        ?>
    </div> -->
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>