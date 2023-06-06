<?php

function wpdocs_codex_actu_init() {
    $labels = array(
        'name'                  => _x( 'Actualités', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Actualité', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Actualités', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Actualités', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Ajouter', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter une actualité', 'textdomain' ),
        'new_item'              => __( 'Nouveau', 'textdomain' ),
        'edit_item'             => __( 'Editer une actualité', 'textdomain' ),
        'view_item'             => __( 'Voir une actualité', 'textdomain' ),
        'all_items'             => __( 'Toutes les actualités', 'textdomain' ),
        'search_items'          => __( 'Chercher une actualité', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent actualité:', 'textdomain' ),
        'not_found'             => __( 'Aucune actualité trouvé.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Aucune actualité trouvé dans la corbeille.', 'textdomain' ),
        'featured_image'        => _x( 'Couverture de l\'actualité', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Choisir une image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Supprimer l\'image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'actu archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into actu', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this actu', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter actu list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'actus list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'actus list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'actu' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-admin-site-alt',
        'supports'           => array( 'title', 'thumbnail'),
    );

    register_post_type( 'actu', $args );
}

add_action( 'init', 'wpdocs_codex_actu_init' );