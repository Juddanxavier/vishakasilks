<?php /* Template Name: Contact Page */?>
<? get_header(); ?>
<div class="flex flex-col -mt-[125px]  h-[27rem] w-full relative justify-center content-center">
    <img class="w-full object-cover min-h-0"
        src="<?php echo get_template_directory_uri(); ?>/assets/src/img/contact.jpg" alt="yarnleo">
    <div class="absolute">
        <p class=" text-6xl font-bold mx-12 text-white">Contact Us</p>
    </div>
</div>
<div class="grid md:grid-cols-2 mx-12 md:mx-24 my-12">
    <div class="md:mx-12">
        <p class="uppercase text-4xl font-bold mb-10 text-[#10271D]">We're here to help</p>
        <p class="text-lg mb-10">We're here to answer all your textile and yarn inquiries. Our goal is to
            provide you with an stress-free shopping experience.
        </p>
        <p class="text-lg mb-10">
            At our company, we pride ourselves on our excellent response time. We understand that when a customer
            reaches out, they want a prompt and helpful response. That's why we make it a priority to respond to all
            inquiries as quickly as possible.
        </p>
        <div class="flex items-top mb-10">
            <img class="h-8" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/address.svg" alt="address">
            <p class="font-semibold text-lg ml-5 text-[#10271D]">No 5, Palaniandavar koil street, Kosapalayam
                Arni, Tamil Nadu, India - 632301.</span>
        </div>
        <div class="flex items-top mb-10">
            <img class="h-8" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/phone.svg" alt="phone">
            <p class="font-semibold text-lg ml-5 text-[#10271D]">9629855913</p>
        </div>
        <div class="flex items-top mb-10">
            <img class="h-8" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/email.svg" alt="email">
            <p class="font-semibold text-lg ml-5 text-[#10271D]">vishakasilks@gmail.com</p>
        </div>
    </div>
    <div class="grid">
        <?php
        while (have_posts()):
            the_post(); ?>
            <div class="entry-content-page">
                <?php the_content(); ?>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
</div>
<? get_footer(); ?>