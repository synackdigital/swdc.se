<div class="speaker">
  <?php if( has_post_thumbnail() ) the_post_thumbnail(); ?>
  <div class="speaker-details">
    <span class="speaker-title"><?php the_title(); ?></span>
    <span class="speaker-company"><?php echo SWDCSpeaker::organization(); ?></span>
  </div>
</div>
