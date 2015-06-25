<?php
/**
 * Plugin Name: WP REST API Filter Fields
 * Description: Use &fields=ID,title to fetch only the ID and title. Works with posts, comments, taxonomy, media
 * Version: 1
 * Author: Nishant
 * Author URI: https://twitter.com/nish_crafts
 * Plugin URI: https://github.com/nCrafts/json-rest-api-filter-fields
 */
add_filter( 'json_prepare_post', 'json_rest_api_filter_fields_post', 10, 3 );
function json_rest_api_filter_fields_post( $data, $post, $context ) {
	if ( !empty($_GET['fields']) )
	{
		$new_data = array();
		$fields = explode(',', $_GET['fields']);
		if ( empty($fields) || count($fields)==0 ) { return $data; }
		foreach ($data as $key => $value) {
			if (in_array($key, $fields)){$new_data[$key] = $value;}
		}
	}
	return isset($new_data) ? $new_data : $data;
}
add_filter( 'json_prepare_taxonomy', 'json_rest_api_filter_fields_taxonomy', 10, 3 );
function json_rest_api_filter_fields_taxonomy( $data, $post, $context ) {
	if ( !empty($_GET['fields']) )
	{
		$new_data = array();
		$fields = explode(',', $_GET['fields']);
		if ( empty($fields) || count($fields)==0 ) { return $data; }
		foreach ($data as $key => $value) {
			if (in_array($key, $fields)){$new_data[$key] = $value;}
		}
	}
	return isset($new_data) ? $new_data : $data;
}
add_filter( 'json_prepare_comment', 'json_rest_api_filter_fields_comment', 10, 3 );
function json_rest_api_filter_fields_comment( $data, $post, $context ) {
	if ( !empty($_GET['fields']) )
	{
		$new_data = array();
		$fields = explode(',', $_GET['fields']);
		if ( empty($fields) || count($fields)==0 ) { return $data; }
		foreach ($data as $key => $value) {
			if (in_array($key, $fields)){$new_data[$key] = $value;}
		}
	}
	return isset($new_data) ? $new_data : $data;
}
?>