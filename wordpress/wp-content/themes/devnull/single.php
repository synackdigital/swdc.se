<?php
/**
 * @package WordPress
 * @subpackage devnull
 */

get_header(); ?>

    <div id="main">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    </div>


    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/vendor/jquery.flexslider-min.js"></script>
    <script src="js/helper.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
