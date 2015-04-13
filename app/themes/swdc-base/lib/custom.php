<?php
/**
 * Custom functions
 */

// Modify the main query
function modify_main_query( $query ) {
  if( !is_admin() && !is_page() && $query->is_main_query() ) {
    $query->set('post_type', array('event', 'post'));
  }
}
add_action( 'pre_get_posts', 'modify_main_query' );

// Return the correct Bootstrap class for fixed/static navbars
function navbar_position_class() {
  return current_theme_supports('bootstrap-fixed-navbar') ? 'navbar-fixed-top' : 'navbar-static-top';
}

// Return a body class if theme has fixed/static navbar
function body_has_navbar_fixed_class() {
  return current_theme_supports('bootstrap-fixed-navbar') ? 'fixed-navbar' : 'no-fixed-navbar';
}

// Return og:meta in <head>
function og_head() {
  echo '<meta property="og:site_name" content="'.get_bloginfo('name').'">';
  echo '<meta property="og:type" content="website">';
  echo '<meta property="og:image" content="'.get_stylesheet_directory_uri().'/assets/img/og-image.png">';
}
