<?php
  $start_timestamp = get_post_meta(get_the_ID(), '_swdc_start_timestamp', true);
  $end_timestamp = get_post_meta(get_the_ID(), '_swdc_end_timestamp', true);
?>

<div class="session">
  <h3><?php the_title(); ?></h3>
  <?php if ( class_exists('SWDCSpeaker') ) : ?>
    <?php global $speakers_query; $speakers_query = new WP_Query( SWDCSpeaker::speaker_args_for_session( get_the_ID() ) ); ?>

    <?php if ( $speakers_query->have_posts() ) : ?>
      <?php get_template_part('loop', 'speaker'); ?>
    <?php endif; ?>
  <?php endif; ?>
</div>
