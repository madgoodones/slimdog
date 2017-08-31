<?php
/*
* Post Types
*/
function create_post_types() {
  register_post_type( 'slideshow',
    array(
      'labels'        => array(
          'name'          => __( 'Headers' ),
          'singular_name' => __( 'Header' )
          ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => true,
      'capability_type' => 'post',
      'publicly_queryable' => true,
      'rewrite'       => array('slug' => 'slideshow'),
      'menu_icon'     => 'dashicons-cart',
      'supports'      => array( 'title', 'page-attributes', 'revisions' ),
      )
    );
    register_post_type( 'diretores',
        array(
          'labels'        => array(
              'name'          => __( 'Diretores' ),
              'singular_name' => __( 'Diretor' )
              ),
          'public'        => true,
          'has_archive'   => false,
          'hierarchical'  => false,
          'exclude_from_search' => false,
          'capability_type' => 'post',
          'publicly_queryable' => true,
          'rewrite'       => array('slug' => 'diretores'),
          'menu_icon'     => 'dashicons-cart',
          'supports'      => array( 'title', 'page-attributes', 'revisions' ),
          )
        );
    register_post_type( 'projetos',
    array(
      'labels'        => array(
          'name'          => __( 'Projetos' ),
          'singular_name' => __( 'Projeto' )
          ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => false,
      'capability_type' => 'post',
      'publicly_queryable' => true,
      'rewrite'       => array('slug' => 'projetos'),
      'menu_icon'     => 'dashicons-cart',
      'supports'      => array( 'title', 'page-attributes', 'revisions' ),
      )
    );
    register_post_type( 'sobre',
        array(
          'labels'        => array(
              'name'          => __( 'Sobre' ),
              'singular_name' => __( 'Sobre' )
              ),
          'public'        => true,
          'has_archive'   => false,
          'hierarchical'  => false,
          'exclude_from_search' => true,
          'capability_type' => 'post',
          'publicly_queryable' => true,
          'rewrite'       => array('slug' => 'sobre'),
          'menu_icon'     => 'dashicons-cart',
          'supports'      => array( 'title', 'page-attributes', 'revisions' ),
          )
        );

    flush_rewrite_rules();
}
add_action( 'init', 'create_post_types' );

function create_taxonomy() {
    register_taxonomy( 'Tipo de projeto', 'projeto', array(
        'label'        => __( 'Tipos de projeto', 'textdomain' ),
        'rewrite'      => array( 'slug' => 'tipo-de-projeto' ),
        'hierarchical' => true,
        ) );
}
add_action( 'init', 'create_taxonomy', 0 );