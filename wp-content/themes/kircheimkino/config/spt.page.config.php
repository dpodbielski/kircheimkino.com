<?php

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'contactmb',
		'name' => 'Contact',
		'template' => 'contact',
		'post_type' => 'page',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'address',
			'name' => 'Address',
			'type' => 'text'
		)
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'gallerymb',
		'name' => 'Gallery',
		'template' => 'gallery',
		'post_type' => 'page',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'textg',
			'name' => 'text',
			'type' => 'text'
		)
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'home_slider',
		'name' => 'Slider',
		'template' => 'home',
		'post_type' => 'page',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'slider_max',
			'name' => 'Full width slider',
			'type' => 'checkbox',
			'description' => '',
			'values' => array(
				1 => '',
			)
		),
		2 => array(
			'id' => 'slider_mini',
			'name' => 'Page width slider',
			'type' => 'checkbox',
			'description' => '',
			'values' => array(
				1 => '',
			)
		)
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'home_bottom',
		'name' => 'Home bottom',
		'template' => 'home',
		'post_type' => 'page',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high' // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'home_bottom_section',
			'name' => 'Show About & Blog',
			'type' => 'checkbox',
			'description' => '',
			'values' => array(
				1 => '',
			)
		),
		2 => array(
			'id' => 'home_text_title',
			'name' => 'Home text title',
			'type' => 'text'
		),
		3 => array(
			'id' => 'home_text_content',
			'name' => 'Home text content',
			'type' => 'editor'
		),
		4 => array(
			'id' => 'blog_title',
			'name' => 'Blog title',
			'type' => 'text'
		),

	)
);

$cp_config['template']['home'] = array(
	'active' => 'true',
	'name' => __cp('Home', 'template_names'),
	'post_type' => 'page', // optional
	'file' => 'home-slider.html'
);

$cp_config['template']['gallery'] = array(
	'active' => 'true',
	'post_type' => 'page',
	'name' => __cp('Gallery', 'template_names'),
	'file' => 'gallery.html'
);

$cp_config['template']['news'] = array(
	'active' => 'true',
	'post_type' => 'page',
	'name' => __cp('News - List', 'template_names'),
	'file' => 'news.html'
);

$cp_config['template']['news-archive'] = array(
	'active' => 'true',
	'post_type' => 'page',
	'name' => __cp('News - Archive', 'template_names'),
	'file' => 'news-archive.html'
);

$cp_config['template']['contact'] = array(
	'active' => 'true',
	'post_type' => 'page',
	'name' => __cp('Contact page', 'template_names'),
	'file' => 'page-contact.html'
);