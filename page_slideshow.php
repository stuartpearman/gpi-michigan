<?php
/*
Template Name: Slideshow
*/
?>

<?php get_header(); ?>

<main>
  <section class="slide title-slide">
    <div class="container page-header">
      <h1><?php the_title(); ?></h1>
      <div class="slide-control">
        <a href="#section_0" class="btn btn-brand">Begin</a>
      </div>
    </div>
  </section>
  <?php get_template_part('_partials/slideshow_section'); ?>
</main>

<?php get_footer(); ?>
