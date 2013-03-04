<?php
/**
 * @package WordPress
 * @subpackage devnull
 */

get_header(); ?>

    <div id="main">
      <?php
      // Echo a link to home
      if(!is_front_page())
        echo '<a class="home-link" href="'.home_url().'" title="Return to home">Home</a>';

      // Start the Loop
      if(have_posts()): while(have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
      // End the Loop
      endwhile; endif; ?>
    </div>

<?php get_footer(); ?>