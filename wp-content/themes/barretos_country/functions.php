<?php


// Chamar a tag Title e adicionar os formatos de posts
function bs4wp_theme_support() {
    // Chamar a tag Title
    add_theme_support('title-tag');
    // Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image'));
    // Adicionar o logotipo 
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'bs4wp_theme_support');
// Previnir o erro na tag Title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
    function bs4wp_render_title() {
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head', 'bs4wp_render_title');
}/*
// Registra o Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// Registrar os menus
register_nav_menus( array(
    'principal' => __('Menu principal', 'bs4wp')
));*/
// Definir as miniaturas dos posts
add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 1280, 720, true );
set_post_thumbnail_size( 1920, 620, false );

// Criar o tipo de post para o banner
function create_post_type() {
    register_post_type('banners_desktop',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Banners Desktop'),
            'singular_name' => __('Banners Desktop')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners_desktop'),
    ));
}
//===================================================
// Criar o tipo de post para o banner
function create_post_type2() {
    register_post_type('banners_mobile',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Banners Mobile'),
            'singular_name' => __('Banners Mobile')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners_mobile'),
    ));
}
//===================================================
// Criar o tipo de post para o banner
function create_post_type1() {
    register_post_type('campanhas',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Campanhas'),
            'singular_name' => __('Campanhas')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'campanhas'),
    ));
}
//===================================================


//Iniciar o tipo de post
add_action('init', 'create_post_type');
//Iniciar o tipo de post
add_action('init', 'create_post_type2');
//Iniciar o tipo de post
add_action('init', 'create_post_type1');











    ?>