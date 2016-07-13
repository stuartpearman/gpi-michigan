<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header_navigation" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">
        <?php
          if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
        		the_custom_logo();
        	}
        ?>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="header_navigation">
      <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav navbar-nav') ); ?>
    </div>
  </div>
</nav>
