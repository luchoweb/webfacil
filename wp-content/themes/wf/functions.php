<?php

add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {;
	register_nav_menus( array(
		'mainMenu' => __( 'Main Menu', 'wf'),
		'footerMenu' => __( 'Footer Menu', 'wf')
	));
}

add_theme_support( 'post-thumbnails' );

function slider_shortcode( $atts ) {
	$a = shortcode_atts( array(
      'images' => ''
	 ), $atts );

	$images = explode(',', $a["images"]);

	$html = '<ul class="slider">';
	for ($i = 0; $i < count($images); $i++) {
		$html .= '<li><img src="'.$images[$i].'" /></li>';
	}
	$html .= '</ul>';

	return $html;
}
add_shortcode( 'slider', 'slider_shortcode' );