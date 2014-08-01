<?php

/* ----------- Custom Post Type -------------- */

$cp_config['cpt']['gallery'] = array(
	'settings' => array(
		'active' => true,
		'name' => 'gallery',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'page',
		'hierarchial' => true,
		'rewrite' => array('slug' => 'gallery'),
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'menu_icon' => '',
		'menu_icon_id' => '161'
	),
	'labels' => array(
		'name' => __('Gallery CPT'),
		'singular_name' => __('Gallery singular_name'),
		'add_new' => __('Add New CPT'),
		'add_new_item' => __('Add New add_new_item'),
		'edit_item' => __('Edit CPT'),
		'new_item' => __('New CPT'),
		'view_item' => __('View CPT'),
		'search_items' => __('Search '),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	),
	'support' => array(
		'title' => true,
		'editor' => true,
		'author' => false,
		'thumbnail' => true,
		'excerpt' => false,
		'trackbacks' => false,
		'custom-fields' => false,
		'comments' => false,
		'revisions' => false,
		'page-attributes' => true,
		'post-formats' => false
	),
);

/* ----------- Meta Boxes -------------- */

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'images',
		'name' => 'Images MB settings',
		'post_type' => 'gallery',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'images',
			'name' => 'Images MB fields',
			'type' => 'upload',
			'multiple' => true,
			'filetype' => 'image', // image, file, video
			'attributes' => array(
				'autofocus' => false,
				'disabled' => false,
				'required' => false,
				'size' => '1',
			),
			'labels' => array(
				'button' => 'Add MB',
				'button_window' => 'Add button_window',
				'title_window' => 'Upload or Choose Images'
			)
		)
	)
);

/* ----------- Admin List Views -------------- */

$cp_config['alv'][] = array(
	'settings' => array(
		'active' => true,
		'post_type' => 'gallery',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	),
	'fields' => array(
		'featured_image',
		'title',
		'date',
	)
);

/* ----------- Loops -------------- */

$cp_config['loop'][] = array(
	'name' => 'gallery',
	'args' => array(
		'post_type' => 'gallery',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);
