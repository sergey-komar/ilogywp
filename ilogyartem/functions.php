<?php
function ilogy_scripts() {
	wp_enqueue_style( 'ilogy-style', get_stylesheet_uri());
	wp_enqueue_style( 'ilogy-fonts', get_template_directory_uri() . '/assets/css/iconsfonts.css', [], 1.0);
	wp_enqueue_style( 'ilogy-main', get_template_directory_uri() . '/assets/css/style.min.css', [], 1.0);
    wp_enqueue_style( 'ilogy-mobile', get_template_directory_uri() . '/assets/css/style-mob-menu.css', ['ilogy-style'], 1.0);
   

   
    wp_enqueue_script('ilogy-mobile',get_template_directory_uri() . '/assets/js/script-mob-menu.js' ,[], 1.0, true );
    wp_enqueue_script( 'ilogy-main', get_template_directory_uri() . '/assets/js/main.min.js', [], 1.0, true );	
}
add_action( 'wp_enqueue_scripts', 'ilogy_scripts' );


add_action('after_setup_theme', 'ilogy_setup');
  function ilogy_setup(){

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-background' );    
  }

  register_nav_menus(
    array(
        'menu-header' => esc_html__( 'Шапка', 'ilogy' ),
        'menu-header-bottom' => esc_html__( 'Шапка низ', 'ilogy' ),
        'menu-footer' => esc_html__( 'Подвал', 'ilogy' ) ,
		'menu-footer-page' => esc_html__( 'Подвал-страницы', 'ilogy' ) 
    )
);

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
  






//    Цепляемся к событию для выода виджетов
add_action('widgets_init', 'ilogy_widgets_init');

// // Выводим виджеты
function ilogy_widgets_init(){

        register_sidebar([
            'name'          => esc_html__('Футер-адрес',''), 
            'id'            => "sidebar-blogg",
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget post-category-widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<h4 class="single-sidebar-widget__title">',
            'after_title'   => "</h4>\n",
            
        ]);
		register_sidebar([
            'name'          => esc_html__('Футер-телефон',''), 
            'id'            => "sidebar-phone",
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget post-category-widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<h4 class="single-sidebar-widget__title">',
            'after_title'   => "</h4>\n",
            
        ]);
		register_sidebar([
            'name'          => esc_html__('Футер-time',''), 
            'id'            => "sidebar-blog",
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget post-category-widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<h4 class="single-sidebar-widget__title">',
            'after_title'   => "</h4>\n",
            
        ]);
		register_sidebar([
            'name'          => esc_html__('Политика',''), 
            'id'            => "policy",
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget post-category-widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<h4 class="single-sidebar-widget__title">',
            'after_title'   => "</h4>\n",
            
        ]);
		// register_sidebar([
        //     'name'          => esc_html__('Политика-модалка-форма',''), 
        //     'id'            => "policy-modal",
        //     'before_widget' => '<div id="%1$s" class="single-sidebar-widget post-category-widget %2$s">',
        //     'after_widget'  => "</div>\n",
        //     'before_title'  => '<h4 class="single-sidebar-widget__title">',
        //     'after_title'   => "</h4>\n",
            
        // ]);

		register_sidebar([
            'name'          => esc_html__('Шапка-телефон',''), 
            'id'            => "header-phone",
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget post-category-widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<h4 class="single-sidebar-widget__title">',
            'after_title'   => "</h4>\n",
            
        ]);
		register_sidebar([
            'name'          => esc_html__('Шапка-время',''), 
            'id'            => "header-time",
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget header-time post-category-widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<h4 class="single-sidebar-widget__title">',
            'after_title'   => "</h4>\n",
            
        ]);
    }




