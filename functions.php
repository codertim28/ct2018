<?php
/**
 * codertim functions and definitions
 *
 */
 
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'codertim'),
    'secondary' => __( 'Secondary Menu', 'codertim' ),
 ) );
 
//add_action ('init', 'register_my_menus');

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

function show_my_page_nav() { 
	echo '<div id="page_nav">';
			the_posts_pagination( array(
				'type'               => 'list',
				'prev_text'          => '&laquo; Zur&uuml;ck',
				'next_text'          => 'Weiter &raquo;',
				'screen_reader_text' => ' '
			) );
	echo '</div>';
}

// Für den Header
$args = array(
	'width'         => 100,
	'height'        => 100,
	'default-image' => get_template_directory_uri() . '/img/header1.png',
);
add_theme_support( 'custom-header', $args );

// Damit Beitragsbilder möglich sind.
add_theme_support( 'post-thumbnails' );
