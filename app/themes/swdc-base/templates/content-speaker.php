<figure class="speaker" style="float:left;margin-right:30px;max-width:100px;">
  <?php if( has_post_thumbnail() ) the_post_thumbnail('thumbnail'); ?>
  <figcaption>
    <span class="speaker-name"><?php the_title(); ?></span>
    <span class="speaker-company"><?php echo SWDCSpeaker::organization(); ?></span>
  </figcaption>
</figure>
<div class="speaker__bio"><?php the_content(); ?></div>
