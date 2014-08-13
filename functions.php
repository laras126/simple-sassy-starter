<?php

// Change the stylesheet location
function sassy_styles() {
	wp_enqueue_style('sassy_styles', get_stylesheet_directory_uri() . '/assets/styles/main.css');
}
add_action('wp_enqueue_scripts', 'sassy_styles');

?>