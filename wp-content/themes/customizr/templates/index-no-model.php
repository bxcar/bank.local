<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * Includes the loop.
 *
 *
 * @package Customizr
 * @since Customizr 1.0
 */
?>
<?php get_header() ?>


  <?php
    // This hook is used to render the following elements(ordered by priorities) :
    // slider
    // singular thumbnail
    do_action('__before_main_wrapper')
  ?>

    <div id="main-wrapper" class="section">

            <?php
              //this was the previous implementation of the big heading.
              //The next one will be implemented with the slider module
            ?>
          <?php  if ( apply_filters( 'big_heading_enabled', false && ! czr_fn_is_real_home() && ! is_404() ) ): ?>
            <div class="container-fluid">
              <?php
                if ( czr_fn_is_registered_or_possible( 'archive_heading' ) )
                  $_heading_template = 'content/post-lists/headings/archive_heading';
                elseif ( czr_fn_is_registered_or_possible( 'search_heading' ) )
                  $_heading_template = 'content/post-lists/headings/search_heading';
                elseif ( czr_fn_is_registered_or_possible('post_heading') )
                  $_heading_template = 'content/singular/headings/post_heading';
                else //pages and fallback
                  $_heading_template = 'content/singular/headings/page_heading';

                czr_fn_render_template( $_heading_template );
              ?>
            </div>
          <?php endif ?>


          <?php
            /*
            * Featured Pages | 10
            * Breadcrumbs | 20
            */
            do_action('__before_main_container')
          ?>

          <div class="<?php czr_fn_main_container_class() ?>" role="main">

            <?php do_action('__before_content_wrapper'); ?>

            <div class="<?php czr_fn_column_content_wrapper_class() ?>">

                <?php do_action('__before_content'); ?>

                <div id="content" class="<?php czr_fn_article_container_class() ?>">

                  <?php

                    /* Archive regular headings */
                    if ( apply_filters( 'regular_heading_enabled', ! czr_fn_is_real_home() && ! is_404() ) ):

                      if ( czr_fn_is_registered_or_possible( 'archive_heading' ) )
                        czr_fn_render_template( 'content/post-lists/headings/regular_archive_heading',
                          array(
                            'model_class' => 'content/post-lists/headings/archive_heading'
                          )
                        );
                      elseif ( czr_fn_is_registered_or_possible( 'search_heading' ) )
                        czr_fn_render_template( 'content/post-lists/headings/regular_search_heading' );

                    endif;


                    do_action( '__before_loop' );

                    if ( ! czr_fn_is_home_empty() ) {
                        if ( have_posts() && ! is_404() ) {
                            //Problem to solve : we want to be able to inject any loop item ( grid-wrapper, alternate, etc ... ) in the loop model
                            //=> since it's not set yet, it has to be done now.
                            //How to do it ?

                            //How does the loop works ?
                            //The loop has its model CZR_loop_model_class
                            //This loop model might setup a custom query if passed in model args
                            //this loop model needs a loop item which looks like :
                            // Array = 'loop_item' => array(
                            //    (
                            //        [0] => modules/grid/grid_wrapper
                            //        [1] => Array
                            //            (
                            //                [model_id] => post_list_grid
                            //            )

                            //      )
                            // )
                            // A loop item will be turned into 2 properties :
                            // 1) 'loop_item_template',
                            // 2) 'loop_item_args'
                            //
                            //Then, when comes the time of rendering the loop view with the loop template ( templates/parts/loop ), we will fire :
                            //czr_fn_render_template(
                            //     czr_fn_get_property( 'loop_item_template' ),//the loop item template is set the loop model. Example : "modules/grid/grid_wrapper"
                            //     czr_fn_get_property( 'loop_item_args' ) <= typically : the model that we inject in the loop item that we want to render
                            // );

                            //Here, we inject a specific loop item, the main_content, inside the loop
                            //What is the main_content ?
                            //=> depends on the current context, @see czr_fn_get_main_content_loop_item() in core/functions-ccat.php


                            czr_fn_render_template('loop');

                        } else {//no results

                            if ( is_search() )
                              czr_fn_render_template( 'content/no-results/search_no_results' );
                            else
                              czr_fn_render_template( 'content/no-results/404' );
                        }
                    }//not home empty

                    /*
                     * Optionally attached to this hook :
                     * - In single posts:
                     *   - Author bio | 10
                     *   - Related posts | 20
                     * - In posts and pages
                     *   - Comments | 30
                     */
                    do_action( '__after_loop' );
                  ?>
                </div>

                <?php
                  /*
                   * Optionally attached to this hook :
                   * - In single posts:
                   *   - Author bio | 10
                   *   - Related posts | 20
                   * - In posts and pages
                   *   - Comments | 30
                   */
                  do_action( '__after_content' );

                  /*
                  * SIDEBARS
                  */
                  /* By design do not display sidebars in 404 or home empty */
                  if ( ! ( czr_fn_is_home_empty() || is_404() ) ) {
                    if ( czr_fn_is_registered_or_possible('left_sidebar') )
                      get_sidebar( 'left' );

                    if ( czr_fn_is_registered_or_possible('right_sidebar') )
                      get_sidebar( 'right' );

                  }
                ?>

            </div><!-- .column-content-wrapper -->

            <?php do_action('__after_content_wrapper'); ?>


          </div><!-- .container -->

          <?php do_action('__after_main_container'); ?>

    </div><!-- #main-wrapper -->

    <?php do_action('__after_main_wrapper'); ?>

    <?php
      if ( czr_fn_is_registered_or_possible('posts_navigation') ) :
    ?>
      <div class="container-fluid">
        <?php
          if ( !is_singular() )
            czr_fn_render_template( "content/post-lists/navigation/post_list_posts_navigation" );
          else
            czr_fn_render_template( "content/singular/navigation/singular_posts_navigation" );
        ?>
      </div>
    <?php endif ?>

<?php get_footer() ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47665804 = new Ya.Metrika2({
                    id:47665804,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    ut:"noindex"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47665804?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Top100 (Kraken) Counter -->
<script>
    (function (w, d, c) {
    (w[c] = w[c] || []).push(function() {
        var options = {
            project: 4521925,
        };
        try {
            w.top100Counter = new top100(options);
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src =
    (d.location.protocol == "https:" ? "https:" : "http:") +
    "//st.top100.ru/top100/top100.js";

    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(window, document, "_top100q");
</script>
<noscript>
  <img src="//counter.rambler.ru/top100.cnt?pid=4521925" alt="Топ-100" />
</noscript>
<!-- END Top100 (Kraken) Counter -->
<!--Openstat-->
<span id="openstat1"></span>
<script type="text/javascript">
var openstat = { counter: 1, next: openstat };
(function(d, t, p) {
var j = d.createElement(t); j.async = true; j.type = "text/javascript";
j.src = ("https:" == p ? "https:" : "http:") + "//openstat.net/cnt.js";
var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s);
})(document, "script", document.location.protocol);
</script>
<!--/Openstat-->
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2953540", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=2953540;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
