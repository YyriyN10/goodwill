<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	/**
	 * Options Page
	 */

	require get_template_directory() . '/inc/carbon-parts/options.php';

	/**
	 * Main Page
	 */

	require get_template_directory() . '/inc/carbon-parts/main-page.php';