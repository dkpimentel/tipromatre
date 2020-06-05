
<?php

/*Folha de estilo tema pai e JS*/
function wpi_child_js_css() {

	//Css e JS slick
	wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', [], null);
	wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], null, true);

	//Css interno
	wp_enqueue_style('parent', get_stylesheet_directory_uri() . '/style.css');

	//JS e Css interno tema
	wp_enqueue_script('wpi_script-js', get_stylesheet_directory_uri() . '/js/wpi_posts.js', ['jquery', 'slick-js'], false, true);
	wp_enqueue_style('wpi_style-css', get_stylesheet_directory_uri() . '/wpi_posts.css', ['jquery'], false);
	/*
		get_template_directory_uri() é para temas pais e get_stylesheet_directory_uri() é para temas filhos
	*/

}
add_action('wp_enqueue_scripts', 'wpi_child_js_css');
