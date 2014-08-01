<?php

$cp_config['customize_section']['colors'] = array(
	'active' => true,
	'title' => __cp('Colors', 'customization'),
	'priority' => 35,
	'capability' => 'edit_theme_options',
	'description' => __cp('Allows to customize colors.', 'customization')
);

$cp_config['customize_section']['images'] = array(
	'active' => true,
	'title' => __cp('Images', 'customization'),
	'priority' => 36,
	'capability' => 'edit_theme_options',
	'description' => __cp('Allows to customize images.', 'customization')
);

$cp_config['customize_settings']['background'] = array(
	'active' => true,
	'label' => __cp('Background Color', 'customization'), //Admin-visible name of the control
	'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '#FFFFFF', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 10,
	'control' => 'WP_Customize_Color_Control',
	'css' => array(
		'body {background-color: %s}'
	)
);

$cp_config['customize_settings']['main_color'] = array(
	'active' => true,
	'label' => __cp('Main Color', 'customization'), //Admin-visible name of the control
	'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '#323b44', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 15,
	'control' => 'WP_Customize_Color_Control',
	'css' => array(
		'a {color: %s}',
		'header {background-color: %s}',
		'footer  {background-color: %s}',
		'.read_more {color: %s}',
		'.languages li a.active{color: %s}',
		'h3 {color: %s}',
		'header nav ul {background-color: %s}',
		'.cta {background-color: %s}',
		'button:hover, .comment-respond input[type="submit"]:hover {background-color: %s}',
		'.blog aside h3{color: %s}',
		'.single-news aside h3{color: %s}',
	)
);

$cp_config['customize_settings']['bg_color'] = array(
	'active' => true,
	'label' => __cp('BG Color', 'customization'), //Admin-visible name of the control
	'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '#323b44', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 15,
	'control' => 'WP_Customize_Color_Control',
	'css' => array(
		'.read_more:hover {background-color: %s}',
		'footer .menu ul li a:hover {color: %s}',
		'footer section article .languages li a:hover {color: %s}',
		'footer section article div a:hover {color: %s}',
		'aside ul li a:hover {background-color: %s}',
		'aside ul li.current_page_item  a {background-color: %s}',
		'aside ul li.current-cat  a {background-color: %s}',
		'.comments  {border-color: %s}',
	)
);

$cp_config['customize_settings']['secondary_color'] = array(
	'active' => true,
	'label' => __cp('Secondary Color', 'customization'), //Admin-visible name of the control
	'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '#323b44', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 15,
	'control' => 'WP_Customize_Color_Control',
	'css' => array(
		'header nav ul li.current_page_item a {background-color: %s}',
		'header nav ul li.current_page_parent a {background-color: %s}',
		'header nav ul li a:hover {background-color: %s}',
		'footer .menu {background-color: %s}',
		'a:hover {color: %s}',
		'h2 {color: %s}',
		'aside ul li a {color: %s}',
		'.show_menu:hover {background-color: %s}',
		'header nav ul {border-color: %s}',
		'.cta:hover {background-color: %s}',
		'button, .comment-respond input[type="submit"] {background-color: %s}',
		
	)
);

$cp_config['customize_settings']['text_color'] = array(
	'active' => true,
	'label' => __cp('Text Color', 'customization'), //Admin-visible name of the control
	'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '#FFFFFF', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 15,
	'control' => 'WP_Customize_Color_Control',
	'css' => array(
		'body {color: %s}',
		'p {color: %s}',
		'h4 {color: %s}'
	)
);

$cp_config['customize_settings']['text'] = array(
	'active' => true,
	'label' => __cp('Some Text', 'customization'), //Admin-visible name of the control
	'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => 'hello', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 15,
	'control' => 'WP_Customize_Control'
);


$cp_config['customize_settings']['header_image'] = array(
	'active' => true,
	'label' => __cp('Header Image', 'customization'), //Admin-visible name of the control
	'section' => 'images', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 10,
	'control' => 'WP_Customize_Image_Control',
	'css' => array(
		'#header_img {background-image: url(%s); background-size: cover}'
	)
);

$cp_config['customize_settings']['logo'] = array(
	'active' => true,
	'label' => __cp('Logo', 'customization'), //Admin-visible name of the control
	'section' => 'images', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 10,
	'control' => 'WP_Customize_Image_Control',
	'css' => array(
	
	)
);

$cp_config['customize_settings']['search-icon'] = array(
	'active' => true,
	'label' => __cp('Search icon', 'customization'), //Admin-visible name of the control
	'section' => 'images', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 10,
	'control' => 'WP_Customize_Image_Control',
	'css' => array(
		'#search_form input[type="submit"]{background-image: url(%s);}'
	)
);