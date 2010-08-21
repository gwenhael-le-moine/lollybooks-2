<?php
  /*
   Template Name: Homepage
  */
?>
<?php get_header() ?>
<?php get_sidebar() ?>

      <section id="featured">
        <article id="event">
          <?php $cat_slug = 'lollybooks-cafe'; ?>
          <aside><?php echo get_cat_name_by_slug( $cat_slug ); ?></aside>
          <?php lastest_articles_from_cat( $cat_slug ); ?>
        </article>

       <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar( 'homepage' ) ) : // begin homepage sidebar widgets
       ?>
          <!-- There is no default content -->
       <?php endif; // end homepage sidebar widgets
       ?>
       </section>
          
       <aside id="services">
          <h1>SERVICES</h1>
          <?php 
          $media_items = get_attachments_by_media_tags( 'media_tags=service' );
          if ($media_items) {
             foreach ($media_items as $media_item) {
                echo '<a href="' . $media_item->post_title . '">'; // TODO: define exactly url
                echo '<img src="' . wp_get_attachment_url($media_item->ID) . '" />';
                echo '<p>';
                if ( !empty( $media_item->post_excerpt ) ) echo $media_item->post_excerpt;
                echo '</p>';
                echo '</a>';
             }
          }
          ?>
      </aside>
      
      <section id="latest-articles">
        <header>Latest articles</header>
        <article class="left">
          <?php $cat_slug = 'lollybooks-cafe'; ?>
          <aside><?php echo get_cat_name_by_slug( $cat_slug ); ?></aside>
          <?php lastest_articles_from_cat( $cat_slug ); ?>
        </article>
        
        <article class="right">
          <?php $cat_slug = 'lollybooks-cafe'; ?>
          <aside><?php echo get_cat_name_by_slug( $cat_slug ); ?></aside>
          <?php lastest_articles_from_cat( $cat_slug ); ?>
        </article>

        <article class="left">
          <?php $cat_slug = 'lollybooks-cafe'; ?>
          <aside><?php echo get_cat_name_by_slug( $cat_slug ); ?></aside>
          <?php lastest_articles_from_cat( $cat_slug ); ?>
        </article>

        <article class="right">
          <?php $cat_slug = 'lollybooks-cafe'; ?>
          <aside><?php echo get_cat_name_by_slug( $cat_slug ); ?></aside>
          <?php lastest_articles_from_cat( $cat_slug ); ?>
        </article>
      </section>

       <aside id="partners">
          <h1>PARTNERS</h1>
          <?php 
          $media_items = get_attachments_by_media_tags( 'media_tags=partner&orderby=title&order=ASC' );
          if ($media_items) {
             foreach ($media_items as $media_item) {
                echo '<a href="' . $media_item->post_excerpt . '">';
                echo '<img src="' . wp_get_attachment_url($media_item->ID) . '" alt="' . $media_item->post_excerpt . '" />';
                echo '</a>';
             }
          }
          ?>
      </aside>
      
<?php get_footer() ?>
