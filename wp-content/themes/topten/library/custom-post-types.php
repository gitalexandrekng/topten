<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */


function comics_post_types() {
// --> COMICS
         $labels_oeuvres_post_type_array = array(
             'name'                  =>  __('Comics', 'munterlinden'),
             'singular_name'         =>  __('Comics', 'munterlinden'),
             'add_new'               =>  __('Ajouter un comics', 'munterlinden'),
             'add_new_item'          =>  __('Ajouter un comics', 'munterlinden'),
             'edit_item'             =>  __('Editer un comics', 'munterlinden'),
             'new_item'              =>  __('Nouveau comics', 'munterlinden'),
             'view_item'             =>  __('Visualiser un comics', 'munterlinden'),
             'search_items'          =>  __('Rechercher un comics', 'munterlinden'),
             'not_found'             =>  __('Aucun comics', 'munterlinden'),
             'not_found_in_trash'    =>  __('Aucun comics dans la corbeille', 'munterlinden'),
             'parent_item_colon'     =>  __('--', 'munterlinden'),
             'menu_name'             =>  __('Comics', 'munterlinden')
         );
         $supports_oeuvres_post_type_array = array(
             'title',
             'editor',
             'thumbnail',
             'excerpt'
         );
         $rewrite_oeuvres_post_type_array = array(
             'slug'          =>  _x('collections', 'Pour les collections', 'foundationpress'),
             'with_front'    =>  false,
             'feeds'         =>  true,
             'pages'         =>  true
         );
         $args_oeuvres_post_type_array = array(
             'labels'                =>  $labels_oeuvres_post_type_array,
             'description'           =>  __('Contenu complet Projets', 'munterlinden'),
             'public'                =>  true,
             'publicly_queryable'    =>  true,
             'menu_position'         =>  50,
             'menu_icon'             =>  '',
             'capability_type'       =>  'post',
             'supports'              =>  $supports_oeuvres_post_type_array,
             'rewrite'               =>  $rewrite_oeuvres_post_type_array,
             'show_in_nav_menus'     =>  true,
             'hierarchical'          =>  true,
             'has_archive'           =>  true
         );
         register_post_type('oeuvres', $args_oeuvres_post_type_array);
    }
    add_action( 'init', 'comics_post_types', 1);
?>
