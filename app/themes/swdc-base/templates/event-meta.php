<?php
/**
 * The template is used for displaying a single event details.
 *
 * For a list of available functions (outputting dates, venue details etc) see http://wp-event-organiser.com/documentation/function-reference/
 */

// Set date format for all-day or timed events
// $date_format = ( eo_is_all_day() ) ? 'j F Y' : 'j F Y ' . get_option('time_format');

// Set all date formats to display date only
$date_format = 'j F Y';

?>

<div class="event-meta">

<?php
// Is event recurring?
if ( eo_reoccurs() ) :

  // Event reoccurs - is there a next occurrence?
  $next = eo_get_next_occurrence($date_format);

  // If the event is occurring again in the future, display the date
  if ( $next ) :
    printf('<p class="time recurring"><time datetime="'.eo_get_schedule_start().'">'.__('This event is running from %1$s until %2$s. It is next occurring on %3$s', 'eventorganiser').'.</time></p>', eo_get_schedule_start($date_format), eo_get_schedule_last($date_format), $next);

  // Otherwise the event has finished (no more occurrences)
  else :
    printf('<p class="time recurring past"><time datetime="'.eo_get_schedule_last().'">'.__('This event finished on %s','eventorganiser').'.</time></p>', eo_get_schedule_last($date_format,''));

  endif;

// Event is not recurring
else :
  printf('<p class="time"><time datetime="'.eo_get_the_start().'">'.eo_get_the_start($date_format).'</time></p>');
endif;

// Get the venue
$venue_address = eo_get_venue_address();
if ( eo_get_venue() ) :
  printf('<p class="venue"><span class="name">'.eo_get_venue_name().'</span><br><span class="address">'.$venue_address['address'].'</span><br><span class="city">'.$venue_address['city'].'</span></p>');
  echo eo_get_venue_map(eo_get_venue(),array('width'=>'100%'));
endif;
?>

</div>
