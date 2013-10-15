<?php
/**
 * @package WordPress
 * @subpackage swdc
 */

get_header(); ?>

    <?php // Start the Loop
    if(have_posts()): while(have_posts()): the_post(); ?>

    <header class="container">
      <div class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
      </div>
    </header>

    <div id="main" class="container">
      <article id="post-<?php the_ID(); ?>" <?php post_class('eo-event'); ?> style="width:60%;float:left;">
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
      <div style="width:30%;float:right;">
      <?php if ( class_exists('SWDCSpeaker') ) : ?>
        <?php global $speakers_query; $speakers_query = new WP_Query( SWDCSpeaker::speaker_args_for_session( get_the_ID() ) ); ?>

        <?php if ( $speakers_query->have_posts() ) : ?>
          <?php get_template_part('loop', 'speaker'); ?>
        <?php endif; ?>
      <?php endif; ?>
      </div>
    </div>
    <?php // End the Loop
    endwhile; endif; ?>

<?php get_footer(); ?>
