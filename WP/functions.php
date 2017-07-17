<?php

/* Lees meer ********************************************/
function remove_menus(){
 
  remove_menu_page( 'edit-comments.php' );

}
add_action( 'admin_menu', 'remove_menus' );


/* Lees meer ********************************************/
function change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Portfolio';
    $submenu['edit.php'][5][0] = 'Portfolio';
    $submenu['edit.php'][10][0] = 'Voeg project toe';
    $submenu['edit.php'][16][0] = 'Portfolio Tags';
}
function change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Portfolio';
    $labels->singular_name = 'Portfolio';
    $labels->add_new = 'Voeg project toe';
    $labels->add_new_item = 'Voeg project toe';
    $labels->edit_item = 'Pas portfolio aan';
    $labels->new_item = 'Portfolio';
    $labels->view_item = 'Bekijk portfolio';
    $labels->search_items = 'Zoek portfolio';
    $labels->not_found = 'Niks gevonden';
    $labels->not_found_in_trash = 'Niks in de prullenmand';
    $labels->all_items = 'Alle portfolio';
    $labels->menu_name = 'Portfolio';
    $labels->name_admin_bar = 'Portfolio';
}
 
add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );