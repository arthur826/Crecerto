<?php

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Função para Gerenciamento de Menus
add_theme_support( 'menus' ); //Habilitar a funcão menu no wordpress

function registrar_menu_principal() {
    register_nav_menu('header-principal',__('Header Principal')); //Criar funcão para registar o menu
}
function registrar_menu_footer_institucional() {
    register_nav_menu('menu-footer-institucional',__('Rodapé Institucional')); //Criar funcão para registar o menu
}
function registrar_menu_footer_linhas_de_credito() {
    register_nav_menu('menu-footer-linhas-de-credito',__('Rodapé Linha de Crédito')); //Criar funcão para registar o menu
}
function registrar_menu_footer_fale_conosco() {
    register_nav_menu('menu-footer-fale-conosco',__('Rodapé Fale Conosco')); //Criar funcão para registar o menu
}
function registrar_menu_footer_privacidade() {
    register_nav_menu('registrar-menu-privacidade',__('Rodapé Privacidade')); //Criar funcão para registar o menu
}


add_action('init', 'registrar_menu_principal');//Inicializar função do menu
add_action('init', 'registrar_menu_footer_institucional');//Inicializar função do menu
add_action('init', 'registrar_menu_footer_linhas_de_credito');//Inicializar função do menu
add_action('init', 'registrar_menu_footer_fale_conosco');//Inicializar função do menu
add_action('init', 'registrar_menu_footer_privacidade');//Inicializar função do menu



/**
 * Filter the excerpt length to 30 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function resumo_reduzido( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'resumo_reduzido');


//thumbs stuffs
add_theme_support( 'post-thumbnails');
add_image_size( 'thumbnail', 90, 90, true );
add_image_size( 'post-default_Old', 400, 300, true );
add_image_size( 'post-default', 360, 205, true );


// add arrows to menu parent 
function oenology_add_menu_parent_class( $items ) {
 
 $parents = array();
 foreach ( $items as $item ) {
 if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
 $parents[] = $item->menu_item_parent;
 }
 }
 
 foreach ( $items as $item ) {
 if ( in_array( $item->ID, $parents ) ) {
 $item->classes[] = 'has-children';
 }
 }
 
 return $items;
}
add_filter( 'wp_nav_menu_objects', 'oenology_add_menu_parent_class' );



// Funcao para habilitar uma funcionalidade no painel wordpress com acf_add_options_page

acf_add_options_page(array(
	'page_title' 	=> 'Editar Rodapé',
	'menu_title'	=> 'Editar Rodapé',
	'menu_slug' 	=> 'editar-rodape',
	'capability'	=> 'edit_posts',
	'icon_url' => 'dashicons-align-center',
	'redirect'		=> false
));

// Funcao para habilitar uma no painel de linguagens

acf_add_options_page(array(
	'page_title' 	=> 'Idioma',
	'menu_title'	=> 'Idioma',
	'menu_slug' 	=> 'idioma',
	'capability'	=> 'edit_posts',
	'icon_url' => 'dashicons-align-center',
	'redirect'		=> false
));



acf_add_options_page(array(
	'page_title' 	=> 'Onde Estamos',
	'menu_title'	=> 'Onde Estamos',
	'menu_slug' 	=> 'onde-estamos',
	'capability'	=> 'edit_posts',
	'icon_url' => 'dashicons-align-center',
	'redirect'		=> false
));



function registrar_barra_lateral() {
    register_sidebar(array(
        'name' => 'Barra Lateral',
        'id' => 'sidebar-1',
        'description' => 'Esta é a barra lateral padrão',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'registrar_barra_lateral');

function registrar_barra_lateral_2() {
    register_sidebar(array(
        'name' => 'Barra Lateral 2',
        'id' => 'sidebar-2',
        'description' => 'Esta é a barra lateral padrão',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'registrar_barra_lateral_2');

function my_theme_scripts() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');




