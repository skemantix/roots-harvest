<?php
/**
 * Custom functions
 */


function custom_post_status(){
    register_post_status( 'unread', array(
        'label'                     => _x( 'Archived', 'post' ),
        'public'                    => true,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop( 'Archived <span class="count">(%s)</span>', 'Archived <span class="count">(%s)</span>' ),
    ) );
}
add_action( 'init', 'custom_post_status' );


add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'harvest_dj',
        array(
            'labels' => array(
                'name' => __( 'DJs' ),
                'singular_name' => __( 'DJ' ),
                'edit_item' => __( 'Edit DJ' ),
                'add_new' => __( 'Add DJ' ),
                'add_new_item' => __( 'Add New DJ' ),
                'new_item' => __( 'New DJ' ),
                'view_item' => __( 'View DJ' ),
                'search_item' => __( 'Search DJs' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'djs'),
            'description' => 'Books which we will be discussing on this blog.',
            'menu_icon' => 'dashicons-format-audio',
            'menu_position' => 5,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            ),
            'capability_type' =>  'post',
        )
    );
}
