<div class="grid md:grid-cols-2 h-screen place-items-center text-left md:mx-24 mx-6 my-12">
    <div class="grid">
        <p class="text-md mb-5 font-medium uppercase text-[#10271D]">What We Are</p>
        <p class="text-4xl mb-5 font-bold text-[#10271D]">
            Explore our range of exquisite yarns and silks, handpicked from the best sources across the globe.
        </p>
        <span class="text-xl font-semi-bold bg-[color:var(theme-color-text_light)]">Explore our range of exquisite yarns
            and silks, handpicked from the best sources across the globe.</span>
    </div>
    <div class="grid"><img class="object-cover h-full w-full rounded-lg"
            src="<?php echo get_template_directory_uri(); ?>/assets/src/img/yarn.jpeg" alt="silk"></div>
</div>
<div class="grid md:grid-cols-2 place-items-center text-left md:mx-24 mx-6 my-12">
    <div class="col md:mx-6">
        <p class="text-md mb-5 font-medium uppercase text-[#10271D]">What We Are</p>
        <p class="text-4xl mb-5 font-bold text-[#10271D]">
            Leading Yarns and Silks
            in the Industry
        </p>
        <span class="text-xl font-semi-bold  bg-[color:var(theme-color-text_light)]">Explore our range of
            exquisite yarns
            and silks, handpicked from the best sources across the globe.</span>
    </div>
    <div class="col content-baseline">
        <div class="grid md:grid-cols-2 gap-6 sm:grid-col">
            <p class="my-3 md:pt-0 text-justify">

                Arni is a town located in the Tiruvannamalai district of Tamil Nadu, India, which is famous for its
                silk weaving industry. Arni silks are known for their exquisite designs and high-quality
                craftsmanship.

                Arni silk sarees are typically made using pure silk and feature intricate handwoven designs, such as
                geometric patterns and floral motifs. The sarees are often embellished with zari work, which is a
                type of metallic thread that is woven into the fabric to create intricate designs and add a touch of
                glamour.

                The silk used in Arni silk sarees is sourced from mulberry silk cocoons, which are produced by
                silkworms that are raised in special facilities.
            </p>
            <p class="mb-3 text-justify">
                The silk is then spun into threads and dyed using natural dyes, such as turmeric, indigo, and
                madder.

                Arni silk sarees are a popular choice for weddings and other special occasions, as they are
                considered to be a symbol of elegance and sophistication. The sarees are available in a wide range
                of colors and designs, and are often passed down from generation to generation as family heirlooms.

                The Arni silk industry plays an important role in the economy of the region, providing employment
                opportunities for skilled weavers and supporting the livelihoods of many local families.
            </p>
        </div>
    </div>
</div>
<?php
$post_list = new WP_Query(
    array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3
    )
);
?>
<div class="flex flex-col text-center justify-center py-12 md:py-24 mx-6 md:mx-24">
    <p class="uppercase font-bold pb-6 text-[#10271D]">Read articles</p>
    <p class="text-6xl font-bold text-[#10271D]">Latest from the Blog</p>

    <div class="">
        <?php if ($post_list->have_posts()): ?>
            <div id="list-post-panel">
                <ul class="grid md:grid-cols-3 gap-10 my-12 md:my-24">
                    <?php while ($post_list->have_posts()):
                        $post_list->the_post();
                        $image = get_the_post_thumbnail_url(get_the_ID()); ?>
                        <li>
                            <div class="bg-white py-20 px-12 hover:shadow-lg text-left rounded-lg"><a href="<?php
                            the_permalink(); ?>">
                                    <div class="flex flex-row mb-2">
                                        <div class="flex">
                                            <p class="uppercase font-semibold">
                                                <?php the_author(); ?> -
                                            </p>
                                        </div>
                                        <div class="flex">
                                            <p class="text-gray-500">
                                                <?php the_date(); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-2xl font-bold mb-2 text-[#1b4130]">
                                        <?php the_title(); ?>
                                    </p>
                                    <p class="text-justify text-gray-500 mb-6">
                                        <?php
                                        echo wp_trim_words(get_the_content(), 15, '...Read More');
                                        ?>
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="h-8 w-8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </a>

                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>
                    <?php _e('There no posts to display.'); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>

</div>
<div class="flex flex-row justify-around flex-shrink h-32 wavyline md:px-24 px-6">
    <p class="text-xl md:text-4xl text-white flex justify-right items-center">Learn more about our wide range of yarns
        and silks.
    </p>
    <div class="flex justify-center items-center">
        <button
            class="border-2 border-gray-400 font-extrabold hover:bg-[color:var(--color-button-hero-hover)] text-white rounded-full py-2 px-5 md:text-xl text-sm font-bold">Get
            In Touch</button>
    </div>
</div>