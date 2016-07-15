<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>Small Business Template</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
  <?php get_template_part('_partials/colors'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/helpers.js"></script>
  <?php wp_head(); ?>
</head>
<body>

<?php
  if (is_page('homepage')) {
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
