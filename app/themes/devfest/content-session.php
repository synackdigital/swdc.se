<div class="session">
  <span class="session-title"><?php the_title(); ?></span>
  <?php if ( class_exists('SWDCSpeaker') ) : ?>
    <?php global $speakers_query; $speakers_query = new WP_Query( SWDCSpeaker::speaker_args_for_session( get_the_ID() ) ); ?>

    <?php if ( $speakers_query->have_posts() ) : ?>
      <h3>Speakers:</h3>
      <?php get_template_part('loop', 'speaker'); ?>
    <?php endif; ?>
  <?php endif; ?>

</div>
