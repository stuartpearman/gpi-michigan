<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <title>Small Business Template</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" media="screen" title="no title" charset="utf-8">
  <?php wp_head(); ?>
</head>
<body>

<?php
  if (is_home() || is_page('homepage')) {
?>
  <header class="homepage-banner">
    <?php get_template_part('_partials/banner'); ?>
    <?php get_template_part('_partials/navbar'); ?>
  </header>
<?php
  } else {
?>
  <header>
    <?php get_template_part('_partials/navbar'); ?>
  </header>
<?php
  }
?>
