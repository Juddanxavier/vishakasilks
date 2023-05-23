<?php
/*
Template Name: Front page
*/
?>
<?php
get_header();
?>
<div id="primary">
  <?php get_template_part('template-parts/hero'); ?>
  <?php get_template_part('template-parts/frontlayout'); ?>
</div>
<?php
get_footer();
?>