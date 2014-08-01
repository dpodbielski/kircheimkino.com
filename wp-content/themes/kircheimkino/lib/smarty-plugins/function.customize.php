<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * WP get_the_content function
 *
 * Type:     function
 * Name:     get_the_content
 * Purpose:  print out a bloginfo information
 *
 */
function smarty_function_customize($params, $template) {
	
     $template_name = get_stylesheet();

     $tmp="theme_mods_".$template_name;

    $options = get_option( $tmp);

    //new dBug ($template_name);

    if (isset($params['key'])) {
    	if (isset($options[$params['key']])) {
    		$option = $options[$params['key']];
    	}
    } else {
    	$option = $options;
    }

    if (isset($params['assign'])) {
    	$template->assign($params['assign'], $option);
    	return null;
    }

    return $option;
}