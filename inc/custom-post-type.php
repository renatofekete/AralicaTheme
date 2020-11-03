<?php

function aralica_post_type()
{
    $labelsApartments = array(
        'name' => _x('Apartments', 'Post Type General Name', 'aralica'),
        'singular_name' => _x('Apartment', 'Post Type Singular Name', 'aralica'),
        'menu_name' => _x('Apartments', 'aralica'),
        'parent_item_colon' => __('Parent Apartment', 'aralica'),
        'all_items' => __('All Apartments', 'aralica'),
        'view_item' => __('View Apartment', 'aralica'),
        'add_new_item' => __('Add new Apartment', 'aralica'),
        'add_new' => __('Add New', 'aralica'),
        'edit_item' => __('Edit Apartment', 'aralica'),
        'update_item' => __('Update Apartment', 'aralica'),
        'search_items' => __('Search Apartment', 'aralica'),
        'not_found' => __('Not Found', 'aralica'),
        'slug' => __('apartments', 'aralica')
    );

    $labelsActivities = array(
        'name' => _x('Activities', 'Post Type General Name', 'aralica'),
        'singular_name' => _x('Activity', 'Post Type Singular Name', 'aralica'),
        'menu_name' => _x('Activities', 'aralica'),
        'parent_item_colon' => __('Parent Activity', 'aralica'),
        'all_items' => __('All Activities', 'aralica'),
        'view_item' => __('View Activity', 'aralica'),
        'add_new_item' => __('Add new Activity', 'aralica'),
        'add_new' => __('Add New', 'aralica'),
        'edit_item' => __('Edit Activity', 'aralica'),
        'update_item' => __('Update Activity', 'aralica'),
        'search_items' => __('Search Activity', 'aralica'),
        'not_found' => __('Not Found', 'aralica')
    );

    $labelsPartners = array(
        'name' => _x('Partners', 'Post Type General Name', 'aralica'),
        'singular_name' => _x('Partner', 'Post Type Singular Name', 'aralica'),
        'menu_name' => _x('Partners', 'aralica'),
        'parent_item_colon' => __('Parent Partner', 'aralica'),
        'all_items' => __('All Partners', 'aralica'),
        'view_item' => __('View Partner', 'aralica'),
        'add_new_item' => __('Add new Partner', 'aralica'),
        'add_new' => __('Add New', 'aralica'),
        'edit_item' => __('Edit Partner', 'aralica'),
        'update_item' => __('Update Partner', 'aralica'),
        'search_items' => __('Search Partner', 'aralica'),
        'not_found' => __('Not Found', 'aralica')
    );


    $argsApartments = array(
        'label'               => __('apartment', 'aralica'),
        'description'         => __('Apartments', 'aralica'),
        'labels'              => $labelsApartments,
        'supports'            => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );

    $argsActivities = array(
        'label'               => __('activity', 'aralica'),
        'description'         => __('Activities', 'aralica'),
        'labels'              => $labelsActivities,
        'supports'            => array('title', 'editor', 'author', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-location'
    );

    $argsPartners = array(
        'label'               => __('partners', 'aralica'),
        'description'         => __('Partners', 'aralica'),
        'labels'              => $labelsPartners,
        'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-thumbs-up'
    );

    register_post_type('apartments', $argsApartments);
    register_post_type('activities', $argsActivities);
    register_post_type('partners', $argsPartners);
}

add_action('init', 'aralica_post_type', 0);
