<?php
  /*aquets codi es per crea un custom post type a un wordpress. Aquest en concret es per un que es diu personas!*/
add_action( 'init', 'create_post_type_persona' );
function create_post_type_persona() {
  register_post_type( 'personas',
    array(
      'labels' => array(
        'name' => __( 'Personas' ),
        'singular_name' => __( 'Personas' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'Personas'),
    )
  );
}
?>