<?php
function wordpressify_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'wordpressify_resources' );

add_theme_support( 'post-thumbnails');


//show_admin_bar( false );

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Новости', 'Новости сайта', 'p1atform' ),
		'singular_name'       => _x( 'Новость', 'Post Type Singular Name', 'p1atform' ),
		'menu_name'           => __( 'Новости', 'p1atform' ),
		'parent_item_colon'   => __( 'Parent Новость', 'p1atform' ),
		'all_items'           => __( 'Все новости', 'p1atform' ),
		'view_item'           => __( 'Просмотреть новость', 'p1atform' ),
		'add_new_item'        => __( 'Добавить новость', 'p1atform' ),
		'add_new'             => __( 'Добавить новость', 'p1atform' ),
		'edit_item'           => __( 'Редактировать новость', 'p1atform' ),
		'update_item'         => __( 'Обновить новость', 'p1atform' ),
		'search_items'        => __( 'Поиск новости', 'p1atform' ),
	);

	$args = array(
		'label'               => __( 'Отзывы', 'p1atform' ),
		'description'         => __( 'Отзывы', 'p1atform' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type( 'news', $args );

	$labels = array(
		'name'                => _x( 'Клиенты', 'Новости сайта', 'p1atform' ),
		'singular_name'       => _x( 'Клиент', 'Post Type Singular Name', 'p1atform' ),
		'menu_name'           => __( 'Клиенты', 'p1atform' ),
		'parent_item_colon'   => __( 'Парент Клиент', 'p1atform' ),
		'all_items'           => __( 'Все клиенты', 'p1atform' ),
		'view_item'           => __( 'Просмотреть клиента', 'p1atform' ),
		'add_new_item'        => __( 'Добавить клиента', 'p1atform' ),
		'add_new'             => __( 'Добавить клиента', 'p1atform' ),
		'edit_item'           => __( 'Редактировать клиента', 'p1atform' ),
		'update_item'         => __( 'Обновить клиента', 'p1atform' ),
		'search_items'        => __( 'Поиск клиента', 'p1atform' ),
	);

	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type( 'clients', $args );

	register_post_type('reviews', array(
		'labels'             => array(
			'name'               => 'Отзывы', // Основное название типа записи
			'singular_name'      => 'Отзыв', // отдельное название записи типа Book
			'add_new'            => 'Добавить Отзыв',
			'add_new_item'       => 'Добавить Отзыв',
			'edit_item'          => 'Редактировать Отзыв',
			'new_item'           => 'Новая Отзыв',
			'view_item'          => 'Посмотреть Отзыв',
			'search_items'       => 'Найти Отзыв',
			'not_found'          =>  'Книг не найдено',
			'not_found_in_trash' => 'В корзине книг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_position'       => 5,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );

}

add_action( 'init', 'custom_post_type', 0 );