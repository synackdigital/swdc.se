<?php
  $start_timestamp = get_post_meta(get_the_ID(), '_swdc_start_timestamp', true);
  $end_timestamp = get_post_meta(get_the_ID(), '_swdc_end_timestamp', true);

  // We are inside a custom WP_Query which is broken by the SWDCSpeaker loop before we echo the_content.
  // Therefore we store the_content before the loop ends
  $the_content = get_the_content();
?>

<div class="session">
  <div class="session-details">
    <span class="session-title"><?php the_title(); ?></span>
    <span class="session-time">
      <?php echo date("d M", $start_timestamp); ?>,
      <?php echo date("H:i", $start_timestamp); ?> –
      <?php echo date("H:i", $end_timestamp); ?>
    </span>
  </div>
  <?php if ( class_exists('SWDCSpeaker') ) get_template_part('templates/loop', 'speakers'); ?>
  <div class="session-content">
    <?php echo $the_content; ?>
  </div>
</div>
