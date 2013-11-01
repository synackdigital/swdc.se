
<?php if ( is_singular() && 'event' == get_post_type() ) : ?>
  <section class="widget widget-event-meta">
  <?php get_template_part('templates/event-meta'); ?>
  </section>
<?php endif; ?>

<?php dynamic_sidebar('sidebar-primary'); ?>
