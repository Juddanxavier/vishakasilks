<?php /* Template Name: Bloglist page */?>
<?php get_header(); ?>
<div id="primary">
    <main>
        <div class="flex flex-col h-[34rem] w-full relative justify-center content-center">
            <img class="w-full object-cover min-h-0"
                src="<?php echo get_template_directory_uri(); ?>/assets/src/img/yarnleo.jpg" alt="yarnleo">
            <div class="absolute">
                <p class=" text-6xl font-bold mx-12 text-white">Blog</p>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-6 mx-12 md:mx-24 md:my-24 my-12">
            <div class="col-span-2">
                <?php
                if (have_posts()) {
                    ?>
                    <div class="container">
                        <?php
                        while (have_posts()):
                            ?>
                            <div class="rounded-xl mb-10">
                                <a class="text-xl font-bold" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to
                        <?php the_title_attribute(); ?>">
                                    <?php the_post(); ?>
                                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>

                                    <img class="object-cover aspect-auto h-[420px] w-full rounded-xl" src="<?php echo $url; ?> "
                                        alt="<?php the_title(); ?>">
                                    <p class="text-4xl font-bold my-5 text-[#10271D]">
                                        <?php the_title(); ?>
                                    </p>
                                    <div class="flex flex-row">
                                        <div class="uppercase font-semibold pr-2 text-[#10271D]">
                                            <?php the_category(); ?>
                                        </div>
                                        <div class="text-gray-600">

                                            -
                                            <?php the_date(); ?>
                                        </div>
                                    </div>
                                    <div class="mt-2 text-gray-600 text-lg">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </a>
                            </div>

                            <?php
                        endwhile;
                        ?>
                        <?php wpex_pagination(); ?>


                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="h-screen col-span-1 sticky top-0 bg-white rounded-xl p-12">
                <p class="text-2xl font-semibold mb-6 text-[#10271D]">Category</p>
                <ul class="font-semibold">
                    <?php wp_list_categories('show_count=1&&title_li='); ?>
                </ul>
                <p class="text-2xl font-semibold my-6">Recent Posts</p>
                <ul class="font-semibold">
                    <?php
                    $the_query = new WP_Query('posts_per_page=3');
                    ?>
                    <?php
                    while ($the_query->have_posts()):
                        $the_query->the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>">
                                <div class="flex flex-row gap-4">
                                    <div class="mb-4">
                                        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>

                                        <img class="max-w-sm h-20 rounded-sm text-[#10271D]" src="<?php echo $url; ?> "
                                            alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="">
                                        <p class="text-sm">
                                            <?php the_category(); ?>
                                        </p>
                                        <p class="text-sm font-bold text-[#10271D]">
                                            <?php the_title(); ?>
                                        </p>
                                    </div>
                                </div>
                            </a></li>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>

    </main>
</div>
<?php get_footer(); ?>