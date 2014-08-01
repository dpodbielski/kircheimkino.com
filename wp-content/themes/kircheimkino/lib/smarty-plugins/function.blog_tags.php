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
function smarty_function_blog_tags($params, $template) {
    
	global $wpdb;
	
	$args = array(
    'smallest'	=> 16, 
    'largest'	=> 16,
    'unit'	=> 'px', 
    'separator'	=> '<br/>',
    'echo'      => false,
    'format'	=> 'array',
    );

	    $cat=wp_tag_cloud( $args); 
		$tag="";
		foreach( $cat as $wpt ) $tag.="<li>" . $wpt . "</li>\n"; 
	
		//new dBug( $cat );
	
    return $tag;
    
}

?>