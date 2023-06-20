<?php if ('products' == get_post_type()) { ?>
    <?php include(TEMPLATEPATH . '/single-product.php'); ?>
<?php } else { ?>
    <?php include(TEMPLATEPATH . '/single-blog.php'); ?>
<?php } ?>