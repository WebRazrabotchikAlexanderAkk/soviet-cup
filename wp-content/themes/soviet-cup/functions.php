<?php
$ver = "1.03";

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.min.css',
        array(),
        $GLOBALS['ver']);

    // wp_deregister_script('jquery');
    // wp_register_script('jquery', get_template_directory_uri() . '/assets/js/libs.min.js');
    // //wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
    // wp_enqueue_script('jquery');

    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/app.min.js',
        array(),
        'null',
        true
    );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter('upload_mimes', 'svg_upload_allow');

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Меню в шапке',
        'actions_menu' => 'Меню действий',
        'footer_menu' => 'Меню в подвале'
    ]);
});

// Тема поддерживает Woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}

// Стрелочки в слайдере товара
// add_filter( 'woocommerce_single_product_carousel_options', 'truemisha_product_gallery_arrows' );
 
// function truemisha_product_gallery_arrows( $options ) {
 
// 	$options[ 'directionNav' ] = true;
// 	return $options;
 
// }

/**Добавляем поддержку галереи Woocommerce**/
add_action( 'after_setup_theme', 'yourtheme_setup' );
function yourtheme_setup() {
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}

// Хлебные крошки
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = '';
	return $defaults;
}

// Счетчик просмотров
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 просмотров";
    }
    return $count.' просмотров';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Похожие товары под карточкой товара
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
 function jk_related_products_args( $args ) {
 
$args['posts_per_page'] = 4; // количество "Похожих товаров"
 $args['columns'] = 4; // количество колонок
 return $args;
}

// Переименование вкладки «Дополнительная информация» в «Характеристики»
add_filter( 'woocommerce_product_tabs', 'devise_woo_rename_reviews_tab', 98);
function devise_woo_rename_reviews_tab($tabs) {
$tabs['additional_information']['title'] = 'Характеристики';
return $tabs;
}

// Скрыть количество товаровв подкатегории
add_filter( 'woocommerce_subcategory_count_html', 'jk_hide_category_count' );
function jk_hide_category_count() {
}
function new_excerpt_length($length) {
return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');


// Ссылки на пост
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Подробнее</a>';
}
// Количество слов в превью поста
add_filter( 'excerpt_length', function(){
	return 40;
} );
// Окончание слов в превью поста
add_filter( 'excerpt_more', function( $more ) {
	return '...';
} );


# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    // WP 5.1 +
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    } else {
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    }

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if ($dosvg) {

        // разрешим
        if (current_user_can('manage_options')) {

            $data['ext'] = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext'] = $type_and_ext['type'] = false;
        }
    }

    return $data;
}
