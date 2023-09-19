<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	add_action('init', 'goodwill_polylang_strings' );

	function goodwill_polylang_strings() {

		if ( ! function_exists( 'pll_register_string' ) ) {
			return;
		}

		pll_register_string(
			'goodwill_btn_go',
			'Давай діяти',
			'Переклади',
			false
		);
	}
