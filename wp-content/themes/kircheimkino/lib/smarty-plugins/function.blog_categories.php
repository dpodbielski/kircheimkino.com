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
function smarty_function_blog_categories($params, $template) {
    
	global $wpdb;
	
	$args = array(
    'type'            => 'monthly',
    'show_post_count' => false,
    'echo'            => 1,
    'title_li'        => __( '' ),
    'walker'             => null
);
	
	    $cat=wp_list_categories( $args ); 
	
	
		//new dBug( $cat );
	
    return $cat;
    
}

?>