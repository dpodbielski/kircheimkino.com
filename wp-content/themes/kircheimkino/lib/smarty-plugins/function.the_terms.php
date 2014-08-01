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
function smarty_function_the_terms($params, $template) {
	if (!isset($params['id']) || !isset($params['taxonomy']))
        return null;

    if (!isset($params['assign']) || !$params['assign']) {
        $params['assign'] = $params['taxonomy'];
    }
    
    $terms = get_the_terms( $params['id'], $params['taxonomy'] );
    //new dBug ($params);
    $terms_array = array();
   
    if(!isset($terms->errors) && $terms) {

	    foreach ($terms as $key => $term) {
	        $terms[$key]->link = get_term_link( $term );
	        $terms_array[$key] = get_object_vars($terms[$key]);
	    }
    }
    
    $template->assign($params['assign'], $terms_array);
    return null;
}
