<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Register a services post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since goodwill 1.0
	 */

	function services_post_type() {

		$labels = array(
			'name'               => _x( 'Послуги', 'post type general name', 'goodwill' ),
			'singular_name'      => _x( 'Послуги', 'post type singular name', 'goodwill' ),
			'menu_name'          => _x( 'Послуги', 'admin menu', 'goodwill' ),
			'name_admin_bar'     => _x( 'Послугу', 'add new on admin bar', 'goodwill' ),
			'add_new'            => _x( 'Додати нову послугу', 'actions', 'goodwill' ),
			'add_new_item'       => __( 'Додати нову послугу', 'goodwill' ),
			'new_item'           => __( 'Нова послуга', 'goodwill' ),
			'edit_item'          => __( 'Редагувати послугу', 'goodwill' ),
			'view_item'          => __( 'Переглянути послугу', 'goodwill' ),
			'all_items'          => __( 'Всі послуги', 'goodwill' ),
			'search_items'       => __( 'Шукати послугу', 'goodwill' ),
			'parent_item_colon'  => __( 'Батько послуги:', 'goodwill' ),
			'not_found'          => __( 'Послугу не знайдено.', 'goodwill' ),
			'not_found_in_trash' => __( 'У кошику послугу не знайдено.', 'goodwill' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Описание.', 'goodwill' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'services' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => true,
			'menu_position'      => 4,
			'menu_icon'          => 'dashicons-excerpt-view',
			'supports'           => array( 'title', 'thumbnail',)
		);

		register_post_type( 'services', $args );
	}

	add_action( 'init', 'services_post_type' );

	/**
	 * Register a reviews post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since goodwill 1.0
	 */

	function reviews_post_type() {

		$labels = array(
			'name'               => _x( 'Відгуки', 'post type general name', 'goodwill' ),
			'singular_name'      => _x( 'Відгуки', 'post type singular name', 'goodwill' ),
			'menu_name'          => _x( 'Відгуки', 'admin menu', 'goodwill' ),
			'name_admin_bar'     => _x( 'Відгуки', 'add new on admin bar', 'goodwill' ),
			'add_new'            => _x( 'Додати новий відгук', 'actions', 'goodwill' ),
			'add_new_item'       => __( 'Додати новий відгук', 'goodwill' ),
			'new_item'           => __( 'Новий відгук', 'goodwill' ),
			'edit_item'          => __( 'Редагувати відгук', 'goodwill' ),
			'view_item'          => __( 'Переглянути відгук', 'goodwill' ),
			'all_items'          => __( 'Всі відгуки', 'goodwill' ),
			'search_items'       => __( 'Шукати відгук', 'goodwill' ),
			'parent_item_colon'  => __( 'Батько відгуку:', 'goodwill' ),
			'not_found'          => __( 'Відгук не знайдено.', 'goodwill' ),
			'not_found_in_trash' => __( 'У кошику відгук не знайдено.', 'goodwill' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Описание.', 'goodwill' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'reviews' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => true,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-admin-comments',
			'supports'           => array( 'title', 'thumbnail',)
		);

		register_post_type( 'reviews', $args );
	}

	add_action( 'init', 'reviews_post_type' );
