<?php
  global $post;
  setup_postdata($post);
?>

<div class="container">
  <div class="col-md-9">
    <div class="row card-heading">
      <h1><?php bloginfo('title'); ?></h1>
    </div>
    <div class="row card">
      <?php the_content(); ?>
      <a href="http://interknights.co" target="blank" class="btn btn-brand">
        Also check out Interknights!
      </a>
    </div>
  </div>
</div>

<?php wp_reset_postdata(); ?>
