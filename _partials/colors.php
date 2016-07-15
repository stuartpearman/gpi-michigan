<?php
  $link_color = get_option( 'primary_color' );
?>
<style>
  a {
    color: <?php echo $link_color ?>;
  }
  .btn-brand {
    color: <?php echo $link_color ?>;
    border: 1px solid <?php echo $link_color ?>
  }
  .btn-brand:hover {
    background: <?php echo $link_color ?>;
  }
  blockquote {
    border-left: 5px solid <?php echo $link_color ?>;
    border-right: 5px solid <?php echo $link_color ?>;
  }
  header .card-heading h1 {
    background: <?php echo $link_color ?>;
  }
  footer h2 {
    color: <?php echo $link_color ?>;
  }
  nav.navbar ul.nav li a {
    color: <?php echo $link_color ?>;
  }
  section.special {
    background: <?php echo $link_color ?>;
  }
  .btn-brand:hover {
    background: <?php echo $link_color ?>;
  }
  .three-column.default .glyphicon {
    color: <?php echo $link_color; ?>;
  }
</style>
