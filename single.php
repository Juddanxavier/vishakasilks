<?php
get_header(); ?>
 
    <div>
 
        <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', get_post_format() );

            
 
        endwhile;
        ?>
 
    </div>
 
<?php get_footer(); ?>