<?php

$cp_config['taxonomy']['alltax'] = array(
	'settings' => array(
		'active' => true,
		'id' => 'alltax',
		'name' => 'alltax',
		'post_type' => 'all',
		'context' => 'side', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'labels' => array(
		'name'                       => _x( 'All', 'taxonomy general name' ),
		'singular_name'              => _x( 'All', 'taxonomy singular name' ),
		'search_items'               => __( 'Search All' ),
		'popular_items'              => __( 'Popular All' ),
		'all_items'                  => __( 'All All' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit All' ),
		'update_item'                => __( 'Update All' ),
		'add_new_item'               => __( 'Add New All' ),
		'new_item_name'              => __( 'New All Name' ),
		'separate_items_with_commas' => __( 'Separate All with commas' ),
		'add_or_remove_items'        => __( 'Add or remove All' ),
		'choose_from_most_used'      => __( 'Choose from the most used All' ),
		'not_found'                  => __( 'No All found.' ),
		'menu_name'                  => __( 'All' ),
	),
	'args' => array(
		'hierarchical' => false,
		'show_tagcloud' => false,
		'rewrite' => array('slug' => 'alltax'),
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);



/* ----------- TAF -------------- */

$cp_config['taf']['brand'] = array(
	'settings' => array(
		'active' => true,
		'taxonomy_id' => 'alltax'
	),
	'fields' => array(
		1 => array(
			'id' => 'content',
			'name' => 'Content',
			'type' => 'editor',
			'description' => '',
			'translate' => true
		),

		11 => array(
			'id' => 'test',
			'name' => 'test',
			'type' => 'text',
			'description' => '',
			'translate' => false
		),
		
		2 => array(
			'id' => 'file',
			'name' => 'File',
			'type' => 'upload',
			'multiple' => false,
			'filetype' => 'image', // image, file, video
			'attributes' => array(
				'autofocus' => false,
				'disabled' => false,
				'required' => false,
				'size' => '1',
			),
			'labels' => array(
				'button' => 'Add Images',
				'button_window' => 'Add Images',
				'title_window' => 'Upload or Choose Images'
			)
		)
	)
);