<?php
/**
 * @package WordPress
 * @subpackage devnull
 */

get_header(); ?>

    <div id="main">
      <?php
      // Start the Loop
      if(have_posts()): while(have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h1 class="entry-title"><?php
            if(is_front_page()):
              bloginfo( 'name' );
              echo '<i class="cursor">&nbsp;</i>';
            else:
              the_title();
            endif;
            ?></h1>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
      // End the Loop
      endwhile; endif;

      // Display upcoming and current events
      if(is_front_page()):
      ?>
      <aside class="events future-events">
        <h1>Upcoming events</h1>
        <?php
          echo do_shortcode('[eo_events event_start_after="today" showpastevents=false]');
        ?>
      </aside>
      <?php
      endif;

      // Display past events
      if(is_front_page()):
      ?>
      <aside class="events past-events">
        <h1>Past events</h1>
        <?php
          echo do_shortcode('[eo_events event_end_before="today" showpastevents=true orderby="eventstart" order="DESC"]');
        ?>
      </aside>
      <?php
      endif;

      ?>
    </div>

<?php get_footer(); ?>