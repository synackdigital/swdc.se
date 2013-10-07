<?php global $speakers_query; if ($speakers_query->have_posts()) : ?>
  <div class="session-speakers">
    <?php while ($speakers_query->have_posts()) : $speakers_query->the_post(); ?>
      <?php get_template_part('content', 'speaker'); ?>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
