<?php global $sessions_query; if ($sessions_query->have_posts()) : ?>
  <div class="event-sessions">
    <?php while ($sessions_query->have_posts()) : $sessions_query->the_post(); ?>
      <?php get_template_part('content', 'session'); ?>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
