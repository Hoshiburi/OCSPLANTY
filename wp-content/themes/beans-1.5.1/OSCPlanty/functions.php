<?php

//activation theme

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


//Hook

function hide_admin_menu ( $items, $args ) {

    $user_is_logged_in = is_user_logged_in();

    // Parcourez les éléments du menu
    foreach ( $items as $key => $item ) {
        // Vérifiez si l'élément de menu est intitulé "Admin" et si l'utilisateur n'est pas connecté
        if ( $item->title === 'Admin' && ! $user_is_logged_in ) {
            // Supprimez l'élément de menu du tableau
            unset( $items[ $key ] );
        }
    }
    return $items;
}

// Ajoutez le filtre pour exécuter la fonction sur le hook wp_nav_menu_objects
add_filter( 'wp_nav_menu_objects', 'hide_admin_menu', 10, 2 );

