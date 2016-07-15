<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function children_of_parent_page($parent_title){ //Takes the title of parent page
  $my_wp_query = new WP_Query();
  $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'posts_per_page' => -1));
  $parent_page = get_page_by_title($parent_title);
  $page_children = get_page_children($parent_page->ID, $all_wp_pages);
  return $page_children; //outputs an array of child page objects
}

add_theme_support( 'custom-logo' );

add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {
    $html = str_replace( 'class="custom-logo-link"', 'class="navbar-brand"', $html );
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function mytheme_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'bwpy_theme_colors', array(
  	'title' => __( 'Theme Colors', 'bwpy' ),
  	'priority' => 100,
  ) );

  // add color picker setting
  $wp_customize->add_setting( 'primary_color', array(
  	'default' => '#ff0000',
    'type'    => 'option'
  ) );

  // add color picker control
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
  	'label' => 'Brand Primary',
  	'section' => 'bwpy_theme_colors',
  	'settings' => 'primary_color',
  ) ) );
}

add_action( 'customize_register', 'mytheme_customize_register' );

require_once get_template_directory() . '/lib/plugin_require.php';



?>
