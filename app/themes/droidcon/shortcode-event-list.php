<?php
/**
 * Event List Widget: Standard List
 *
 * The template is used for displaying the [eo_event] shortcode *unless* it is wrapped around a placeholder: e.g. [eo_event] {placeholder} [/eo_event].
 *
 * You can use this to edit how the output of the eo_event shortcode. See http://wp-event-organiser.com/documentation/shortcodes/event-list-shortcode/
 * For the event list widget see widget-event-list.php
 *
 * For a list of available functions (outputting dates, venue details etc) see http://wp-event-organiser.com/documentation/function-reference/
 */
global $eo_event_loop,$eo_event_loop_args;

//Date % Time format for events
$date_format = get_option('date_format');
$time_format = get_option('time_format');

//The list ID / classes
$id = $eo_event_loop_args['id'];
$classes = $eo_event_loop_args['class'];

?>

<?php if( $eo_event_loop->have_posts() ): ?>

  <ul id="<?php echo esc_attr($id);?>" class="<?php echo esc_attr($classes);?>" >

    <?php while( $eo_event_loop->have_posts() ): $eo_event_loop->the_post(); ?>

      <?php
        //Generate HTML classes for this event
        $eo_event_classes = eo_get_event_classes();

        //For non-all-day events, include time format
        $format = ( eo_is_all_day() ? $date_format : $date_format.' '.$time_format );
      ?>

      <li class="eo-event <? echo esc_attr(implode(' ',$eo_event_classes)); ?>" >
        <?php
          if (has_post_thumbnail())
            the_post_thumbnail();
        ?>
        <a class="eo-event-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a>
        <?php echo __('on','eventorganiser') . ' '.eo_get_the_start($format); ?>
        <?php echo __('at','eventorganiser') . ' '.eo_get_venue_name(); ?>
      </li>

    <?php endwhile; ?>

  </ul>

<?php elseif( ! empty($eo_event_loop_args['no_events']) ): ?>

  <ul id="<?php echo esc_attr($id);?>" class="<?php echo esc_attr($classes);?>" >
    <li class="eo-no-events" > <?php echo $eo_event_loop_args['no_events']; ?> </li>
  </ul>

<?php endif; ?>

