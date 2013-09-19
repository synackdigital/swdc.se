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

    <div class="container event-sessions">
      <?php get_template_part('list', 'session'); ?>
    </div>

    <?php // End the Loop
    endwhile; endif; ?>

<?php get_footer(); ?>
