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
      <?php if ($row_style == 'three-column special') : ?>
        <div class="row">
          <div class="col-md-4">
            <span class="glyphicon glyphicon-<?php echo get_field('icon_1') ?>"></span>
            <?php the_content(); ?>
          </div>
          <div class="col-md-4">
            <span class="glyphicon glyphicon-<?php echo get_field('icon_2') ?>"></span>
            <?php the_field('column_2'); ?>
          </div>
          <div class="col-md-4">
            <span class="glyphicon glyphicon-<?php echo get_field('icon_3') ?>"></span>
            <?php the_field('column_3'); ?>
          </div>
        </div>
      <?php else : ?>
        <h2 class='section-heading'><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endif; ?>
      <?php if (current_user_can('edit_posts')) : ?>
        <a href="<?php echo get_edit_post_link(); ?>" class="btn btn-brand">
          <span class="glyphicon glyphicon-edit"></span> Edit Content
        </a>
      <?php endif; ?>
    </div>
  </section>
<?php
  $counter = $counter + 1;
  endforeach;
  wp_reset_postdata();
?>
