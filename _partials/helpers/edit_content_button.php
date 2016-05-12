<?php if (current_user_can('edit_posts')) : ?>
  <a href="<?php echo get_edit_post_link(); ?>" target="blank" class="btn btn-brand">
    <span class="glyphicon glyphicon-edit"></span> Edit Content
  </a>
<?php endif; ?>
