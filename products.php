<?php /* Template Name: Product Page */?>
<?php get_header(); ?>
<div class="flex flex-col h-[26rem] w-full relative justify-center content-center">
    <img class="w-full object-cover min-h-0" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/cotton.jpg"
        alt="yarnleo">
    <div class="absolute">
        <p class=" text-6xl font-bold mx-12 text-white">About Us</p>
    </div>
</div>
<div class="flex sticky top-0 h-24  px-12 md:px-24 bg-white">
    <p class="my-8 text-5xl font-bold">Yarn</p>
</div>
<div class="min-h-screen">
    <div class="flex flex-col">
        <div class="flex my-10 md:mx-24 mx-12">
            <?php
            $args = array('post_type' => 'products', 'posts_per_page' => 10);
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()):
                    $the_query->the_post(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            <?php else: ?>
                <p>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="flex sticky top-0 h-24 py-10 px-12 md:px-24 bg-white">
    <p class="text-5xl font-bold">Silk</p>
</div>
<div class="h-screen">
    <div class="min-h-screen">
        <div class="flex flex-col">
            <div class="flex my-10 md:mx-24 mx-12">
                <?php
                $args = array('post_type' => 'products', 'posts_per_page' => 10);
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()):
                        $the_query->the_post(); ?>
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php else: ?>
                    <p>
                        <?php _e('Sorry, no posts matched your criteria.'); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>