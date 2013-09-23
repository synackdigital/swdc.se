<?php
/**
 * @package WordPress
 * @subpackage swdc
 */

get_header(); ?>

    <?php // Start the Loop
    if(have_posts()): while(have_posts()): the_post(); ?>

    <header class="container">
        <h1 class="page-title"><?php echo bloginfo( 'name' ); ?></h1>
    </header>

    <div id="main" class="container">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>

      <?php // Display upcoming and current events
      if(is_front_page()) : ?>
      <aside class="events future-events">
        <?php echo do_shortcode('[eo_events event_start_after="today" showpastevents=false]'); ?>
      </aside>
      <?php endif; ?>

      <?php // Display past events
      if(is_front_page()) : ?>
      <aside class="events past-events">
        <?php echo do_shortcode('[eo_events event_end_before="today" showpastevents=true orderby="eventstart" order="DESC"]'); ?>
      </aside>
      <?php endif; ?>
    </div>

    <?php // End the Loop
    endwhile; endif; ?>

<?php get_footer(); ?>
