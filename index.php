<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <?php
        if ( have_posts() ) :
        	while ( have_posts() ) :
            the_post();
      ?>
      <article>
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
        </a>
        <?php the_content(); ?>
      </article>
      <?php
          endwhile;
        endif;
      ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
