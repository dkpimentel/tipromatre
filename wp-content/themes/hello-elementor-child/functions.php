
<?php

/*Folha de estilo tema pai e JS*/
add_action('wp_enqueue_scripts', 'wpi_child_js_css');
function wpi_child_js_css() {

	//Css e JS slick
	wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', [], null);
	wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], null, true);

	//Css interno
	wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');

	//JS e Css interno tema
	wp_enqueue_script('wpi_script-js', get_stylesheet_directory_uri() . '/js/custom.js', ['jquery', 'slick-js'], false, true);
	wp_enqueue_style('wpi_style-css', get_stylesheet_directory_uri() . '/css/custom.css');
	/*
		get_template_directory_uri() é para temas pais e get_stylesheet_directory_uri() é para temas filhos
	*/

}

/*
 * Limitando o tamanho do título
 *
add_action('the_title', 'max_title_length');
function max_title_length($title) {
$max = 5;
if (strlen($title) > $max) {
return substr($title, 0, $max) . " &hellip;";
} else {
return $title;
}
}*/