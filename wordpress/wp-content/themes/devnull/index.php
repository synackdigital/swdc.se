<?php
/**
 * @package WordPress
 * @subpackage devnull
 */

get_header(); ?>

    <body <?php body_class(); ?>>

        <div id="main">
            <h1 class="pagetitle">escape from /dev/null</h1>
            <article>
                <p>Escape from /dev/null is the world’s first ballroom-sized, web-based science-fiction board-game programming competition. <a href="about.html">Wait, what</a>?</p>
                <p>Do you want to be notified when new events are added? <a href="https://docs.google.com/spreadsheet/viewform?formkey=dFBRckpqajhwTHN5TjcySzJFWmhtZEE6MQ">Sign up here</a>.</p>
                <p>Do you want us to come to your city? <a href="mailto:psvensson@gmail.com">Contact the organizer</a> and tell us!</p>

                <ul class="invisilist events">
                    <li class="box yellow event">
                        <img src="http://www.escapedevnull.com/files/2013/02/ea_logo_dark_12.png" alt="" class="sponsor">
                        <h1><a href="event.html">Lost in Space with EA</a></h1>
                        <span class="poi">EA HQ, Redwood City</span>
                        <span class="datetime">16 March 2013, 12:00:00 AM PDT</span>
                    </li>
                    <li class="box orange event">
                        <img src="http://www.escapedevnull.com/files/2013/02/google-logo-transparent2.png" alt="" class="sponsor">
                        <h1><a href="#">Google goes medieval</a></h1>
                        <span class="poi">Google, Stockholm</span>
                        <span class="datetime">24 April 2013, 08:30:00 CET</span>
                    </li>
                </ul>
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


        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/jquery.flexslider-min.js"></script>
        <script src="js/helper.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
            g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
            s.parentNode.insertBefore(g,s)}(document,"script"));
        </script>
    </body>
</html>
