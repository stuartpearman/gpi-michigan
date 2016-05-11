<?php
/*
Template Name: Page Section
*/
?>

<?php get_header(); ?>

<main>
  <div class="container page-header">
    <h1><?php the_title(); ?></h1>
  </div>
  <?php get_template_part('_partials/page_section'); ?>
</main>

<?php get_footer(); ?>
