<?php
/**
 * The template is used for displaying a single event details.
 *
 * You can use this to edit how the details re displayed on your site. (see notice below).
 *
 * Or you can edit the entire single event template by creating a single-event.php template
 * in your theme.
 *
 * For a list of available functions (outputting dates, venue details etc) see http://wp-event-organiser.com/documentation/function-reference/
 */
?>

<div class="entry-meta eventorganiser-event-meta">
  <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>

  <?php
  // Choose a different date format depending on whether we want to include time
  if( eo_is_all_day() )
    $date_format = 'j F';
  else
    $date_format = 'j F g:ia';

  // Is event recurring or a single event?
  if( eo_reoccurs() ):

    // Event reoccurs - is there a next occurrence?
    $next = eo_get_next_occurrence($date_format);
    if($next):
      // If the event is occurring again in the future, display the date
      printf('<p>'.__('This event is running from %1$s until %2$s. It is next occurring on %3$s','eventorganiser').'.</p>', eo_get_schedule_start('j F Y'), eo_get_schedule_last('j F Y'), $next);
    else:
      // Otherwise the event has finished (no more occurrences)
      printf('<p>'.__('This event finished on %s','eventorganiser').'.</p>', eo_get_schedule_last('d F Y',''));
    endif;
  endif;

  // Get venue address
  $venue_address = eo_get_venue_address();
  ?>

  <dl>
    <?php if( !eo_reoccurs() ): // Single event ?>
    <dt><?php _e('When', 'eventorganiser');?></dt>
    <dd><?php eo_the_start($date_format); ?> <?php _e('until', 'swdc'); ?> <?php eo_the_end($date_format); ?></dd>
    <?php endif; ?>

    <?php if( eo_get_venue() ): ?>
    <dt><?php _e('Venue','eventorganiser'); ?></dt>
    <dd><?php eo_venue_name(); ?></dd>
    <dd><?php echo $venue_address['address'] . ', ' . $venue_address['city']; ?></dd>
    <?php endif; ?>

  </dl>

  <?php echo eo_get_venue_map(); ?>

</div><!-- .entry-meta -->
