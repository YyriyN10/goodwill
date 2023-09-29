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
						 ->add_fields( array(

			         Field::make( 'text', 'goodwill_fb_link', 'Посилання на Facebook' )
			              ->set_attribute('type', 'url'),
			         Field::make( 'text', 'goodwill_email_address', __( 'E-mail адреса' ) )
				            ->set_attribute('type', 'email'),
			         Field::make( 'text', 'goodwill_phone_number', 'Номер телефону' ),

		         ) );


	}
