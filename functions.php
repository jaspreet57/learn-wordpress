<?php
function learntheme_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learntheme_resources');


//Navigation Menus
register_nav_menus(array(
	'primary' => __('Primay Menu'),
	'footer' => __('Footer Menu')
));


?>