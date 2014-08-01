<?php

/* ----------- Custom Post Type -------------- */

$cp_config['cpt']['social'] = array(
	'settings' => array(
		'active' => true,
		'name' => 'social',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchial' => true,
		'rewrite' => array('slug' => 'social'),
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'menu_icon' => '',
		'menu_icon_id' => '303'
	),
	'labels' => array(
		'name' => __('Social media'),
		'singular_name' => __('Social media'),
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
		'id' => 'text',
		'name' => 'Link',
		'post_type' => 'social',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'low', // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'link',
			'name' => 'Link',
			'type' => 'text'
		)	
	)
);


/* ----------- Loops -------------- */

$cp_config['loop'][] = array(
	'name' => 'social',
	'args' => array(
		'post_type' => 'social',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);
