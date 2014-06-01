<?php
/**
 * Custom functions
 */

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
		'supports' => array(
			 'title', 
			 'editor',
			 'thumbnail',
		  ),
		'capability_type' =>  'post',
		)
	);
}
