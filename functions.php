<?php

/**----- Ajout de la personnalisation des menus ------ */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/*---- Ajout de zones de widget ---*/

    /* ---- Création de la Zone de widget " navbar" ----*/
    function create_widget_navbar() {
        register_sidebar( array(
        'name' => 'Navigation',
        'id' => 'mynavbar',
        'description' => 'Zone de navigation',
        'before_widget' => '<div class="mynavbar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'create_widget_navbar' );

  /* ---- Création de la Zone de widget " footer" ----*/
    function create_widget_footer() {
        register_sidebar( array(
        'name' => 'footer',
        'id' => 'footer',
        'description' => 'Zone footer',
        'before_widget' => '<div class="footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'create_widget_footer' );
  