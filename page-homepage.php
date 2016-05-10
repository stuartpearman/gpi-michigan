<?php get_header(); ?>

<main>
  <?php
    $homepage_children = children_of_parent_page('Homepage');
    foreach ($homepage_children as $child) : setup_postdata($child);
    global $post;
    $post = $child;
  ?>
    <section>
      <div class="container">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </section>
  <?php
    wp_reset_postdata();
    endforeach;
  ?>
  <?php get_template_part('_partials/highlighted_block'); ?>

</main>

<?php get_footer(); ?>
