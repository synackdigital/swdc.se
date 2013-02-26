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

      <aside class="flexslider carousel">
        <ul class="slides">
          <li>
            <img src="http://www.escapedevnull.com/files/2012/02/Screenshot-at-2012-04-10-215535.png" alt="">
          </li>
          <li>
            <img src="http://www.escapedevnull.com/files/2012/02/IMG_20121020_134106.jpg" alt="">
          </li>
        </ul>
      </aside>

      <aside>
        <h1>Past events</h1>
        <ul class="invisilist events">
          <li class="box green event">
            <img src="http://genericwitticism.com/spotify-logo-96x96-no-tagline.png" alt="" class="sponsor">
            <h2><a href="#">/dev/null Spotify</a></h2>
            <span class="poi">Debaser Medis, Stockholm</span>
            <span class="datetime">24 April 2013, 08:30:00 CET</span>
          </li>
          <li class="box cyan event">
            <img src="http://genericwitticism.com/devnull/dice.png" alt="" class="sponsor">
            <h2><a href="#">/dev/null DICE 10</a></h2>
            <span class="poi">Debase Medis, Stockholm</span>
            <span class="datetime">24 April 2013, 08:30:00 CET</span>
          </li>
          <li class="box blue event">
            <img src="http://www.greenergrasswebdesign.com/valtechlogo.png" alt="" class="sponsor">
            <h2><a href="#">/dev/null Valtech</a></h2>
            <span class="poi">Valtech, Stockholm</span>
            <span class="datetime">24 April 2013, 08:30:00 CET</span>
          </li>
          <li class="box violet event">
            <img src="http://genericwitticism.com/devnull/dice.png" alt="" class="sponsor">
            <h2><a href="#">/dev/null DICE</a></h2>
            <span class="poi">Debaser Medis, Stockholm</span>
            <span class="datetime">24 April 2013, 08:30:00 CET</span>
          </li>
          <li class="box magenta event">
            <img src="http://genericwitticism.com/svensklanemarknad.png" alt="" class="sponsor">
            <h2><a href="#">Lost in Space with Svensk Lånemarknad</a></h2>
            <span class="poi">Svensk Lånemarknad, Stockholm</span>
            <span class="datetime">24 April 2013, 08:30:00 CET</span>
          </li>
        </ul>
      </aside>
    </div>

<?php get_footer(); ?>