<?php
 /**
 plugin Name: Universities.
 Description: basic word press Plugin for custom Universities posts Type.
 * Author:     hiker-onTrail.com
 * License:     GPL2
 *blog is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Universities} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with blog.  
 
 */
/*Custom Post type start*/
function cw_post_type_Universities() {
	$supports = array(
	'title', // post title
	'editor', // post content
	'author', // post author
	'thumbnail', // featured images
    'page-attributes' ,//attributes
	'excerpt', // post excerpt
	'custom-fields', // custom fields
	'comments', // post comments
	'revisions', // post revisions
	'post-formats', // post formats
	);
	$labels = array(
	'name' => _x('Universities', 'plural'),
	'singular_name' => _x('Universities', 'singular'),
	'menu_name' => _x('Universities', 'admin menu'),
	'name_admin_bar' => _x('Universities', 'admin bar'),
	'add_new' => _x('Add New', 'add new'),
	'add_new_item' => __('Add New Universities'),
	'new_item' => __('New Universities'),
	'edit_item' => __('Edit Universities'),
	'view_item' => __('View Universities'),
	'all_items' => __('All Universities'),
	'search_items' => __('Search Universities'),
	'not_found' => __('No Universities found.'),
        
	);
	$args = array(
	'supports' => $supports,
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'Universities'),
	'has_archive' => true,
	'hierarchical' => false,
	);
	register_post_type('Universities', $args);
	}
    add_action('init', 'cw_post_type_Universities');
    //remove permaLinks after register custom post type to avoid 404 error.
 function pluginprefix2_install(){
    wp_custom_post_Type();
    flush_rewrite_rules();
 }
 register_activation_hook( __FILE__,'cw_post_type_Universities()');
//in deactive remove custome post type . and database tables
function pluginpefix2_decativation(){
    unregister_post_type('Universities');
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'pluginpefix2_decativation');
	/*Custom Post type end*/