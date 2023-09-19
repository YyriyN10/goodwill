<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'goodwill_carbon_theme_options' );

	function goodwill_carbon_theme_options() {
		Container::make( 'theme_options', __('Site Options'))
		         ->set_icon( 'dashicons-admin-generic' )
		         ->add_tab( __( 'Contacts' ), array(

			         Field::make( 'text', 'goodwill_petition_link', 'Посилання на петицію' )
			              ->set_attribute('type', 'url'),
			         Field::make( 'text', 'goodwill_hashtag', __( 'Текст хештегу' ) ),
			         Field::make( 'text', 'goodwill_site_download_link', 'Посилання для копіювання' ),

		         ) );


	}
