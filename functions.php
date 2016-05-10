<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function children_of_parent_page($parent_slug){
  $my_wp_query = new WP_Query();
  $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'order' => 'ASC'));
  $parent_page = get_page_by_title($parent_slug);
  $page_children = get_page_children($parent_page->ID, $all_wp_pages);
  return $page_children;
}
?>
