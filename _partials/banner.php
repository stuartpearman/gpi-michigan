<?php
  global $post;
  $banner = array_values(children_of_parent_page('Homepage'))[0];
  setup_postdata($post);
?>

<div class="container">
  <div class="col-md-9">
    <div class="row card-heading">
      <h1><?php bloginfo('title'); ?></h1>
    </div>
    <div class="row card">
      <?php the_content(); ?>
      <a href="#">
        <div class="btn btn-brand">
          Call to Action
        </div>
      </a>
    </div>
  </div>
</div>

<?php wp_reset_postdata(); ?>
