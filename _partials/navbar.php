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
        <img src="http://vignette3.wikia.nocookie.net/logopedia/images/d/d9/NICK_Splat_Logo.png/revision/latest?cb=20111007092753">
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav navbar-nav') ); ?>
    </div>
  </div>
</nav>
