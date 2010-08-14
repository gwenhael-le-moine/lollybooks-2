<?php
  /*
   Template Name: Homepage
  */
  // Présentation
?>
<?php get_header() ?>
<?php get_sidebar() ?>

      <section id="featured">
        <article id="event">
          <aside>Catégorie Bla</aside>
          <header>
			<h2 class="entry-title"><a href="#" rel="bookmark" title="Permalink to this POST TITLE">This be the title</a></h2>
		  </header>

		  <footer class="post-info">
			<abbr class="published" title="2005-10-10T14:07:00-07:00"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->
			  10th October 2005
			</abbr>

			<address class="vcard author">
			  By <a class="url fn" href="#">Enrique Ramírez</a>

			</address>
		  </footer><!-- /.post-info -->

		  <div class="entry-content">
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
		  </div><!-- /.entry-content -->
        </article>

        <aside id="calendar">
          <h3 class="widget-title">Events Calendar</h3>
          <div id="calendar_wrap">
            <table summary="Event Calendar" id="wp-calendar">
              <caption id="calendar-month" class="calendar-month">August&nbsp; 2010</caption>
              <thead><tr>
                  <th abbr="Monday" scope="col" title="Monday">Mon</th>
                  <th abbr="Tuesday" scope="col" title="Tuesday">Tue</th>
                  <th abbr="Wednesday" scope="col" title="Wednesday">Wed</th>
                  <th abbr="Thursday" scope="col" title="Thursday">Thu</th>
                  <th abbr="Friday" scope="col" title="Friday">Fri</th>
                  <th abbr="Saturday" scope="col" title="Saturday">Sat</th>
                  <th abbr="Sunday" scope="col" title="Sunday">Sun</th>
              </tr></thead>
              <tfoot><tr>
                  <td class="pad" style="text-align: left;" colspan="2">&nbsp;<span id="EC_previousMonth">«Jul</span></td>
                  <td class="pad" colspan="3" id="EC_loadingPane" style="text-align: center;"></td>
                  <td class="pad" style="text-align: right;" colspan="2"><span id="EC_nextMonth">Sep»</span>&nbsp;</td>
              </tr></tfoot>
              <tbody><tr>
                  <td colspan="6" class="padday">&nbsp;</td>
                  <td><span id="events-calendar-1">1</span></td>
                </tr><tr>
                  <td><span id="events-calendar-2">2</span></td>
                  <td><span id="events-calendar-3">3</span></td>
                  <td><span id="events-calendar-4">4</span></td>
                  <td><span id="events-calendar-5">5</span></td>
                  <td><span id="events-calendar-6">6</span></td>
                  <td><span id="events-calendar-7">7</span></td>
                  <td><span id="events-calendar-8">8</span></td>
                </tr><tr>
                  <td id="todayWidget" style="border: thin solid blue; font-weight: bold;"><span id="events-calendar-9">9</span></td>
                  <td><span id="events-calendar-10">10</span></td>
                  <td><span id="events-calendar-11">11</span></td>
                  <td><span id="events-calendar-12">12</span></td>
                  <td><span id="events-calendar-13">13</span></td>
                  <td><span id="events-calendar-14">14</span></td>
                  <td><span id="events-calendar-15">15</span></td>
                </tr><tr>
                  <td><span id="events-calendar-16">16</span></td>
                  <td><span id="events-calendar-17">17</span></td>
                  <td><span id="events-calendar-18">18</span></td>
                  <td><span id="events-calendar-19">19</span></td>
                  <td><span id="events-calendar-20">20</span></td>
                  <td><span id="events-calendar-21">21</span></td>
                  <td><span id="events-calendar-22">22</span></td>
                </tr><tr>
                  <td><span id="events-calendar-23">23</span></td>
                  <td><span id="events-calendar-24">24</span></td>
                  <td><span id="events-calendar-25">25</span></td>
                  <td><span id="events-calendar-26">26</span></td>
                  <td><span id="events-calendar-27">27</span></td>
                  <td><span id="events-calendar-28">28</span></td>
                  <td><span id="events-calendar-29">29</span></td>
                </tr><tr>
                  <td><span id="events-calendar-30">30</span></td>
                  <td><span id="events-calendar-31">31</span></td>
                  <td colspan="5" class="padday">&nbsp;</td>
            </tr></tbody></table>
            <!-- WPEC script starts here -->
            <!-- <script type="text/javascript"> -->
            <!-- // <![CDATA[ -->
            <!-- tb_pathToImage ="http://localhost/~cycojesus/wordpress/wp-includes/js/thickbox/loadingAnimation.gif"; -->
            <!-- tb_closeImage = "http://localhost/~cycojesus/wordpress/wp-includes/js/thickbox/tb-close.png"; -->
            <!-- (function($) { -->
            <!-- 	ecd.jq(document).ready(function() { -->
            <!-- 		ecd.jq('#EC_previousMonth') -->
            <!-- 			.append('&#171;Jul') -->
            <!-- 			.mouseover(function() { -->
            <!-- 				ecd.jq(this).css('cursor', 'pointer'); -->
            <!--       		}) -->
            <!-- 			.click(function() { -->
            <!-- 				ecd.jq('#EC_loadingPane').append('<img src="http://localhost/~cycojesus/wordpress/wp-content/plugins/events-calendar/images/loading.gif" style="width:50px;" />'); -->
            <!-- 				ecd.jq.get("http://localhost/~cycojesus/wordpress/index.php", -->
            <!-- 					{EC_action: "switchMonth", EC_month: 7, EC_year:  2010}, -->
            <!-- 					function(ecdata) { -->
            <!-- 						ecd.jq('#calendar_wrap').empty().append( ecdata ); -->
            <!-- 					}); -->
            <!-- 				}); -->

            <!-- 		ecd.jq('#EC_nextMonth') -->
            <!-- 			.prepend('Sep&#187;') -->
            <!-- 			.mouseover(function() { -->
            <!-- 				ecd.jq(this).css('cursor', 'pointer'); -->
            <!--       		}) -->
            <!-- 			.click(function() { -->
            <!-- 				ecd.jq('#EC_loadingPane').append('<img src="http://localhost/~cycojesus/wordpress/wp-content/plugins/events-calendar/images/loading.gif" style="width:50px;" />'); -->
            <!-- 				ecd.jq.get("http://localhost/~cycojesus/wordpress/index.php", -->
            <!-- 					{EC_action: "switchMonth", EC_month: 9, EC_year:  2010}, -->
            <!-- 					function(ecdata) { -->
            <!-- 						ecd.jq('#calendar_wrap').empty().append( ecdata ); -->
            <!-- 					}); -->
            <!-- 				}); -->

            <!-- 		ecd.jq.preloadImages = function() { -->
            <!-- 			for (var i = 0; i < arguments.length; i++) { -->
            <!-- 				jQuery("#calendar_wrap img").attr("src", arguments[i]); -->
            <!-- 			} -->
            <!-- 		} -->
            <!-- 		ecd.jq.preloadImages("http://localhost/~cycojesus/wordpress/wp-content/plugins/events-calendar/images/loading.gif"); -->
            <!-- 	}); -->
            <!-- })(jQuery); -->
            <!-- //]]> -->
            <!-- </script> -->

            <!-- WPEC script ends here. -->
          </div>
        </aside>

        <aside id="radio">
          <h3 class="widget-title">Radio online</h3><div id="playradio" style="height: 100px; overflow-y: auto; overflow-x: hidden;"><a href="http://localhost/%7Ecycojesus/wordpress/wp-content/uploads/2010/04/LollybooksRadioOnlinevol7.mp3">Volume 7</a><br><a href="http://localhost/%7Ecycojesus/wordpress/wp-content/uploads/2010/04/LollybooksRadioOnlinevol6.mp3">Volume 6</a><br><a href="http://localhost/%7Ecycojesus/wordpress/wp-content/uploads/2010/04/Lollybooks-Radio-Online-vol5.mp3">Volume 5</a><br><a href="http://localhost/%7Ecycojesus/wordpress/wp-content/uploads/2010/04/Lollybooks-Radio-online-vol4.mp3">Volume 4</a><br><a href="http://localhost/%7Ecycojesus/wordpress/wp-content/uploads/2010/04/Lollybooks-Radio-Online-Vol-3-31.3.2010.mp3">Volume 3</a><br><a href="http://localhost/%7Ecycojesus/wordpress/wp-content/uploads/2010/03/Lollybooks-Radio-Online-Vol2-24.3.2010.mp3">Volume 2</a><br><a href="http://localhost/%7Ecycojesus/wordpress/wp-content/uploads/2010/03/Lollybooks-Radio-Online-Vol-1-17.3.2010.mp3">Volume 1</a><br></div>
        </aside>
      </section>
      
      <aside id="services">
        <h1>SERVICES</h1>
        <!-- list posts category 'homepage_services' -->
        <article class="left">
		  <div class="entry-content">
             <a href="#">image text</a>
		  </div><!-- /.entry-content -->
        </article>
        <article class="left">
		  <div class="entry-content">
             <a href="#">image text</a>
		  </div><!-- /.entry-content -->
        </article>
        <article class="left">
		  <div class="entry-content">
             <a href="#">image text</a>
		  </div><!-- /.entry-content -->
        </article>
        <article class="left">
		  <div class="entry-content">
             <a href="#">image text</a>
		  </div><!-- /.entry-content -->
        </article>
        <article class="left">
		  <div class="entry-content">
             <a href="#">image text</a>
		  </div><!-- /.entry-content -->
        </article>
      </aside>
      
      <section id="latest-articles">
        <header>Latest articles</header>
        <article class="left">
          <aside>Catégorie Bla</aside>
          <header>
			<h2 class="entry-title"><a href="#" rel="bookmark" title="Permalink to this POST TITLE">This be the title</a></h2>
		  </header>

		  <footer class="post-info">
			<abbr class="published" title="2005-10-10T14:07:00-07:00"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->
			  10th October 2005
			</abbr>

			<address class="vcard author">
			  By <a class="url fn" href="#">Enrique Ramírez</a>

			</address>
		  </footer><!-- /.post-info -->

		  <div class="entry-content">
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
		  </div><!-- /.entry-content -->
        </article>
        
        <article class="right">
          <aside>Catégorie Bla</aside>
          <header>
			<h2 class="entry-title"><a href="#" rel="bookmark" title="Permalink to this POST TITLE">This be the title</a></h2>
		  </header>

		  <footer class="post-info">
			<abbr class="published" title="2005-10-10T14:07:00-07:00"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->
			  10th October 2005
			</abbr>

			<address class="vcard author">
			  By <a class="url fn" href="#">Enrique Ramírez</a>

			</address>
		  </footer><!-- /.post-info -->

		  <div class="entry-content">
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
		  </div><!-- /.entry-content -->
        </article>

        <article class="left">
          <aside>Catégorie Bla</aside>
          <header>
			<h2 class="entry-title"><a href="#" rel="bookmark" title="Permalink to this POST TITLE">This be the title</a></h2>
		  </header>

		  <footer class="post-info">
			<abbr class="published" title="2005-10-10T14:07:00-07:00"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->
			  10th October 2005
			</abbr>

			<address class="vcard author">
			  By <a class="url fn" href="#">Enrique Ramírez</a>

			</address>
		  </footer><!-- /.post-info -->

		  <div class="entry-content">
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
		  </div><!-- /.entry-content -->
        </article>

        <article class="right">
          <aside>Catégorie Bla</aside>
          <header>
			<h2 class="entry-title"><a href="#" rel="bookmark" title="Permalink to this POST TITLE">This be the title</a></h2>
		  </header>

		  <footer class="post-info">
			<abbr class="published" title="2005-10-10T14:07:00-07:00"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->
			  10th October 2005
			</abbr>

			<address class="vcard author">
			  By <a class="url fn" href="#">Enrique Ramírez</a>

			</address>
		  </footer><!-- /.post-info -->

		  <div class="entry-content">
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
			<p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nunc vitae libero iaculis elementum. Nullam et justo <a href="#">non sapien</a> dapibus blandit nec et leo. Ut ut malesuada tellus.
            </p>
		  </div><!-- /.entry-content -->
        </article>
      </section>

<?php get_footer() ?>