// РЕГИСТИРИРУЕМ СВОИ ТИПЫ ЗАПИСЕЙ
add_action( 'init', 'wayup_register_custom_post_types' );
function wayup_register_custom_post_types (){
	register_post_type( 'service', [
		'label'  => null,
		'labels' => [
			'name'               => 'IT аутсоринг', // основное название для типа записи
			'singular_name'      => 'IT аутсоринг', // название для одной записи этого типа
			'add_new'            => 'Добавить IT аутсоринг', // для добавления новой записи
			'add_new_item'       => 'Добавление IT аутсоринг', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование IT аутсоринг', // для редактирования типа записи
			'view_item'          => 'Смотреть IT аутсоринг', // для просмотра записи этого типа.
			'search_items'       => 'Искать IT аутсоринг', // для поиска по этим типам записи
			'menu_name'          => 'IT аутсоринг', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'menu_icon'           => 'dashicons-admin-tools',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		// 'rewrite'             => array('slug' => 'service'),
		'query_var'           => true,
	] );

	register_post_type( 'computer', [
		'labels' => [
			'name'               => 'Компьютеры', // основное название для типа записи
			'singular_name'      => 'Компьютеры', // название для одной записи этого типа
			'add_new'            => 'Добавить Компьютеры', // для добавления новой записи
			'add_new_item'       => 'Добавление Компьютеры', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Компьютеры', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть Компьютеры', // для просмотра записи этого типа.
			'search_items'       => 'Искать Компьютеры', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Компьютеры', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','thumbnail','excerpt', ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'computer'),
		'query_var'           => true,
	] );

    register_post_type( 'servers', [
		'labels' => [
			'name'               => 'Сервера', // основное название для типа записи
			'singular_name'      => 'Сервера', // название для одной записи этого типа
			'add_new'            => 'Добавить Сервера', // для добавления новой записи
			'add_new_item'       => 'Добавление Сервера', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Сервера', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть Сервера', // для просмотра записи этого типа.
			'search_items'       => 'Искать Сервера', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Сервера', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'servers'),
		'query_var'           => true,
	] );

	register_post_type( 'seti', [
		'labels' => [
			'name'               => 'Сети', // основное название для типа записи
			'singular_name'      => 'Сети', // название для одной записи этого типа
			'add_new'            => 'Добавить Сети', // для добавления новой записи
			'menu_name'          => 'Сети', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'seti'),
		'query_var'           => true,
	] );


	register_post_type( 'ccc', [
		'labels' => [
			'name'               => '1 С', // основное название для типа записи
			'singular_name'      => '1 С', // название для одной записи этого типа
			'add_new'            => 'Добавить 1 С', // для добавления новой записи
			'menu_name'          => '1 С', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'cc'),
		'query_var'           => true,
	] );


	register_post_type( 'rezervnoe', [
		'labels' => [
			'name'               => 'Резерное копирование', // основное название для типа записи
			'singular_name'      => 'Резерное копирование', // название для одной записи этого типа
			'add_new'            => 'Добавить Резерное копирование', // для добавления новой записи
			'menu_name'          => 'Резерное копирование', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'rezerv'),
		'query_var'           => true,
	] );

	register_post_type( 'udalenka', [
		'labels' => [
			'name'               => 'Удалёнка', // основное название для типа записи
			'singular_name'      => 'Удалёнка', // название для одной записи этого типа
			'add_new'            => 'Добавить Удалёнка', // для добавления новой записи
			'menu_name'          => 'Удалёнка', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'udalenka'),
		'query_var'           => true,
	] );

	register_post_type( 'video', [
		'labels' => [
			'name'               => 'Видеонаблюдение', // основное название для типа записи
			'singular_name'      => 'Видеонаблюдение', // название для одной записи этого типа
			'add_new'            => 'Добавить Видеонаблюдение', // для добавления новой записи
			'menu_name'          => 'Видеонаблюдение', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'video'),
		'query_var'           => true,
	] );


	register_post_type( 'dannie', [
		'labels' => [
			'name'               => 'Восстановление данных', // основное название для типа записи
			'singular_name'      => 'Восстановление данных', // название для одной записи этого типа
			'add_new'            => 'Добавить Восстановление данных', // для добавления новой записи
			'menu_name'          => 'Восстановление данных', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'dannie'),
		'query_var'           => true,
	] );


	register_post_type( 'montash', [
		'labels' => [
			'name'               => 'Монтаж', // основное название для типа записи
			'singular_name'      => 'Монтаж', // название для одной записи этого типа
			'add_new'            => 'Добавить Монтаж', // для добавления новой записи
			'menu_name'          => 'Монтаж', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'montash'),
		'query_var'           => true,
	] );



	register_post_type( 'phone', [
		'labels' => [
			'name'               => 'IP Телефония', // основное название для типа записи
			'singular_name'      => 'IP Телефония', // название для одной записи этого типа
			'add_new'            => 'Добавить IP Телефония', // для добавления новой записи
			'menu_name'          => 'IP Телефония', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'phone'),
		'query_var'           => true,
	] );

	register_post_type( 'otherr', [
		'labels' => [
			'name'               => 'Другое', // основное название для типа записи
			'singular_name'      => 'Другое', // название для одной записи этого типа
			'add_new'            => 'Добавить Другое', // для добавления новой записи
			'menu_name'          => 'Другое', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'otherr'),
		'query_var'           => true,
	] );




























// ОТЗЫВЫ
	register_post_type( 'testimonials', [
		'labels' => [
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'Отзыв', // название для одной записи этого типа
			'add_new'            => 'Добавить Отзывы', // для добавления новой записи
			'menu_name'          => 'Отзывы', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-quote',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt','custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'testimonials'),
		'query_var'           => true,
	] );



// ОТЗЫВЫ СЛАЙДЕР
// ОТЗЫВЫ
register_post_type( 'testimonialsslider', [
	'labels' => [
		'name'               => 'Отзывы-слайдер', // основное название для типа записи
		'singular_name'      => 'Отзыв-слайдер', // название для одной записи этого типа
		'add_new'            => 'Добавить Отзывы-слайдер', // для добавления новой записи
		'menu_name'          => 'Отзывы-слайдер', // название меню
	],
	'description'         => '',
	'public'              => true,
	'show_in_menu'        => null, // показывать ли в меню адмнки
	'show_in_rest'        => null, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => null,
	'menu_icon'           => 'dashicons-format-quote',
	'hierarchical'        => false,
	'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt','custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'taxonomies'          => [],
	'has_archive'         => true,
	// 'rewrite'             => true,
	'rewrite'             => array('slug' => 'testimonialsslider'),
	'query_var'           => true,
] );



// СЛАЙДЕР ГЛАВНАЯ
register_post_type( 'homeslider', [
	'labels' => [
		'name'               => 'Главная-слайдер', // основное название для типа записи
		'singular_name'      => 'Главная-слайдер', // название для одной записи этого типа
		'add_new'            => 'Добавить Главная-слайдер', // для добавления новой записи
		'menu_name'          => 'Главная-слайдер', // название меню
	],
	'description'         => '',
	'public'              => true,
	'show_in_menu'        => null, // показывать ли в меню адмнки
	'show_in_rest'        => null, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => null,
	'menu_icon'           => 'dashicons-format-quote',
	'hierarchical'        => false,
	'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt','custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'taxonomies'          => [],
	'has_archive'         => true,
	// 'rewrite'             => true,
	'rewrite'             => array('slug' => 'homeslider'),
	'query_var'           => true,
] );



register_post_type( 'news', [
	'labels' => [
		'name'               => 'Новости', // основное название для типа записи
		'singular_name'      => 'Новости', // название для одной записи этого типа
		'add_new'            => 'Добавить Новости', // для добавления новой записи
		'menu_name'          => 'Новости', // название меню
	],
	'description'         => '',
	'public'              => true,
	'show_in_menu'        => null, // показывать ли в меню адмнки
	'show_in_rest'        => null, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => null,
	'menu_icon'           => 'dashicons-admin-tools',
	'hierarchical'        => false,
	'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt','custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'taxonomies'          => [],
	'has_archive'         => true,
	// 'rewrite'             => true,
	'rewrite'             => array('slug' => 'news'),
	'query_var'           => true,
] );




register_post_type( 'solutions', [
	'labels' => [
		'name'               => 'Готовые решения', // основное название для типа записи
		'singular_name'      => 'Готовые решения', // название для одной записи этого типа
		'add_new'            => 'Добавить Готовые решения', // для добавления новой записи
		'menu_name'          => 'Готовые решения', // название меню
	],
	'description'         => '',
	'public'              => true,
	'show_in_menu'        => null, // показывать ли в меню адмнки
	'show_in_rest'        => null, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => null,
	'menu_icon'           => 'dashicons-admin-tools',
	'hierarchical'        => false,
	'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt','custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'taxonomies'          => [],
	'has_archive'         => true,
	// 'rewrite'             => true,
	'rewrite'             => array('slug' => 'solutions'),
	'query_var'           => true,
] );


register_post_type( 'popular', [
	'labels' => [
		'name'               => 'Популярные услуги', // основное название для типа записи
		'singular_name'      => 'Популярные услуги', // название для одной записи этого типа
		'add_new'            => 'Добавить Популярные услуги', // для добавления новой записи
		'menu_name'          => 'Популярные услуги', // название меню
	],
	'description'         => '',
	'public'              => true,
	'show_in_menu'        => null, // показывать ли в меню адмнки
	'show_in_rest'        => null, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => null,
	'menu_icon'           => 'dashicons-admin-tools',
	'hierarchical'        => false,
	'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt','custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'taxonomies'          => [],
	'has_archive'         => true,
	// 'rewrite'             => true,
	'rewrite'             => array('slug' => 'popular'),
	'query_var'           => true,
] );


register_post_type( 'materials', [
	'labels' => [
		'name'               => 'Полезные материалы', // основное название для типа записи
		'singular_name'      => 'Полезные материалы', // название для одной записи этого типа
		'add_new'            => 'Добавить Полезные материалы', // для добавления новой записи
		'menu_name'          => 'Полезные материалы', // название меню
	],
	'description'         => '',
	'public'              => true,
	'show_in_menu'        => null, // показывать ли в меню адмнки
	'show_in_rest'        => null, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => null,
	'menu_icon'           => 'dashicons-admin-tools',
	'hierarchical'        => false,
	'supports'            => [ 'title', 'editor','thumbnail','editor','excerpt','custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'taxonomies'          => [],
	'has_archive'         => true,
	// 'rewrite'             => true,
	'rewrite'             => array('slug' => 'materials'),
	'query_var'           => true,
] );

}




/**
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * @param string $sep  Разделитель. По умолчанию ' » '.
 * @param array  $l10n Для локализации. См. переменную `$default_l10n`.
 * @param array  $args Опции. Смотрите переменную `$def_args`.
 *
 * @return void Выводит на экран HTML код
 *
 * version 3.3.3
 */
function kama_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ){
	$kb = new Kama_Breadcrumbs;
	echo $kb->get_crumbs( $sep, $l10n, $args );
}

class Kama_Breadcrumbs {

	public $arg;

	// Локализация
	static $l10n = [
		'home'       => 'Главная',
		'paged'      => 'Страница %d',
		'_404'       => 'Ошибка 404',
		'search'     => 'Результаты поиска по запросу - <b>%s</b>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Медиа: %s',
		'tag'        => 'Записи по метке: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
		// tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
		// Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
	];

	// Параметры по умолчанию
	static $args = [
		// выводить крошки на главной странице
		'on_front_page'   => true,
		// показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
		'show_post_title' => true,
		// показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
		'show_term_title' => true,
		// шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
		'title_patt'      => '<span class="kb_title">%s</span>',
		// показывать последний разделитель, когда заголовок в конце не отображается
		'last_sep'        => true,
		// 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
		// или можно указать свой массив разметки:
		// array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
		'markup'          => 'schema.org',
		// приоритетные таксономии, нужно когда запись в нескольких таксах
		'priority_tax'    => [ 'category' ],
		// 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
		// Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
		// 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
		// порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
		'priority_terms'  => [],
		// добавлять rel=nofollow к ссылкам?
		'nofollow'        => false,

		// служебные
		'sep'             => '',
		'linkpatt'        => '',
		'pg_end'          => '',
	];

	function get_crumbs( $sep, $l10n, $args ){
		global $post, $wp_post_types;

		self::$args['sep'] = $sep;

		// Фильтрует дефолты и сливает
		$loc = (object) array_merge( apply_filters( 'kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
		$arg = (object) array_merge( apply_filters( 'kama_breadcrumbs_default_args', self::$args ), $args );

		$arg->sep = '<span class="kb_sep">' . $arg->sep . '</span>'; // дополним

		// упростим
		$sep = & $arg->sep;
		$this->arg = & $arg;

		// микроразметка ---
		if(1){
			$mark = & $arg->markup;

			// Разметка по умолчанию
			if( ! $mark ){
				$mark = [
					'wrappatt'  => '<div class="kama_breadcrumbs">%s</div>',
					'linkpatt'  => '<a href="%s">%s</a>',
					'sep_after' => '',
				];
			}
			// rdf
			elseif( $mark === 'rdf.data-vocabulary.org' ){
				$mark = [
					'wrappatt'  => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
					'linkpatt'  => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
					'sep_after' => '</span>', // закрываем span после разделителя!
				];
			}
			// schema.org
			elseif( $mark === 'schema.org' ){
				$mark = [
					'wrappatt'  => '<div class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</div>',
					'linkpatt'  => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></span>',
					'sep_after' => '',
				];
			}

			elseif( ! is_array( $mark ) ){
				die( __CLASS__ . ': "markup" parameter must be array...' );
			}

			$wrappatt = $mark['wrappatt'];
			$arg->linkpatt = $arg->nofollow ? str_replace( '<a ', '<a rel="nofollow"', $mark['linkpatt'] ) : $mark['linkpatt'];
			$arg->sep .= $mark['sep_after'] . "\n";
		}

		$linkpatt = $arg->linkpatt; // упростим

		$q_obj = get_queried_object();

		// может это архив пустой таксы
		$ptype = null;
		if( ! $post ){
			if( isset( $q_obj->taxonomy ) ){
				$ptype = $wp_post_types[ get_taxonomy( $q_obj->taxonomy )->object_type[0] ];
			}
		}
		else{
			$ptype = $wp_post_types[ $post->post_type ];
		}

		// paged
		$arg->pg_end = '';
		$paged_num = get_query_var( 'paged' ) ?: get_query_var( 'page' );
		if( $paged_num ){
			$arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );
		}

		$pg_end = $arg->pg_end; // упростим

		$out = '';

		if( is_front_page() ){
			return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf( $linkpatt, get_home_url(), $loc->home ) . $pg_end : $loc->home ) ) : '';
		}
		// страница записей, когда для главной установлена отдельная страница.
		elseif( is_home() ){
			$out = $paged_num ? ( sprintf( $linkpatt, get_permalink( $q_obj ), esc_html( $q_obj->post_title ) ) . $pg_end ) : esc_html( $q_obj->post_title );
		}
		elseif( is_404() ){
			$out = $loc->_404;
		}
		elseif( is_search() ){
			$out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
		}
		elseif( is_author() ){
			$tit = sprintf( $loc->author, esc_html( $q_obj->display_name ) );
			$out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
		}
		elseif( is_year() || is_month() || is_day() ){
			$y_url = get_year_link( $year = get_the_time( 'Y' ) );

			if( is_year() ){
				$tit = sprintf( $loc->year, $year );
				$out = ( $paged_num ? sprintf( $linkpatt, $y_url, $tit ) . $pg_end : $tit );
			}
			// month day
			else{
				$y_link = sprintf( $linkpatt, $y_url, $year );
				$m_url = get_month_link( $year, get_the_time( 'm' ) );

				if( is_month() ){
					$tit = sprintf( $loc->month, get_the_time( 'F' ) );
					$out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
				}
				elseif( is_day() ){
					$m_link = sprintf( $linkpatt, $m_url, get_the_time( 'F' ) );
					$out = $y_link . $sep . $m_link . $sep . get_the_time( 'l' );
				}
			}
		}
		// Древовидные записи
		elseif( is_singular() && $ptype->hierarchical ){
			$out = $this->_add_title( $this->_page_crumbs( $post ), $post );
		}
		// Таксы, плоские записи и вложения
		else {
			$term = $q_obj; // таксономии

			// определяем термин для записей (включая вложения attachments)
			if( is_singular() ){
				// изменим $post, чтобы определить термин родителя вложения
				if( is_attachment() && $post->post_parent ){
					$save_post = $post; // сохраним
					$post = get_post( $post->post_parent );
				}

				// учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
				$taxonomies = get_object_taxonomies( $post->post_type );
				// оставим только древовидные и публичные, мало ли...
				$taxonomies = array_intersect( $taxonomies, get_taxonomies( [
					'hierarchical' => true,
					'public'       => true,
				] ) );

				if( $taxonomies ){
					// сортируем по приоритету
					if( ! empty( $arg->priority_tax ) ){

						usort( $taxonomies, static function( $a, $b ) use ( $arg ) {
							$a_index = array_search( $a, $arg->priority_tax );
							if( $a_index === false ){
								$a_index = 9999999;
							}

							$b_index = array_search( $b, $arg->priority_tax );
							if( $b_index === false ){
								$b_index = 9999999;
							}

							return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : -1 ); // меньше индекс - выше
						} );
					}

					// пробуем получить термины, в порядке приоритета такс
					foreach( $taxonomies as $taxname ){

						if( $terms = get_the_terms( $post->ID, $taxname ) ){
							// проверим приоритетные термины для таксы
							$prior_terms = &$arg->priority_terms[ $taxname ];

							if( $prior_terms && count( $terms ) > 2 ){

								foreach( (array) $prior_terms as $term_id ){
									$filter_field = is_numeric( $term_id ) ? 'term_id' : 'slug';
									$_terms = wp_list_filter( $terms, [ $filter_field => $term_id ] );

									if( $_terms ){
										$term = array_shift( $_terms );
										break;
									}
								}
							}
							else{
								$term = array_shift( $terms );
							}

							break;
						}
					}
				}

				// вернем обратно (для вложений)
				if( isset( $save_post ) ){
					$post = $save_post;
				}
			}

			// вывод

			// все виды записей с терминами или термины
			if( $term && isset( $term->term_id ) ){
				$term = apply_filters( 'kama_breadcrumbs_term', $term );

				// attachment
				if( is_attachment() ){
					if( ! $post->post_parent ){
						$out = sprintf( $loc->attachment, esc_html( $post->post_title ) );
					}
					else{
						if( ! $out = apply_filters( 'attachment_tax_crumbs', '', $term, $this ) ){
							$_crumbs = $this->_tax_crumbs( $term, 'self' );
							$parent_tit = sprintf( $linkpatt, get_permalink( $post->post_parent ), get_the_title( $post->post_parent ) );
							$_out = implode( $sep, [ $_crumbs, $parent_tit ] );
							$out = $this->_add_title( $_out, $post );
						}
					}
				}
				// single
				elseif( is_single() ){
					if( ! $out = apply_filters( 'post_tax_crumbs', '', $term, $this ) ){
						$_crumbs = $this->_tax_crumbs( $term, 'self' );
						$out = $this->_add_title( $_crumbs, $post );
					}
				}
				// не древовидная такса (метки)
				elseif( ! is_taxonomy_hierarchical( $term->taxonomy ) ){
					// метка
					if( is_tag() ){
						$out = $this->_add_title( '', $term, sprintf( $loc->tag, esc_html( $term->name ) ) );
					}
					// такса
					elseif( is_tax() ){
						$post_label = $ptype->labels->name;
						$tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
						$out = $this->_add_title( '', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html( $term->name ) ) );
					}
				}
				// древовидная такса (рибрики)
				elseif( ! $out = apply_filters( 'term_tax_crumbs', '', $term, $this ) ){
					$_crumbs = $this->_tax_crumbs( $term, 'parent' );
					$out = $this->_add_title( $_crumbs, $term, esc_html( $term->name ) );
				}
			}
			// влоежния от записи без терминов
			elseif( is_attachment() ){
				$parent = get_post( $post->post_parent );
				$parent_link = sprintf( $linkpatt, get_permalink( $parent ), esc_html( $parent->post_title ) );
				$_out = $parent_link;

				// вложение от записи древовидного типа записи
				if( is_post_type_hierarchical( $parent->post_type ) ){
					$parent_crumbs = $this->_page_crumbs( $parent );
					$_out = implode( $sep, [ $parent_crumbs, $parent_link ] );
				}

				$out = $this->_add_title( $_out, $post );
			}
			// записи без терминов
			elseif( is_singular() ){
				$out = $this->_add_title( '', $post );
			}
		}

		// замена ссылки на архивную страницу для типа записи
		$home_after = apply_filters( 'kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

		if( '' === $home_after ){
			// Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
			if( $ptype && $ptype->has_archive && ! in_array( $ptype->name, [ 'post', 'page', 'attachment' ] )
				&& ( is_post_type_archive() || is_singular() || ( is_tax() && in_array( $term->taxonomy, $ptype->taxonomies ) ) )
			){
				$pt_title = $ptype->labels->name;

				// первая страница архива типа записи
				if( is_post_type_archive() && ! $paged_num ){
					$home_after = sprintf( $this->arg->title_patt, $pt_title );
				}
				// singular, paged post_type_archive, tax
				else{
					$home_after = sprintf( $linkpatt, get_post_type_archive_link( $ptype->name ), $pt_title );

					$home_after .= ( ( $paged_num && ! is_tax() ) ? $pg_end : $sep ); // пагинация
				}
			}
		}

		$before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep . $home_after : ( $out ? $sep : '' ) );

		$out = apply_filters( 'kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

		$out = sprintf( $wrappatt, $before_out . $out );

		return apply_filters( 'kama_breadcrumbs', $out, $sep, $loc, $arg );
	}

	function _page_crumbs( $post ) {
		$parent = $post->post_parent;

		$crumbs = [];
		while( $parent ){
			$page = get_post( $parent );
			$crumbs[] = sprintf( $this->arg->linkpatt, get_permalink( $page ), esc_html( $page->post_title ) );
			$parent = $page->post_parent;
		}

		return implode( $this->arg->sep, array_reverse( $crumbs ) );
	}

	function _tax_crumbs( $term, $start_from = 'self' ) {
		$termlinks = [];
		$term_id = ( $start_from === 'parent' ) ? $term->parent : $term->term_id;
		while( $term_id ){
			$term = get_term( $term_id, $term->taxonomy );
			$termlinks[] = sprintf( $this->arg->linkpatt, get_term_link( $term ), esc_html( $term->name ) );
			$term_id = $term->parent;
		}

		if( $termlinks ){
			return implode( $this->arg->sep, array_reverse( $termlinks ) );
		}

		return '';
	}

	// добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
	function _add_title( $add_to, $obj, $term_title = '' ) {

		// упростим...
		$arg = &$this->arg;
		// $term_title чиститься отдельно, теги моугт быть...
		$title = $term_title ?: esc_html( $obj->post_title );
		$show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

		// пагинация
		if( $arg->pg_end ){
			$link = $term_title ? get_term_link( $obj ) : get_permalink( $obj );
			$add_to .= ( $add_to ? $arg->sep : '' ) . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
		}
		// дополняем - ставим sep
		elseif( $add_to ){
			if( $show_title ){
				$add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
			}
			elseif( $arg->last_sep ){
				$add_to .= $arg->sep;
			}
		}
		// sep будет потом...
		elseif( $show_title ){
			$add_to = sprintf( $arg->title_patt, $title );
		}

		return $add_to;
	}

}

/**
 * Изменения:
 * 3.3 - новые хуки: attachment_tax_crumbs, post_tax_crumbs, term_tax_crumbs. Позволяют дополнить крошки таксономий.
 * 3.2 - баг с разделителем, с отключенным 'show_term_title'. Стабилизировал логику.
 * 3.1 - баг с esc_html() для заголовка терминов - с тегами получалось криво...
 * 3.0 - Обернул в класс. Добавил опции: 'title_patt', 'last_sep'. Доработал код. Добавил пагинацию для постов.
 * 2.5 - ADD: Опция 'show_term_title'
 * 2.4 - Мелкие правки кода
 * 2.3 - ADD: Страница записей, когда для главной установлена отделенная страница.
 * 2.2 - ADD: Link to post type archive on taxonomies page
 * 2.1 - ADD: $sep, $loc, $args params to hooks
 * 2.0 - ADD: в фильтр 'kama_breadcrumbs_home_after' добавлен четвертый аргумент $ptype
 * 1.9 - ADD: фильтр 'kama_breadcrumbs_default_loc' для изменения локализации по умолчанию
 * 1.8 - FIX: заметки, когда в рубрике нет записей
 * 1.7 - Улучшена работа с приоритетными таксономиями.
 */

// define( 'DISALLOW_FILE_EDIT', true );

