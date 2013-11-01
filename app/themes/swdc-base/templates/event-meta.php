<?php
/**
 * The template is used for displaying a single event details.
 *
 * For a list of available functions (outputting dates, venue details etc) see http://wp-event-organiser.com/documentation/function-reference/
 */

// Set date format for all-day or timed events
// $date_format = ( eo_is_all_day() ) ? 'j F Y' : 'j F Y ' . get_option('time_format');
$date_format = ( eo_is_all_day() ) ? 'j F' : 'j F ' . get_option('time_format');

// Set all date formats to display date only
// $date_format = 'j F';

// Get the ticket URL
$ticket_url = get_post_meta(get_the_ID(), 'ticket_url', true);
?>

<div class="event-meta">
<?php
// Get the event thumbnail
if (has_post_thumbnail()) the_post_thumbnail('large', array('class' => 'thumbnail'));
?>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">When</h3>
    </div>
    <div class="panel-body">

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
    printf('<p class="time"><time datetime="'.eo_get_the_start().'">'.eo_get_the_start($date_format).'</time> to<br><time datetime="'.eo_get_the_end().'">'.eo_get_the_end($date_format).'</time></p>');
  endif;

  // Display a ticket button
  if( !empty($ticket_url) ) printf('<a href="'.$ticket_url.'" class="ticket-link btn btn-lg btn-block btn-primary">'.__('Get tickets now', 'swdc').'</a>');
?>
    </div>
  </div>
<?php

// Get the venue
$venue_address = eo_get_venue_address();
if ( eo_get_venue() ) : ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Where</h3>
    </div>
    <div class="panel-body">
  <?php
    printf('<p class="venue"><span class="name">'.eo_get_venue_name().'</span><br><span class="address">'.$venue_address['address'].'</span><br><span class="city">'.$venue_address['city'].'</span></p>');
    // echo eo_get_venue_map(eo_get_venue(),array('width'=>'100%'));
  ?>
    </div>
  </div>
<?php
endif;
?>

</div>
