<?php

/* ----------- Custom Post Type -------------- */

$cp_config['cpt']['slider'] = array(
	'settings' => array(
		'active' => true,
		'name' => 'slider',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'page',
		'hierarchial' => true,
		'rewrite' => array('slug' => 'slider'),
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'menu_icon' => '',
		'menu_icon_id' => '233'
	),
	'labels' => array(
		'name' => __('Slider'),
		'singular_name' => __('Slider'),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add New'),
		'edit_item' => __('Edit '),
		'new_item' => __('New '),
		'view_item' => __('View '),
		'search_items' => __('Search '),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	),
	'support' => array(
		'title' => true,
		'editor' => false,
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
		'id' => 'description',
		'name' => 'Description',
		'post_type' => 'slider',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'description',
			'name' => 'Description',
			'type' => 'text',
			'translation' => 1,
			'attributes' => array(
				'autofocus' => false,
				'disabled' => false,
				'required' => false,
				'value' => 'http://',
				'size' => '1',
				'width' => '100%',
			),
		)
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'link',
		'name' => 'Link',
		'post_type' => 'slider',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'url',
			'name' => 'External url',
			'type' => 'url',
			'attributes' => array(
				'autofocus' => false,
				'disabled' => false,
				'required' => false,
				'value' => 'http://',
				'size' => '1',
				'width' => '320px',
			),
		),
		2 => array(
			'id' => 'page_link',
			'name' => 'Internal page',
			'type' => 'post_link',
			'prefix' => '',
			'suffix' => '',
			'description' => '',
			'attributes' => array(
				'autofocus' => false,
				'disabled' => false,
				'required' => false,
				'size' => '1',
				'width' => '320px',
			),
			'arguments' => array(
				'post_type' => 'page'
			)
		)
	)
);

/* ----------- Admin List Views -------------- */

$cp_config['alv'][] = array(
	'settings' => array(
		'active' => true,
		'post_type' => 'slider',
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
	'name' => 'slider',
	'args' => array(
		'post_type' => 'slider',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);

$cp_config['loop'][] = array(
	'name' => 'bg_header',
	'args' => array(
		'post_type' => 'slider',
		'posts_per_page' => 1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);
