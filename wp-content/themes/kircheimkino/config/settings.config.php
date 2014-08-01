<?php

$cp_config['settings']['prime'] = array(
	'active' => true,
	'name' => 'Prime',
	'capability' => 'manage_options',
	'tabs' => array(
		'general' => array(
			'active' => true,
			'name' => 'General',
			'fields' => array(
				1 => array(
					'id' => 'prime_author',
					'name' => 'Author',
					'type' => 'text'
				)
			)
		),
		'seo' => array(
			'active' => true,
			'name' => 'SEO',
			'fields' => array(
				1 => array(
					'id' => 'text',
					'name' => 'Text',
					'type' => 'text'
				),
				2 => array(
					'id' => 'date',
					'name' => 'Date',
					'type' => 'date'
				),
				3 => array(
					'id' => 'textarea',
					'name' => 'Text Area',
					'type' => 'textarea'
				),
				4 => array(
					'id' => 'checkbox',
					'name' => 'checkbox',
					'type' => 'checkbox',
					'values' => array(
						'1' => 'option 1',
						'2' => 'option 2',
						'3' => 'option 3',
					)
				),
				5 => array(
					'id' => 'radio',
					'name' => 'radio',
					'type' => 'radio',
					'values' => array(
						'1' => 'option 1',
						'2' => 'option 2',
						'3' => 'option 3',
					)
				),
				6 => array(
					'id' => 'select',
					'name' => 'select',
					'type' => 'select',
					'values' => array(
						'1' => 'option 1',
						'2' => 'option 2',
						'3' => 'option 3',
					)
				),
				7 => array(
					'id' => 'multiselect',
					'name' => 'select',
					'type' => 'select',
					'values' => array(
						'1' => 'option 1',
						'2' => 'option 2',
						'3' => 'option 3',
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
				18 => array(
					'id' => 'users',
					'name' => 'users',
					'type' => 'users'
				)
			)
		),
		'design' => array(
			'active' => true,
			'name' => 'Design',
			'fields' => array(
				1 => array(
					'id' => 'text',
					'name' => 'Text',
					'type' => 'text'
				)
			)
		)
	)
);