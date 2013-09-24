<?php
  $start_timestamp = get_post_meta(get_the_ID(), '_swdc_start_timestamp', true);
  $end_timestamp = get_post_meta(get_the_ID(), '_swdc_end_timestamp', true);
?>

<div class="session">
  <span class="session-details">
    <span class="session-title"><?php the_title(); ?></span>
    <span class="session-time">
      <?php echo date("d M", $start_timestamp); ?>,
      <?php echo date("H:i", $start_timestamp); ?> –
      <?php echo date("H:i", $end_timestamp); ?>
    </span>
  </span>
  <?php if ( class_exists('SWDCSpeaker') ) : ?>
    <?php global $speakers_query; $speakers_query = new WP_Query( SWDCSpeaker::speaker_args_for_session( get_the_ID() ) ); ?>

    <?php if ( $speakers_query->have_posts() ) : ?>
      <?php get_template_part('loop', 'speaker'); ?>
    <?php endif; ?>
  <?php endif; ?>
</div>
