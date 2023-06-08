<?php

function wpdocs_codex_partner_init() {
    $labels = array(
        'name'                  => _x( 'Partenaires', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Partenaire', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Partenaires', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Partenaires', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Ajouter', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter un partenaire', 'textdomain' ),
        'new_item'              => __( 'Nouveau', 'textdomain' ),
        'edit_item'             => __( 'Editer un partenaire', 'textdomain' ),
        'view_item'             => __( 'Voir un partenaire', 'textdomain' ),
        'all_items'             => __( 'Tous les partenaires', 'textdomain' ),
        'search_items'          => __( 'Chercher un partenaire', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent partenaire:', 'textdomain' ),
        'not_found'             => __( 'Aucun partenaire trouvé.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Aucun partenaire trouvé dans la corbeille.', 'textdomain' ),
        'featured_image'        => _x( 'Couverture du partenaire', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Choisir une image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Supprimer l\'image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'partner archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into partner', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this partner', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter partner list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'partners list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'partners list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'partner' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 23,
        'menu_icon'          => 'dashicons-businessperson',
        'supports'           => array( 'title', 'thumbnail'),
    );

    register_post_type( 'partner', $args );
}

add_action( 'init', 'wpdocs_codex_partner_init' );