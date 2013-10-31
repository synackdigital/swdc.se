<figure class="speaker">
  <?php if( has_post_thumbnail() ) the_post_thumbnail('thumbnail'); ?>
  <figcaption>
    <span class="speaker-name"><?php the_title(); ?></span>
    <span class="speaker-company"><?php echo SWDCSpeaker::organization(); ?></span>
  </figcaption>
</figure>
