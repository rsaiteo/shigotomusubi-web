<?php
/**
 * 京都しごとむすび テーマ機能
 */

if (!defined('ABSPATH')) {
    exit;
}

function shigotomusubi_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption')
    );
    register_nav_menus(
        array('primary' => 'メインメニュー')
    );
}
add_action('after_setup_theme', 'shigotomusubi_setup');

function shigotomusubi_enqueue_assets() {
    wp_enqueue_style(
        'shigotomusubi-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600&family=Noto+Sans+JP:wght@400;500;700&family=Roboto:wght@300;400;500&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'shigotomusubi-style',
        get_template_directory_uri() . '/css/output.css',
        array(),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style(
        'shigotomusubi-scss',
        get_template_directory_uri() . '/css/style.css',
        array('shigotomusubi-style'),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script(
        'shigotomusubi-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'shigotomusubi_enqueue_assets');

/**
 * ページごとのmeta descriptionを保持するグローバル変数。
 * 各テンプレートファイルの先頭で `$shigotomusubi_meta_description` に
 * セットしてから get_header() を呼び出してください。
 */
function shigotomusubi_meta_description() {
    global $shigotomusubi_meta_description;
    if (!empty($shigotomusubi_meta_description)) {
        return $shigotomusubi_meta_description;
    }
    return get_bloginfo('description');
}

function shigotomusubi_og_image() {
    if (has_post_thumbnail()) {
        return get_the_post_thumbnail_url(null, 'large');
    }
    return get_template_directory_uri() . '/images/hero-visual.jpg';
}
