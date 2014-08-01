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
function smarty_function_list_comments($params) {
    	
    	$args = array(
    'author_email' => '',
	'ID' => '',
	'karma' => '',
	'number' => '',
	'offset' => '',
	'orderby' => '',
	'order' => 'DESC',
	'parent' => '',
	'post_id' => 1,
	'post_author' => '',
	'post_name' => '',
	'post_parent' => '',
	'post_status' => '',
	'post_type' => '',
	'status' => '',
	'type' => '',
	'user_id' => '',
	'search' => '',
	'count' => false,
	'meta_key' => '',
	'meta_value' => '',
	'meta_query' => '',
);

		$comments = get_comments( $args);
foreach($comments as $comment) :
	echo"<p>".$comment->comment_content."</p>";
	echo"<h5>".$comment->comment_author."</h5>";
endforeach;

	}



?>