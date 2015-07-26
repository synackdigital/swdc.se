<?php
  global $speakers_query;
  $speakers_query = new WP_Query( SWDCSpeaker::speaker_args_for_session( get_the_ID() ) );
  if ( $speakers_query->have_posts() ) :
?>
  <ul class="session-speakers" style="float:none!important;width:auto;margin-top:0;margin-left:0;">
    <?php while ($speakers_query->have_posts()) : $speakers_query->the_post(); ?>
    <li class="session-speaker clearfix" style="float:none;width:auto;margin:0 0 2em;"><?php get_template_part('templates/content', 'speaker'); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; // $speakers_query->have_posts() ?>

<?php wp_reset_postdata(); ?>
