<?php
/**
 * @package WordPress
 * @subpackage devnull
 */


/* Basic theme setup */
function devnull_setup() {
  add_theme_support( 'post-thumbnails' ); // Add post thumbnail support
  set_post_thumbnail_size( 200, 200, true ); // hard crop
}
add_action( 'after_setup_theme', 'devnull_setup' );

/* Filter out unused admin menu items */
function devnull_remove_menu_pages() {
  remove_menu_page('edit.php'); // posts
  // remove_menu_page('edit.php?post_type=page'); // pages
  remove_menu_page('tools.php'); // tools
}
add_action( 'admin_menu', 'devnull_remove_menu_pages' );

/* Creates a nicely formatted and more specific title element text */
function devnull_wp_title( $title, $sep ) {
  global $paged, $page;

  if ( is_feed() )
    return $title;

  // Add the site name.
  $title .= get_bloginfo( 'name' );

  // Add the site description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    $title = "$title $sep $site_description";

  // Add a page number if necessary.
  if ( $paged >= 2 || $page >= 2 )
    $title = "$title $sep " . sprintf( __( 'Page %s', 'devnull' ), max( $paged, $page ) );

  return $title;
}
add_filter( 'wp_title', 'devnull_wp_title', 10, 2 );
