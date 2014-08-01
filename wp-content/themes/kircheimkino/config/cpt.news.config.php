<?php

/* ----------- Custom Post Type -------------- */

$cp_config['cpt']['news'] = array(
	'settings' => array(
		'active' => true,
		'name' => 'news',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'capability_type' => 'page',
		'hierarchial' => true,
		'rewrite' => array('slug' => 'new'),
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'menu_icon' => '',
		'menu_icon_id' => '123'
	),
	'labels' => array(
		'name' => __('News'),
		'singular_name' => __('News'),
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
		'comments' => false,
		'revisions' => false,
		'page-attributes' => true,
		'post-formats' => false
	),
);


/* ----------- Admin List Views -------------- */

$cp_config['alv'][] = array(
	'settings' => array(
		'active' => true,
		'post_type' => 'news',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	),
	'fields' => array(
		'featured_image',
		'title',
		'designer',
		'date',
	)
);


/* ----------- Loops -------------- */

$cp_config['loop'][] = array(
	'name' => 'news',
	'args' => array(
		'post_type' => 'news',
		'posts_per_page' => 9,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);

$cp_config['loop'][] = array(
	'name' => 'news-archive',
	'args' => array(
		'post_type' => 'news',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);

$cp_config['loop'][] = array(
	'name' => 'news-home',
	'args' => array(
		'post_type' => 'news',
		'posts_per_page' => 3,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	)
);
