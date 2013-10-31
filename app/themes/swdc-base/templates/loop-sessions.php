<?php
  global $sessions_query;
  $sessions_query = new WP_Query( SWDCSession::session_args_for_event( get_the_ID() ) );
  if ($sessions_query->have_posts()) : ?>
  <ul class="event-sessions">
    <?php while ($sessions_query->have_posts()) : $sessions_query->the_post(); ?>
    <li class="event-session"><?php get_template_part('templates/content', 'session'); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; // $sessions_query->have_posts() ?>

<?php wp_reset_postdata(); ?>
