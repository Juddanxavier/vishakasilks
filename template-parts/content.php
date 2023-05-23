<div class="">
    <div class="h-[38rem] flex flex-row justify-center content-center flex-wrap text-center bg-green-200 relative ">
        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>

        <img class="object-cover h-full w-full" src="<?php echo $url; ?> " alt="<?php the_title(); ?>">
        <div class="absolute self-center">
            <p class="text-6xl font-bold mb-4 text-white">
                <?php the_title(); ?>
            </p>
            <p class="text-md font-semibold uppercase text-white">
                <?php the_author(); ?> .
                <?php the_date(); ?>
            </p>
        </div>
    </div>
    <div class="md:w-2/5 mx-12 md:mx-auto my-12 md:my-24">
        <span class="first-letter:text-7xl first-letter:font-bold first-letter:text-black
    first-letter:mr-3  first-letter:float-left leading-loose text-gray-600">
            <?php the_content(); ?>
        </span>
        <div class="my-6">
            <?php the_tags(); ?>
        </div>
        <?php get_template_part('template-parts/sharingbox'); ?>
        <div class="">
            <?php
            wbp_posts_nav();
            ?>
            <div class="flex flex-row gap-10">
                <?php
                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    // echo 'Related Posts';
                    $first_tag = $tags[0]->term_id;
                    $args = array(
                        'tag__in' => array($first_tag),
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => 2,
                        'caller_get_posts' => 1
                    );
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()):
                            $my_query->the_post(); ?>
                            <div class="flex">
                                <a class="text-xl font-bold" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to
                        <?php the_title_attribute(); ?>">
                                    <span class="my-8">
                                        <?php the_post_thumbnail('medium_large', array('class' => 'object-scale-down h-48 w-full rounded-lg')); ?>
                                    </span>
                                    <p class="my-4 text-[#1b4130]">
                                        <?php the_title(); ?>
                                    </p>
                                </a>
                            </div>

                            <?php
                        endwhile;
                    }
                    wp_reset_query();
                }
                ?>
            </div>
        </div>
    </div>

</div>