<?php
  $page_children = children_of_parent_page(get_the_title());
  $counter = 0;
  foreach ($page_children as $child) : setup_postdata($child);
    global $post;
    $post = $child;
    $row_style = get_field('row_style');
?>
  <section class='<?php echo $row_style ?>' id='section_<?php echo $counter ?>'>
    <div class="container">
      <?php if ($row_style == 'three-column special' || $row_style == 'three-column default') : ?>
        <?php get_template_part('_partials/builder/three_column') ?>
      <?php elseif ($row_style == 'testimonials') : ?>
        <?php get_template_part('_partials/builder/testimonials') ?>
      <?php else : ?>
        <h2 class='section-heading'><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endif; ?>
      <?php get_template_part('_partials/helpers/edit_content_button'); ?>
    </div>
  </section>
<?php
  $counter = $counter + 1;
  endforeach;
  wp_reset_postdata();
?>
