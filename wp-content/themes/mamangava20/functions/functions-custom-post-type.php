<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Register the theme custom post type
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function theme_custom_post_type() {

    //NOTICIAS
    $labels = array(
        'name' => 'Trabalhos',
        'singular_name' => 'Trabalhos',
        'menu_name' => 'Trabalhos',
        'name_admin_bar' => 'Trabalhos',
        'add_new' => 'Novo trabalho',
        'add_new_item' => 'Novo trabalho',
        'new_item' => 'Novo trabalho',
        'edit_item' => 'Editar',
        'view_item' => 'Ver',
        'all_items' => 'Todos',
        'search_items' => 'Buscar',
        'parent_item_colon' => 'Trabalhos',
        'not_found' => 'Trabalho não localizado.',
        'not_found_in_trash' => 'Trabalho não localizado no lixo.'
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-media-document',
        'query_var' => true,
        'rewrite' => array('slug' => 'trabalho'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'trackbacks', 'revisions', 'page-attributes', 'post-formats', 'custom-fields')
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );

    register_post_type('trabalho', $args);
    //NOTICIAS - END   
}

//
add_action('init', 'theme_custom_post_type');

/* Custom Taxonomies */

function theme_custom_category() {

    //cargo
    $labels = array(
        'name' => 'Tecnologia',
        'singular_name' => 'Tecnologia',
        'search_items' => 'Buscar',
        'all_items' => 'Todos',
        'parent_item' => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item' => 'Editar',
        'update_item' => 'Editar',
        'add_new_item' => 'Adicionar nova tecnologia',
        'new_item_name' => 'Nova tecnologia',
        'menu_name' => __('Cargo'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'tecnologia'),
    );

    register_taxonomy('tecnologia', array('trabalho'), $args);
    //end - cargo
    
    //Parceiro
    $labels = array(
        'name' => 'Parceiro',
        'singular_name' => 'Parceiro',
        'search_items' => 'Buscar',
        'all_items' => 'Todos',
        'parent_item' => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item' => 'Editar',
        'update_item' => 'Editar',
        'add_new_item' => 'Adicionar novo Parceiro',
        'new_item_name' => 'Novo Parceiro',
        'menu_name' => __('Parceiro'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'parceiro'),
    );

    register_taxonomy('parceiro', array('trabalho'), $args);
    //end - Parceiro
    
}

add_action('init', 'theme_custom_category');