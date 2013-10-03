<?php
/**
 * @package WordPress
 * @subpackage devnull
 */

get_header(); ?>

    <div id="main">
      <p><a class="home-link" href="<?php echo home_url(); ?>" title="Return to home">Home</a></p>

      <?php
      // Start the Loop
      if(have_posts()): while(have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('eo-event'); ?>>
        <header class="entry-header">
          <?php
            if (has_post_thumbnail())
              the_post_thumbnail();
          ?>
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
      // End the Loop
      endwhile; endif; ?>

      <div class="eo-meta">
        <?php eo_get_template_part('event-meta','event-single'); ?>
      </div>
    </div>

<?php get_footer(); ?>
