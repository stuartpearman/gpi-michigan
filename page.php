<?php get_header(); ?>
<?php
  while ( have_posts() ) : the_post();
?>
<div class="container">
  <h1 class="page-header"><?php the_title(); ?></h1>
</div>
<main>
  <section>
    <div class="container">
      <?php the_content(); ?>
      <a href="#">
        <div class="btn btn-brand">
          Call to Action
        </div>
      </a>
    </div>
  </section>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>
