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