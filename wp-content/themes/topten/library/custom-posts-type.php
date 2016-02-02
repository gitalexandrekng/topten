<?php
function comics_posts_type(){
  $labels_comics_post_type_array = array(
            'name'                  =>  __('Comics', 'munterlinden'),
            'singular_name'         =>  __('Comic', 'munterlinden'),
            'add_new'               =>  __('Ajouter un comic', 'munterlinden'),
            'add_new_item'          =>  __('Ajouter un comic', 'munterlinden'),
            'edit_item'             =>  __('Editer l\'oeuvre', 'munterlinden'),
            'new_item'              =>  __('Nouveau comics', 'munterlinden'),
            'view_item'             =>  __('Visualiser l\'oeuvre', 'munterlinden'),
            'search_items'          =>  __('Rechercher une oeuvre', 'munterlinden'),
            'not_found'             =>  __('Aucun comics', 'munterlinden'),
            'not_found_in_trash'    =>  __('Aucune oeuvre dans la corbeille', 'munterlinden'),
            'parent_item_colon'     =>  __('--', 'munterlinden'),
            'menu_name'             =>  __('Comics', 'munterlinden')
        );
        $supports_comics_post_type_array = array(
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        );
        $rewrite_comics_post_type_array = array(
            'slug'          =>  _x('comics', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_comics_post_type_array = array(
            'labels'                =>  $labels_comics_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'munterlinden'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  '',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_comics_post_type_array,
            'rewrite'               =>  $rewrite_comics_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        register_post_type('comics', $args_comics_post_type_array);
      }

      add_action('init','comics_posts_type', 1);
