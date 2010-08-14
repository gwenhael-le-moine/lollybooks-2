<?php
if (function_exists('register_sidebar')) {
   register_sidebar(array(
                       'before_widget' => '<li id="%1$s" class="widget %2$s">',
                       'after_widget' => '</li>',
                       'before_title' => '<h2 class="widgettitle">',
                       'after_title' => '</h2>',
                       ));
   register_sidebar(array(
                       'name' => 'homepage',
                       'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                       'after_widget' => '</aside>',
                       'before_title' => '<h2 class="widgettitle">',
                       'after_title' => '</h2>',
                       ));
}

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
   register_nav_menus(
      array(
         'menu' => __( 'Menu' )
         )
      );
}

/* http://dimox.net/wordpress-breadcrumbs-without-a-plugin/
   Usage:
   <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
*/
function dimox_breadcrumbs() {
   $delimiter = '&raquo;';
   $name = 'Home'; //text for the 'Home' link
   $currentBefore = '<span class="current">';
   $currentAfter = '</span>';
 
   /* if ( !is_home() && !is_front_page() || is_paged() ) { */
 
      echo '<div id="crumbs">';
 
      global $post;
      $home = get_bloginfo('url');
      echo '<a href="' . $home . '">' . $name . '</a> ' . $delimiter . ' ';
 
      if ( is_category(  ) ) {
         global $wp_query;
         $cat_obj = $wp_query->get_queried_object();
         $thisCat = $cat_obj->term_id;
         $thisCat = get_category($thisCat);
         $parentCat = get_category($thisCat->parent);
         if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
         echo $currentBefore . 'Archive by category &#39;';
         single_cat_title();
         echo '&#39;' . $currentAfter;
 
      } elseif ( is_day(  ) ) {
         echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
         echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
         echo $currentBefore . get_the_time('d') . $currentAfter;
 
      } elseif ( is_month(  ) ) {
         echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
         echo $currentBefore . get_the_time('F') . $currentAfter;
 
      } elseif ( is_year(  ) ) {
         echo $currentBefore . get_the_time('Y') . $currentAfter;
 
      } elseif ( is_single(  ) ) {
         $cat = get_the_category(  ); $cat = $cat[0];
         echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
         echo $currentBefore;
         the_title(  );
         echo $currentAfter;
 
      } elseif ( is_page(  ) && !$post->post_parent ) {
         echo $currentBefore;
         the_title(  );
         echo $currentAfter;
 
      } elseif ( is_page(  ) && $post->post_parent ) {
         $parent_id  = $post->post_parent;
         $breadcrumbs = array(  );
         while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
            $parent_id  = $page->post_parent;
         }
         $breadcrumbs = array_reverse($breadcrumbs);
         foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
         echo $currentBefore;
         the_title(  );
         echo $currentAfter;
 
      } elseif ( is_search(  ) ) {
         echo $currentBefore . 'Search results for &#39;' . get_search_query(  ) . '&#39;' . $currentAfter;
 
      } elseif ( is_tag(  ) ) {
         echo $currentBefore . 'Posts tagged &#39;';
         single_tag_title(  );
         echo '&#39;' . $currentAfter;
 
      } elseif ( is_author(  ) ) {
         global $author;
         $userdata = get_userdata($author);
         echo $currentBefore . 'Articles posted by ' . $userdata->display_name . $currentAfter;
 
      } elseif ( is_404(  ) ) {
         echo $currentBefore . 'Error 404' . $currentAfter;
      }
 
      if ( get_query_var('paged') ) {
         if ( is_category(  ) || is_day(  ) || is_month(  ) || is_year(  ) || is_search(  ) || is_tag(  ) || is_author(  ) ) echo ' (';
         echo __('Page') . ' ' . get_query_var('paged');
         if ( is_category(  ) || is_day(  ) || is_month(  ) || is_year(  ) || is_search(  ) || is_tag(  ) || is_author(  ) ) echo ')';
      }
 
      echo '</div>';
 
   /* } */
}

function last_post_from_cat( $cat ) {
   query_posts('showposts=1&category_name=' . $cat);
   while (have_posts()) : the_post();
   echo '<header>';
   echo '<h2 class="entry-title"><a href="'.post_permalink().'" rel="bookmark">'.the_title( '', '', false ).'</a></h2>';
   /* echo '<h2 class="entry-title"><a href="'.the_permalink().'" rel="bookmark" title="Permalink to this post">'.the_title().'</a></h2>'; */
   echo '</header>';
   echo '<footer class="post-info">';
   echo '<abbr class="published" title="'.the_time( 'YYYYMMDDThh:mm:ss+ZZZZ' ).'">';
   echo the_time( 'l, F jS, Y' );
   echo '</abbr>';
   echo '<address class="vcard author">';
   echo 'By <a class="url fn" href="#">'.the_author().'</a>';
   echo '</address>';
   echo '</footer>';
   echo '<div class="entry-content">';
   echo the_content();
   echo '</div>';
   endwhile;
}
?>