<?php
  global $post;
  setup_postdata($post);
?>

<div class="container">
  <div class="col-md-9">
    <div class="row card-heading">
      <h1><?php bloginfo('name'); ?></h1>
    </div>
    <div class="row card">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php wp_reset_postdata(); ?>
