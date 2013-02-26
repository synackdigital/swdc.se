<?php
/**
 * @package WordPress
 * @subpackage devnull
 */

define('DISALLOW_FILE_EDIT',true); // Disable theme and plugin editor
define('DISALLOW_FILE_MODS',true); // Disable core and plugin updates

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