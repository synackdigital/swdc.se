<?php
/**
 * @package WordPress
 * @subpackage swdc
 */

get_header(); ?>

    <div id="main">
      <a class="home-link" href="<?php echo home_url(); ?>" title="Return to home">Home</a>

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
        <?php eo_get_template_part('event-meta','event-single'); ?>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
      // End the Loop
      endwhile; endif; ?>
    </div>

<?php dynamic_sidebar('sponsors'); ?>
<?php get_footer(); ?>
