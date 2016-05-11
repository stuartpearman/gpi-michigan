<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function children_of_parent_page($parent_title){ //Takes the title of parent page
  $my_wp_query = new WP_Query();
  $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order'));
  $parent_page = get_page_by_title($parent_title);
  $page_children = get_page_children($parent_page->ID, $all_wp_pages);
  return $page_children; //outputs an array of child page objects
}

require_once get_template_directory() . '/lib/plugin_require.php';

?>
