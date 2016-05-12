<?php get_header(); ?>


<main>
  <section>
    <?php if ( have_posts() ) : the_post(); ?>
      <article>
        <div class="container">
          <h1 class="page-header"><?php the_title(); ?></h1>
        </div>
        <div class="container">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endif; ?>
  </div>
  </section>
</main>

<?php get_footer(); ?>
