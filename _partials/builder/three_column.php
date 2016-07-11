

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
