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
  <?php
  // Choose a different date format depending on whether we want to include time
  if( eo_is_all_day() )
    $date_format = 'j F Y';
  else
    $date_format = 'j F Y g:ia';

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
  ?>

  <dl class="horizontal">
    <?php if( !eo_reoccurs() ): // Single event ?>
    <dt><?php _e('Start', 'eventorganiser') ;?></dt>
    <dd><?php eo_the_start($date_format); ?></dd>
    <?php endif; ?>

    <?php if( eo_get_venue() ): ?>
    <dt><?php _e('Venue','eventorganiser'); ?></dt>
    <dd><a href="<?php eo_venue_link(); ?>"><?php eo_venue_name(); ?></a></dd>
    <?php endif; ?>

  </dl>

</div><!-- .entry-meta -->
