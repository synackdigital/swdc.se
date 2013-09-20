<?php
/**
 * @package WordPress
 * @subpackage swdc
 */

get_header(); ?>

    <?php // Start the Loop
    if(have_posts()): while(have_posts()): the_post(); ?>

    <header class="container">
        <h1><?php the_title(); ?></h1>
    </header>

    <div id="main" class="container">
      <aside>
        <?php
          if (has_post_thumbnail())
            the_post_thumbnail(array(435, 435));
        ?>
        <?php eo_get_template_part('event-meta','event-single'); ?>
        <?php dynamic_sidebar('sponsors'); ?>
      </aside>
      <article id="post-<?php the_ID(); ?>" <?php post_class('eo-event'); ?>>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>

    </div>

    <?php if ( class_exists('SWDCSession') ) : ?>
      <?php global $sessions_query; $sessions_query = new WP_Query( SWDCSession::session_args_for_event( get_the_ID() ) ); ?>

      <?php if ( $sessions_query->have_posts() ) : ?>
        <h2>Planned sessions:</h2>
        <?php get_template_part('loop', 'session'); ?>
      <?php endif; ?>
    <?php endif; ?>

    <?php // End the Loop
    endwhile; endif; ?>

<?php get_footer(); ?>
