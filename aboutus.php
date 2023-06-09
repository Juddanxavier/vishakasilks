<?php /* Template Name: About page */?>
<?php get_header(); ?>
<div class="flex flex-col -mt-[125px] h-[26rem] w-full relative justify-center content-center">
    <img class="w-full object-cover min-h-0" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/cotton.jpg"
        alt="yarnleo">
    <div class="absolute">
        <p class=" text-6xl font-bold mx-12 text-white">About Us</p>
    </div>
</div>
<div class="grid grid-col m-12 md:m-24 place-items-center text-center">
    <div class="grid text-4xl font-bold mb-5 text-[#10271D]">Our Story</div>
    <div class=" grid md:w-1/2 text-lg">
        In addition to delivering the most comfortable textile in the world, we also provide our weavers' families the
        tools they need to break the cycle of poverty and create a better future.
    </div>
</div>
<div class="grid md:grid-cols-2 m-12 md:m-24 content-center">
    <div class="grid md:order-last">
        <img class="rounded-lg mb-10" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/community.jpg"
            alt="">
    </div>
    <div class="grid place-content-center">
        <span class="text-2xl font-bold mb-5 md:mx-12 text-[#10271D]">Transforming Communities.</span>
        <span class="text-lg w-5/6 text-left md:mx-12">Our yarns and silks sarees are procured from the local weavers in
            and
            around
            Arni,
            Tamil
            Nadu. Across our
            Community we create jobs, help them sell their products and build a postive transformation of Communities
        </span>
    </div>

</div>
<div class="grid md:grid-cols-2 m-12 md:m-24">
    <div class="grid md:p-5">
        <img class="rounded-lg mb-10" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/women.jpg" alt="">
    </div>
    <div class="grid place-content-center">
        <p class="text-2xl font-bold mb-5 md:mx-12 text-[#10271D]">Women Empowerment.</p>
        <p class="text-lg w-5/6 text-left md:mx-12">Our yarns and silks sarees are procured from the local weavers in
            and around
            Arni,
            Tamil
            Nadu. Across our
            Community we create jobs, help them sell their products and build a postive transformation of Communities
        </p>
    </div>
</div>
<div class="grid md:grid-cols-2 m-12 md:m-24">
    <div class="grid md:order-last md:p-5">
        <img class="rounded-lg mb-10" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/weave.jpeg"
            alt="">
    </div>
    <div class="grid place-content-center">
        <p class="text-2xl font-bold mb-5 md:mx-12 text-[#10271D]">Experience the Elegance of Silk.</p>
        <p class="text-lg w-5/6 text-left md:mx-12">We are dedicated to bringing you the epitome of luxury and style
            with our exquisite range of silk yarn and silk sarees. With a deep appreciation for the beauty and
            versatility of silk, we curate our collection from the finest sources worldwide, ensuring that each product
            reflects the highest standards of craftsmanship.
        </p>
    </div>

</div>
<div class="flex justify-center mb-20">
    <div class="text-center text-4xl md:w-1/2 font-bold text-[#10271D]">We cut out the middleman and get money directly
        into the hands
        of
        our
        weavers.</div>
</div>


<div class="grid md:grid-cols-3 wavyline">
    <div class="md:m-24 m-12 md:col-span-1">
        <p class="text-white font-bold uppercase">What We Do</p>
        <p class="text-5xl font-bold text-white">Our Service</p>
    </div>
    <div class="md:m-24 m-12 text-white md:col-span-2">
        <p class="mb-10 text-lg">Our company specializes in providing a wide range of silk products, including silk yarn
            and silk sarees. We take pride in sourcing the finest silk from trusted suppliers, ensuring that our
            customers receive the highest quality products. Our silk yarn is carefully crafted to meet the needs of
            artisans and textile enthusiasts, offering them a luxurious and versatile material for their creations.
            Whether it's for weaving, knitting, or embroidery, our silk yarn is known for its smooth texture, vibrant
            colors, and excellent durability.</p>
        <p class="text-lg">

            In addition to silk yarn, we also offer an exquisite collection of silk sarees. Our silk sarees showcase the
            rich tradition of silk weaving, with each piece meticulously handwoven by skilled artisans. From traditional
            designs to contemporary patterns, our sarees reflect a blend of heritage and modern aesthetics. We strive to
            provide our customers with a diverse selection of silk sarees, ensuring that there is something to suit
            every taste and occasion. With our commitment to quality and customer satisfaction, we aim to be the go-to
            destination for silk enthusiasts, offering them the finest silk yarn and silk sarees to bring their creative
            visions to life.</p>
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
<div class="flex flex-col text-center justify-center py-12 md:py-24 mx-12 md:mx-24">
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
                            <div class="bg-white hover:shadow-lg text-left rounded-lg"><a href="<?php
                            the_permalink(); ?>">
                                    <div class="flex flex-row mb-2">
                                        <div class="flex flex-row">
                                            <?php the_post_thumbnail('medium_large', array('class' => 'object-cover h-full w-full rounded-t-lg')); ?>
                                        </div>

                                    </div>
                                    <div class="p-4">
                                        <!-- <div class="flex">
                                            <p class="uppercase font-semibold">
                                                <?php the_author(); ?> -
                                            </p>
                                        </div> -->
                                        <div class="flex">
                                            <p class="text-gray-500">
                                                <?php the_date(); ?>
                                            </p>
                                        </div>
                                        <div class="flex">
                                            <p class="text-2xl font-bold mb-2 text-[#10271D]">
                                                <?php the_title(); ?>
                                            </p>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>

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
            <button
                class="bg-transparent hover:bg-green-900 text-green-900 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                More Posts
            </button>
        </div>
    </div>
</div>
<?php get_footer(); ?>