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

      <!-- LOOP SESSIONS IN ORDER OF START TIME HERE -->
      <ul class="sessions">
        <h2>Sessions</h2>
        <li class="session">
          <h3>
            <small>9:00&ndash;10:00</small>
            Session title
          </h3>
          <div class="description">
            <p>Session content, Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          <div class="speaker">
            <img src="#" alt="Speaker image">
            <h4>Speaker name</h4>
            <p>Speaker description. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </li>
      </ul>

    </div>

    <?php // End the Loop
    endwhile; endif; ?>

<?php get_footer(); ?>
