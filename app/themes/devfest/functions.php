<?php
/**
 * @package WordPress
 * @subpackage swdc
 */

/* Basic theme setup */
function swdc_setup() {
  add_theme_support( 'post-thumbnails' ); // Add post thumbnail support
  set_post_thumbnail_size( 200, 200, true ); // hard crop
}
add_action( 'after_setup_theme', 'swdc_setup' );

/* Filter out unused admin menu items */
function swdc_remove_menu_pages() {
  remove_menu_page('edit.php'); // posts
  // remove_menu_page('edit.php?post_type=page'); // pages
  // remove_menu_page('tools.php'); // tools
}
add_action( 'admin_menu', 'swdc_remove_menu_pages' );

/* Creates a nicely formatted and more specific title element text */
function swdc_wp_title( $title, $sep ) {
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
    $title = "$title $sep " . sprintf( __( 'Page %s', 'swdc' ), max( $paged, $page ) );

  return $title;
}
add_filter( 'wp_title', 'swdc_wp_title', 10, 2 );

/**
 * Register sidebars and widgets
 */
function swdc_widgets_init() {
  // Sidebars
  register_sidebar(array(
    'name'          => __('Sponsors', 'swdc'),
    'id'            => 'sidebar-sponsors',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'swdc_widgets_init');
