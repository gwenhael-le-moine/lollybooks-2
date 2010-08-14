<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

		<!-- "H5": The HTML-5 WordPress Template Theme -->
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>

    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- https://code.google.com/p/ie7-js/ -->
    <!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/trunk/lib/IE9.js"></script>
        <![endif]-->

	</head>
	<body <?php body_class(); ?>>

    <div id="content">
      <header>
        <h1><a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" id="logo" alt="<?php bloginfo('name'); ?>" /></a></h1>

        <div id="subtitle">
          <div id="icons">
            <img id="cafe" src="<?php bloginfo('template_directory'); ?>/images/cafe.png" alt="Café" />
            <img id="books" src="<?php bloginfo('template_directory'); ?>/images/books.png" alt="Books" />
            <img id="wifi" src="<?php bloginfo('template_directory'); ?>/images/wifi.png" alt="Wifi" />
            <img id="friends" src="<?php bloginfo('template_directory'); ?>/images/friends.png" alt="Friends" />
            <img id="lollypops" src="<?php bloginfo('template_directory'); ?>/images/lollypops.png" alt="Lollypops" />
          </div>
          <div id="address"><?php bloginfo('description'); ?><!-- 29 Tô Hiến Thành, Hà Nội, Việt Nam --></div>
        </div>
      </header>
		<nav>
			<menu>
                 <?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>
				<!-- ?php wp_list_pages('title_li=&depth=1'); ? -->
			</menu>
		</nav>

 <?php dimox_breadcrumbs(); ?>
