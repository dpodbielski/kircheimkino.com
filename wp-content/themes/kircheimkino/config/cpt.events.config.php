<?php

/* ----------- Custom Post Type -------------- */

$cp_config['cpt']['events'] = array(
	'settings' => array(
		'active' => true,
		'name' => 'events',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchial' => false,
		'rewrite' => array('slug' => 'event'),
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'menu_icon' => '',
		'menu_icon_id' => '233'
	),
	'labels' => array(
		'name' => __('Events'),
		'singular_name' => __('Event'),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add New Event'),
		'edit_item' => __('Edit Event'),
		'new_item' => __('New Event'),
		'view_item' => __('View Event'),
		'search_items' => __('Search Event'),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	),
	'support' => array(
		'title' => true,
		'editor' => false,
		'author' => false,
		'thumbnail' => false,
		'excerpt' => false,
		'trackbacks' => false,
		'custom-fields' => false,
		'comments' => false,
		'revisions' => false,
		'page-attributes' => false,
		'post-formats' => false
	),
/*dodatki*/
);

/* ----------- Meta Boxes -------------- */
/* ------ Events -------------- */
$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'events',
		'name' => 'Events MB',
		'post_type' => 'events',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'speaker',
			'name' => 'Speaker',
			'type' => 'text'
		),
		2 => array(
			'id' => 'time',
			'name' => 'Time',
			'type' => 'text',
			'default' => ''
		),
		3 => array(
			'id' => 'edate',
			'name' => 'Date',
			'type' => 'date',
			'default' => ''
		)
	)
);

/*-- Description -*/
$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'description',
		'name' => 'Description `MB',
		'post_type' => 'events',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'description',
			'name' => 'Description fields',
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

/*-- Link -*/
$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'link',
		'name' => 'Link',
		'post_type' => 'events',
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
		'post_type' => 'events',
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
	'name' => 'events',
	'args' => array(
		'post_type' => 'events',
		'posts_per_page' => 1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);