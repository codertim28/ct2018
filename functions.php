<?php
/**
 * ct2018
 * Functions und co.
 */

// FUNKTIONEN
// Gibt den Paginator aus
function show_pagination() {
		the_posts_pagination(array(
			'type'               => 'list',
			'prev_text'          => '&laquo; Zur&uuml;ck',
			'next_text'          => 'Weiter &raquo;',
			'screen_reader_text' => ' '
		));
}

// Hilft dabei, die Verzeichnisse aller assets
// zu verwalten.
function assetsPath(string $assetType) {
  $assetsPath = get_template_directory_uri() . '/assets';

  switch ($assetType) {
    case 'javascript': $assetsPath .= '/js'; break;
    case 'image':      $assetsPath .= '/img'; break;
    default:           $assetsPath .= '/js';
  }
  // Den zusammengebastelten String ausgeben
  echo $assetsPath;
}

// THEME SUPPORT UND INITIALISIERUNG
// TODO: alles in eine init-Funktion schreiben ?
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ct2018'),
    'secondary' => __( 'Secondary Menu', 'ct2018' ),
 ) );

function widgets_init() {

    register_sidebar( array(
        'name' => __( '1. Fu&#xdf;bereich (Widgets)'),
        'id' => 'first-footer-widget-area',
        'description' => __( '1. Bereich f&uuml;r Widgets innerhalb des Footer'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ) );

	register_sidebar( array(
        'name' => __( '2. Fu&#xdf;bereich (Widgets)'),
        'id' => 'second-footer-widget-area',
        'description' => __( '2. Bereich f&uuml;r Widgets innerhalb des Footer'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ) );


	register_sidebar( array(
        'name' => __( '3. Fu&#xdf;bereich (Widgets)'),
        'id' => 'third-footer-widget-area',
        'description' => __( '4. Bereich f&uuml;r Widgets innerhalb des Footer. HINWEIS: Sollte nur f&uuml;r Icons benutzt werden!'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ) );
}

add_action( 'widgets_init', 'widgets_init' );

// Für den Header
$args = array(
	'width'         => 100,
	'height'        => 100,
	'default-image' => get_template_directory_uri() . '/img/header1.png',
);
add_theme_support( 'custom-header', $args );

// Damit Beitragsbilder möglich sind.
add_theme_support( 'post-thumbnails' );
