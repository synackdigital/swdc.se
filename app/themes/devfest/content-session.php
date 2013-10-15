<?php
  $id = get_the_ID();
  $content = get_the_content();
  $title = get_the_title();

  $start_timestamp = get_post_meta(get_the_ID(), '_swdc_start_timestamp', true);
  $end_timestamp = get_post_meta(get_the_ID(), '_swdc_end_timestamp', true);
?>
<div class="session">
  <?php if ( class_exists('SWDCSpeaker') ) : ?>
    <?php global $speakers_query; $speakers_query = new WP_Query( SWDCSpeaker::speaker_args_for_session( $id ) ); ?>

    <?php if ( $speakers_query->have_posts() ) : ?>
      <?php get_template_part('loop', 'speaker'); ?>
    <?php endif; ?>
  <?php endif; ?>
  <a class="session-details" href="#" title="<?php echo $title; ?>">
    <span class="session-title"><?php echo $title; ?></span>
    <span class="session-time">
      <?php echo date("d M", $start_timestamp); ?>,
      <?php echo date("H:i", $start_timestamp); ?> –
      <?php echo date("H:i", $end_timestamp); ?>
    </span>
  </a>
  <div class="session-body">
    <?php echo $content; ?>
  </div>
</a>
