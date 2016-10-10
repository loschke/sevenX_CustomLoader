<?php
add_action( 'init', 'cptui_register_my_cpts_wia_partner' );
function cptui_register_my_cpts_wia_partner() {
    $labels = array(
        "name" => __( 'WiA Partner', 'twentysixteen' ),
        "singular_name" => __( 'WiA Partner', 'twentysixteen' ),
        "menu_name" => __( 'WiA Partner', 'twentysixteen' ),
        "all_items" => __( 'Alle Partner', 'twentysixteen' ),
        "add_new" => __( 'Neuer Partner', 'twentysixteen' ),
        "add_new_item" => __( 'Partner hinzufügen', 'twentysixteen' ),
        "edit_item" => __( 'Partner bearbeiten', 'twentysixteen' ),
        "new_item" => __( 'Neuer Partner', 'twentysixteen' ),
        "view_item" => __( 'Partner anzeigen', 'twentysixteen' ),
        "search_items" => __( 'Partner suchen', 'twentysixteen' ),
        "not_found" => __( 'Keinen Partner gefunden', 'twentysixteen' ),
        "not_found_in_trash" => __( 'Kein Partner im Papierkorb gefunden', 'twentysixteen' ),
        "featured_image" => __( 'Partner Logo', 'twentysixteen' ),
        "set_featured_image" => __( 'Partner Logo auswählen', 'twentysixteen' ),
        "remove_featured_image" => __( 'Partner Logo entfernen', 'twentysixteen' ),
        "use_featured_image" => __( 'Partner Logo verwenden', 'twentysixteen' ),
        "archives" => __( 'Partner Archiv', 'twentysixteen' ),
    );

    $args = array(
        "label" => __( 'WiA Partner', 'twentysixteen' ),
        "labels" => $labels,
        "description" => "Verwaltung von Partner und Sponsoren zur Anzeige in verschiedenen Varianten",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "partner",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "wia_partner", "with_front" => true ),
        "query_var" => true,

        "supports" => array( "title", "editor", "thumbnail" ),
        "taxonomies" => array( "partner_kategorie" ),
    );
    register_post_type( "wia_partner", $args );

// End of cptui_register_my_cpts_wia_partner()
}


add_action( 'init', 'cptui_register_my_taxes_partner_kategorie' );
function cptui_register_my_taxes_partner_kategorie() {
    $labels = array(
        "name" => __( 'Partner Kategorien', 'twentysixteen' ),
        "singular_name" => __( 'Partner Kategorie', 'twentysixteen' ),
    );

    $args = array(
        "label" => __( 'Partner Kategorien', 'twentysixteen' ),
        "labels" => $labels,
        "public" => true,
        "hierarchical" => true,
        "label" => "Partner Kategorien",
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'partner_kategorie', 'with_front' => true, ),
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "partner-kategorie",
        "show_in_quick_edit" => true,
    );
    register_taxonomy( "partner_kategorie", array( "wia_partner" ), $args );

// End cptui_register_my_taxes_partner_kategorie()
}
