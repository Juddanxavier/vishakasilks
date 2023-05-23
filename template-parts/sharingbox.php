<?php
/* Social Share Buttons template for Wordpress
 * By Daan van den Bergh 
 */

$postUrl = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>

<section class="border-t-2 border-b-2 border-gray-300 py-8 mt-8">
    <div class="flex flex-row-reverse gap-4">
        <a target="_blank" class="share-button share-twitter"
            href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter'); ?>"
            title="Tweet this"><img class="h-8 w-full"
                src="<?php echo get_template_directory_uri(); ?>/assets/src/img/twitter.svg" alt="twitter"></a>
        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>"
            title="Share on Facebook"><img class="h-8 w-full"
                src="<?php echo get_template_directory_uri(); ?>/assets/src/img/fb.svg" alt="facebook"></a>
        <a target="_blank" class="share-button share-googleplus"
            href="https://plus.google.com/share?url=<?php echo $postUrl; ?>" title="Share on Google+"><img
                class="h-8 w-full" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/google.svg"
                alt="google"></a>
        <a target="_blank" class="share-button share-googleplus" href="whatsapp://send?text=<?php echo $postUrl; ?>"
            title="Share on Whatsapp"><img class="h-8 w-full"
                src="<?php echo get_template_directory_uri(); ?>/assets/src/img/whatsapp.svg" alt="whatsapp"></a>
    </div>
</section>