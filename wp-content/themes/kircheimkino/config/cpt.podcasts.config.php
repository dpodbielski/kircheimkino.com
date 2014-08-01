<?php

/* ----------- Custom Post Type -------------- */

$cp_config['cpt']['podcasts'] = array(
	'settings' => array(
		'active' => true,
		'name' => 'podcasts',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchial' => false,
		'rewrite' => array('slug' => 'podcast'),
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'menu_icon' => '',
		'menu_icon_id' => '233'
	),
	'labels' => array(
		'name' => __('Podcasts CPT'),
		'singular_name' => __('Podcast'),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add New Podcast bbb'),
		'edit_item' => __('Edit Podcast'),
		'new_item' => __('New Podcast'),
		'view_item' => __('View Podcast'),
		'search_items' => __('Search Podcast'),
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
	)
);

/* ----------- Meta Boxes -------------- */
$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'podcasts',
		'name' => 'Details MB',
		'post_type' => 'podcasts',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'pauthor',
			'name' => 'Author',
			'type' => 'text'
		),
		2 => array(
			'id' => 'url',
			'name' => 'File Url',
			'type' => 'text',
			'default' => ''
		),
		3 => array(
			'id' => 'pdate',
			'name' => 'Date',
			'type' => 'date',
			'default' => ''
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
	'name' => 'podcasts',
	'args' => array(
		'post_type' => 'podcasts',
		'posts_per_page' => 9,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);