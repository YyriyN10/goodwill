<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	function goodwill_scripts() {
		wp_enqueue_style( 'goodwill-style', get_stylesheet_uri(), array(), _S_VERSION );
		wp_enqueue_style( 'goodwill-style-main', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION );

		wp_enqueue_script( 'goodwill-main-js', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), _S_VERSION, true );

	}
	add_action( 'wp_enqueue_scripts', 'goodwill_scripts' );
