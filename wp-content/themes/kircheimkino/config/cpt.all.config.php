<?php

/* ----------- Custom Post Type -------------- */

$cp_config['cpt']['all'] = array(
	'settings' => array(
		'active' => true,
		'name' => 'all',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchial' => true,
		'rewrite' => array('slug' => 'all'),
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'menu_icon' => '',
		'menu_icon_id' => '177'
	),
	'labels' => array(
		'name' => __('All Fields'),
		'singular_name' => __('All Field'),
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
		'editor' => true,
		'author' => false,
		'thumbnail' => true,
		'excerpt' => false,
		'trackbacks' => false,
		'custom-fields' => false,
		'comments' => true,
		'revisions' => false,
		'page-attributes' => true,
		'post-formats' => false
	),
);

/* ----------- Meta Boxes -------------- */

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'text_fields',
		'name' => 'Fields minimal options',
		'post_type' => 'all',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'text',
			'name' => 'text',
			'type' => 'text'
		),
		2 => array(
			'id' => 'password',
			'name' => 'password',
			'type' => 'password'
		),
		3 => array(
			'id' => 'email',
			'name' => 'email',
			'type' => 'email'
		),
		4 => array(
			'id' => 'number',
			'name' => 'number',
			'type' => 'number'
		),
		5 => array(
			'id' => 'range',
			'name' => 'range',
			'type' => 'range'
		),
		6 => array(
			'id' => 'color',
			'name' => 'color',
			'type' => 'color'
		),
		7 => array(
			'id' => 'url',
			'name' => 'url',
			'type' => 'url'
		),
		8 => array(
			'id' => 'date',
			'name' => 'date',
			'type' => 'date'
		),
		9 => array(
			'id' => 'textarea',
			'name' => 'textarea',
			'type' => 'textarea'
		),
		10 => array(
			'id' => 'editor',
			'name' => 'editor',
			'type' => 'editor'
		),
		11 => array(
			'id' => 'checkbox',
			'name' => 'checkbox',
			'type' => 'checkbox'
		),
		12 => array(
			'id' => 'checkboxm',
			'name' => 'checkboxes',
			'type' => 'checkbox',
			'values' => array(
				1 => 'option 1',
				2 => 'option 2',
				3 => 'option 3'
			)
		),
		13 => array(
			'id' => 'radiom',
			'name' => 'radio',
			'type' => 'radio',
			'values' => array(
				1 => 'option 1',
				2 => 'option 2',
				3 => 'option 3'
			)
		),
		14 => array(
			'id' => 'select',
			'name' => 'select',
			'type' => 'select',
			'values' => array(
				1 => 'option 1',
				2 => 'option 2',
				3 => 'option 3'
			)
		),
		15 => array(
			'id' => 'multiselect',
			'name' => 'multiselect',
			'type' => 'multiselect',
			'values' => array(
				1 => 'option 1',
				2 => 'option 2',
				3 => 'option 3'
			)
		),
		16 => array(
			'id' => 'post_link',
			'name' => 'post link',
			'type' => 'post_link'
		),
		17 => array(
			'id' => 'user_roles',
			'name' => 'user roles',
			'type' => 'user_roles'
		),
		331 => array(
			'id' => 'images',
			'name' => 'Images',
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
				'button' => 'Add',
				'button_window' => 'Add',
				'title_window' => 'Upload or Choose Images'
			)
		)
	)
);


$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'group',
		'name' => 'Group',
		'post_type' => 'all',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'group',
			'name' => 'group',
			'type' => 'group',
			'fields' => array(

				1 => array(
					'id' => 'group_text',
					'name' => 'group text',
					'type' => 'text'
				),
				2 => array(
					'id' => 'group_date',
					'name' => 'group date',
					'type' => 'date'
				)
			)
		)
	)
);


$cp_config['loop'][] = array(
	'name' => 'all',
	'args' => array(
		'post_type' => 'all',
		'posts_per_page' => 1,
		'orderby' => 'date',
		'order' => 'DESC'
	)
);
