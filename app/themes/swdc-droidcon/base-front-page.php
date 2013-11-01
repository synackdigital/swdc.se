<?php
$target = get_page_by_path(basename( untrailingslashit( 'events/stockholm-2013' ) ), OBJECT, 'event');

if ($target) :
  wp_redirect( get_permalink($target->ID) );
  exit;
endif;
?>
