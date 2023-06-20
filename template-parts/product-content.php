<div class="bg-green-600 h-64 grid justify-center content-end pb-12">
    <p class="Font-bold text-5xl text-white">
        <?php the_title(); ?>
    </p>
</div>
<div class="grid md:grid-cols-2 gap-8 mx-12 md:mx-24 py-12">
    <div>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('medium_large', array('class' => 'rounded-lg')); ?>
        </a>
    </div>
    <div>
        <div class="mb-5">
            <p class="text-font capitalize text-xl">
                Description
            </p>
            <p>
                <?php
                the_content();
                ?>
            </p>
        </div>
        <div class="mb-5">
            <p class="text-font capitalize text-xl">
                Color
            </p>
            <p>
                <?php
                the_content();
                ?>
            </p>
        </div>
        <div class="mb-5">
            <p class="text-font capitalize text-xl">
                Place of Origin
            </p>
            <p>
                <?php
                $meta_print_value = get_post_meta(get_the_ID(), 'place_of_origin', true);
                echo ($meta_print_value);
                ?>
            </p>
        </div>
        <div class="mb-5">
            <p class="text-font capitalize text-xl">
                Design Details
            </p>
            <p>
                <?php
                $meta_print_value = get_post_meta(get_the_ID(), 'design_detail', true);
                echo ($meta_print_value);
                ?>
            </p>
        </div>
        <div class="mb-5">
            <p class="text-font capitalize text-xl">
                Size & Fit
            </p>
            <p>
                <?php
                $meta_print_value = get_post_meta(get_the_ID(), 'size_and_fit', true);
                echo ($meta_print_value);
                ?>
            </p>
        </div>
        <div class="flex justify-right">
            <button type="button"
                class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enquire
                Now</button>

        </div>
    </div>


</div>