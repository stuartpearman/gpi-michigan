<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">
        <img src="https://s.w.org/about/images/logos/wordpress-logo-simplified-rgb.png">
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav navbar-nav') ); ?>
    </div>
  </div>
</nav>
