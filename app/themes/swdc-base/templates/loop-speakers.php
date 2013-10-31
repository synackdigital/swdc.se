<?php
  global $speakers_query;
  $speakers_query = new WP_Query( SWDCSpeaker::speaker_args_for_session( get_the_ID() ) );
  if ( $speakers_query->have_posts() ) :
?>
  <ul class="session-speakers">
    <?php while ($speakers_query->have_posts()) : $speakers_query->the_post(); ?>
    <li class="session-speaker"><?php get_template_part('templates/content', 'speaker'); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; // $speakers_query->have_posts() ?>

<?php wp_reset_postdata(); ?>
