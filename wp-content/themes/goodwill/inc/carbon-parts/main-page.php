<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'goodwill_main_page');

	function goodwill_main_page(){
		Container::make( 'post_meta', _('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'textarea', 'goodwill_main_screen_call'.carbon_lang_prefix(), _('Заклик') )
				         ->set_rows( 4 ),
			         Field::make( 'textarea', 'goodwill_main_screen_slogan'.carbon_lang_prefix(), _('Слоган') )
			              ->set_rows( 4 ),
		         ));

		Container::make( 'post_meta', _('Блок "Чому ми?"') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'goodwill_why_us_title'.carbon_lang_prefix(), _('Заголовок блоку') ),

			         Field::make( 'complex', 'goodwill_why_us_advantages_list'.carbon_lang_prefix(), _('Перелік переваг') )
				         ->add_fields( array(
					         Field::make( 'text', 'advantage_name', _('Назва переваги') ),
					         Field::make( 'textarea', 'advantage_description', _('Короткий опис переваги') )
						         ->set_rows( 4 ),
					         Field::make( 'image', 'advantage_image', _('Зображення переваги') )
					              ->set_value_type( 'url' ),

				         ) )
		         ));

		Container::make( 'post_meta', _('Блок з закликом') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'textarea', 'goodwill_call_block_title'.carbon_lang_prefix(), _('Заголовок') )
			              ->set_rows( 4 ),
			         Field::make( 'textarea', 'goodwill_call_block_text'.carbon_lang_prefix(), _('Текст') )
			              ->set_rows( 4 ),
		         ));

		Container::make( 'post_meta', _('Блок "Про нас"') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'goodwill_about_us_title'.carbon_lang_prefix(), _('Заголовок блоку') ),

			         Field::make( 'rich_text', 'goodwill_about_us_text'.carbon_lang_prefix(), _('Основний текст блоку') ),

			         Field::make( 'complex', 'goodwill_about_us_images_list'.carbon_lang_prefix(), _('Перелік зображень') )
			              ->add_fields( array(
				              Field::make( 'image', 'about_image', _('Зображення') )
				                   ->set_value_type( 'url' ),

			              ) ),
			         Field::make( 'text', 'goodwill_about_us_slogan'.carbon_lang_prefix(), _('Текст слогану') ),

		         ));

		Container::make( 'post_meta', _('Блок "Спектр послуг"') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'goodwill_range_of_services_title'.carbon_lang_prefix(), _('Заголовок блоку') ),


			         Field::make( 'complex', 'goodwill_range_of_services_list'.carbon_lang_prefix(), _('Перелік послуг') )
			              ->add_fields( array(
				              Field::make( 'text', 'service_name', _('Назва') ),

			              ) ),

		         ));

		Container::make( 'post_meta', _('Блок "Відгуки"') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'goodwill_reviews_title'.carbon_lang_prefix(), _('Заголовок блоку') ),
			         Field::make( 'text', 'goodwill_reviews_subtitle'.carbon_lang_prefix(), _('Підзаголовок блоку') ),
		         ));

		Container::make( 'post_meta', _('Блок "Форма зворотнього звʼязку"') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'goodwill_contact_form_title'.carbon_lang_prefix(), _('Заголовок блоку') ),
			         Field::make( 'text', 'goodwill_contact_form_subtitle'.carbon_lang_prefix(), _('Підзаголовок блоку') ),
		         ));


	}
