<div class="speaker">
  <span class="speaker-title"><?php the_title(); ?></span>
  <?php if ( class_exists('SWDCSpeaker') ) : ?>
    <span class="speaker-company"><?php echo SWDCSpeaker::organization(); ?></span>
  <?php endif; ?>
</div>
