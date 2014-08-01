<?php

class CP_Gf {

	public function __construct() {
		
		$this->init();
	}

	function init() {
		add_action('admin_init', array($this,'add_grav_forms'));	
	}
	
	function add_grav_forms(){
	    $role = get_role('editor');
	    $role->add_cap('edit_theme_options');
	    $role->add_cap('manage_options');
	}
}

