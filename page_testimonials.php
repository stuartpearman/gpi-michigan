<?php
/*
Template Name: Testimonials
*/
?>

<?php get_header(); ?>

<main>
  <div class="container page-header">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="quotation-mark">
    <?php ?>
    <span class="quote-icon">"</span>
  </div>
  <?php get_template_part('_partials/builder/content_section'); ?>
</main>

<?php get_footer(); ?>
