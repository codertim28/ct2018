<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<meta name="copyright" content="Copyright Tim Poerschke" />
		<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?>
		<?php
		// Seitennummer hinzuf�gen, falls n�tig
		if ( $paged >= 2 || $page >= 2 )
			echo ' / ' . sprintf( __( 'Seite %s', 'shape' ), max( $paged, $page ) );
		?>
		</title>

 		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reaction_buttons.css">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<!-- jQuery und andere Scripts einbinden /-->
		<script type="text/javascript" src="<?php assetsPath('javascript'); ?>/lib/jquery-3.3.1.min.js"></script>

		<!-- Für Google-Ads -->

		<!-- Um AdBlocker zu erkennen -->
		<script src="<?php assetsPath('javascript'); ?>/banner-ad.js"></script>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!-- main-nav -->
		<nav id="main_nav" role="navigation">
			<?php wp_nav_menu(array(
				'container' => false,
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'theme_location' => 'primary'
				)
			); ?>
			<img src="<?php assetsPath('image'); ?>/arrow-left.svg" class="nav-arrow-left animated bounce-left" />
			<img src="<?php assetsPath('image'); ?>/arrow-right.svg" class="nav-arrow-right animated bounce-right" />
		</nav><!-- nav -->
		<div class="top-banner">
			<img id="blog-logo" src="<?php assetsPath('image'); ?>/header1.png" />
			<div class="search-container ct-search-container">
				<form role="search" method="get" id="searchform-1" class="searchform" action="<?php bloginfo('url'); ?>">
					<input type="text" value="" placeholder="Suchbegriff..." name="s" id="s" />
					<button type="submit"><img src="<?php assetsPath('image'); ?>/loupe1.png" alt="Suche" height="20" width="20" /></button>
				</form>
			</div>
			<img id="menu-btn" src="<?php assetsPath('image'); ?>/menu0.png" />
		</div>
		<header role="banner">
			<?php if(is_single()): ?>
				<span id="blog-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span>
			<?php else: ?>
				<h1 id="blog-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<?php endif; ?>
		</header><!-- header -->
		<main role="main">
			<div class="wrapper">
