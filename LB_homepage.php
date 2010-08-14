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

          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar( 'homepage' ) ) : // begin homepage sidebar widgets
          ?>
          <?php endif; // end homepage sidebar widgets
          ?>
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
