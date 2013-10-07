<div class="speaker">
  <?php if( has_post_thumbnail() ) the_post_thumbnail(array(60,60)); ?>
  <div class="speaker-details">
    <span class="speaker-title"><?php the_title(); ?></span>
    <?php if ( class_exists('SWDCSpeaker') ) : ?><span class="speaker-company"><?php echo SWDCSpeaker::organization(); ?></span><?php endif; ?>
  </div>
</div>
