<?php
/**
 * @package WordPress
 * @subpackage devnull
 */

get_header(); ?>

  <body <?php body_class(); ?>>

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

    <script>
      var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
      g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
      s.parentNode.insertBefore(g,s)}(document,"script"));
    </script>
  </body>
</html>
