<?php get_header(); ?>
<main>
  <section class="blogfeed">    
    <?php
      if ( have_posts() ) :
      	while ( have_posts() ) :
          the_post();
    ?>
      <article>
        <div class="container">
          <a href="<?php the_permalink(); ?>">
            <h2 class="section-heading"><?php the_title(); ?></h2>
          </a>
          <?php the_content(); ?>
        </div>
      </article>
    <?php
        endwhile;
      endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>
