<?php
/* enqueue scripts and style from parent theme */        
function storefront_styles() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'storefront_styles');
