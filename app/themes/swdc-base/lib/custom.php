<?php
/**
 * Custom functions
 */

function navbar_position_class() {
  return current_theme_supports('bootstrap-fixed-navbar') ? 'navbar-fixed-top' : 'navbar-static-top';
}

function body_has_navbar_fixed_class() {
  return current_theme_supports('bootstrap-fixed-navbar') ? 'fixed-navbar' : 'no-fixed-navbar';
}
