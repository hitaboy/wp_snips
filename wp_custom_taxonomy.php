<?php 
  /*aqui fas un taxonomy per el custom post type personas*/
  add_action( 'init', 'register_taxonomy_tipos_de_personas' );

function register_taxonomy_tipos_de_personas() {

    $labels = array( 
        'name' => _x( 'tipos de personas', 'tipos_de_personas' ),
        'singular_name' => _x( 'tipo de persona', 'tipos_de_personas' ),
        'search_items' => _x( 'Search tipos de personas', 'tipos_de_personas' ),
        'popular_items' => _x( 'Popular tipos de personas', 'tipos_de_personas' ),
        'all_items' => _x( 'All tipos de personas', 'tipos_de_personas' ),
        'parent_item' => _x( 'Parent tipo de persona', 'tipos_de_personas' ),
        'parent_item_colon' => _x( 'Parent tipo de persona:', 'tipos_de_personas' ),
        'edit_item' => _x( 'Edit tipo de persona', 'tipos_de_personas' ),
        'update_item' => _x( 'Update tipo de persona', 'tipos_de_personas' ),
        'add_new_item' => _x( 'Add New tipo de persona', 'tipos_de_personas' ),
        'new_item_name' => _x( 'New tipo de persona', 'tipos_de_personas' ),
        'separate_items_with_commas' => _x( 'Separate tipos de personas with commas', 'tipos_de_personas' ),
        'add_or_remove_items' => _x( 'Add or remove tipos de personas', 'tipos_de_personas' ),
        'choose_from_most_used' => _x( 'Choose from most used tipos de personas', 'tipos_de_personas' ),
        'menu_name' => _x( 'tipos de personas', 'tipos_de_personas' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => false,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'tipos_de_personas', array('personas'), $args );
}
?>