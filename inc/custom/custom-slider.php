<?php

function wpdocs_codex_slider_init() {
    $labels = array(
        'name'                  => _x( 'Diaporama', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Diaporama', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Diaporama', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Diaporama', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Ajouter', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter un diaporama', 'textdomain' ),
        'new_item'              => __( 'Nouveau', 'textdomain' ),
        'edit_item'             => __( 'Editer un diaporama', 'textdomain' ),
        'view_item'             => __( 'Voir un diaporama', 'textdomain' ),
        'all_items'             => __( 'Tous les diaporamas', 'textdomain' ),
        'search_items'          => __( 'Search slider', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent slider:', 'textdomain' ),
        'not_found'             => __( 'Aucun diaporamas trouvés.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Aucun diaporamas trouvés dans la corbeille.', 'textdomain' ),
        'featured_image'        => _x( 'Diapositive', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Choisir la diapositive', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Retirer la diapositive', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter slider list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'diapo' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-slides',
        'supports'           => array( 'title', 'thumbnail'),
    );

    register_post_type( 'slider', $args );
}

add_action( 'init', 'wpdocs_codex_slider_init' );