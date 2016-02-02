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

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

// --> Oeuvres
         $labels_oeuvres_post_type_array = array(
             'name'                  =>  __('Oeuvres', 'munterlinden'),
             'singular_name'         =>  __('Oeuvre', 'munterlinden'),
             'add_new'               =>  __('Ajouter une oeuvre', 'munterlinden'),
             'add_new_item'          =>  __('Ajouter une oeuvre', 'munterlinden'),
             'edit_item'             =>  __('Editer l\'oeuvre', 'munterlinden'),
             'new_item'              =>  __('Nouvelle oeuvre', 'munterlinden'),
             'view_item'             =>  __('Visualiser l\'oeuvre', 'munterlinden'),
             'search_items'          =>  __('Rechercher une oeuvre', 'munterlinden'),
             'not_found'             =>  __('Aucune oeuvre', 'munterlinden'),
             'not_found_in_trash'    =>  __('Aucune oeuvre dans la corbeille', 'munterlinden'),
             'parent_item_colon'     =>  __('--', 'munterlinden'),
             'menu_name'             =>  __('Oeuvres', 'munterlinden')
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
