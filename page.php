<?php get_header(); ?>


<main>
  <section>
    <?php if ( have_posts() ) : the_post(); ?>
      <article>
        <div class="container page-header">
          <h1 class=""><?php the_title(); ?></h1>
        </div>
        <div class="container article-body">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endif; ?>
  </div>
  </section>
</main>

<?php get_footer(); ?>
