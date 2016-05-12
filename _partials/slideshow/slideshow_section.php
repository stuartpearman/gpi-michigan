<?php
  $page_children = children_of_parent_page(get_the_title());
  $counter = 0;
  foreach ($page_children as $child) : setup_postdata($child);
    global $post;
    $post = $child;
?>
  <section class='slide' id='section_<?php echo $counter ?>'>
    <div class="container">
      <h2 class='section-heading'><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <div class="slide-control">
        <a href="#section_<?php echo $counter + 1 ?>" class="btn btn-brand">Next <span class="glyphicon glyphicon-triangle-bottom"></span></a>
        <a href="#section_<?php echo $counter - 1 ?>" class="btn btn-brand">Prev <span class="glyphicon glyphicon-triangle-top"></span></a>
        <?php get_template_part('_partials/helpers/edit_content_button'); ?>
      </div>
    </div>
  </section>
<?php
  $counter = $counter + 1;
  endforeach;
  wp_reset_postdata();
?>
