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
			'goodwill_footer_social_title',
			'Ми у соцмережах',
			'Переклади',
			false
		);

		pll_register_string(
			'goodwill_footer_contact_title',
			'Наші контакти',
			'Переклади',
			false
		);

		pll_register_string(
			'goodwill_btn_service_price',
			'Розрахувати вартість послуги',
			'Переклади',
			false
		);

		pll_register_string(
			'goodwill_btn_leave_request',
			'Залишити заявку',
			'Переклади',
			false
		);

		pll_register_string(
			'goodwill_btn_contact_me',
			'Зв’яжіться зі мною',
			'Переклади',
			false
		);

		pll_register_string(
			'goodwill_btn_service_price',
			'Розрахувати вартість послуги',
			'Переклади',
			false
		);

		pll_register_string(
			'goodwill_block_title_our_services',
			'Наші послуги',
			'Переклади',
			false
		);
	}
