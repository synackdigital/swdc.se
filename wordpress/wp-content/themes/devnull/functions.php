<?php
/**
 * @package WordPress
 * @subpackage devnull
 */

function devnull_setup() {

  // Add post thumbnail support
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 200, 200, true ); // hard crop
}
add_action( 'after_setup_theme', 'devnull_setup' );
