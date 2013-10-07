<?php global $sessions_query; if ($sessions_query->have_posts()) : ?>
  <ul class="event-sessions">
    <?php while ($sessions_query->have_posts()) : $sessions_query->the_post(); ?>
      <li><?php get_template_part('content', 'session'); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>
