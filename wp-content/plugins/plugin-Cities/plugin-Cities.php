<?php
 /**
 plugin Name: Cities.
 Description: basic word press Plugin for custom Cities posts Type.
 * Author:     hiker-onTrail.com
 * License:     GPL2
 *blog is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Cities} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with blog.  
 
 */
/*Custom Post type start*/
function cw_post_type_Cities() {
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
	'name' => _x('Cities', 'plural'),
	'singular_name' => _x('Cities', 'singular'),
	'menu_name' => _x('Cities', 'admin menu'),
	'name_admin_bar' => _x('Cities', 'admin bar'),
	'add_new' => _x('Add New', 'add new'),
	'add_new_item' => __('Add New Cities'),
	'new_item' => __('New Cities'),
	'edit_item' => __('Edit Cities'),
	'view_item' => __('View Cities'),
	'all_items' => __('All Cities'),
	'search_items' => __('Search Cities'),
	'not_found' => __('No Cities found.'),
        
	);
	$args = array(
	'supports' => $supports,
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'Cities'),
	'has_archive' => true,
	'hierarchical' => false,
	);
	register_post_type('Cities', $args);
	}
    add_action('init', 'cw_post_type_Cities');
    //remove permaLinks after register custom post type to avoid 404 error.
 function pluginprefix_install(){
    wp_custom_post_Type();
    flush_rewrite_rules();
 }
 register_activation_hook( __FILE__,'cw_post_type_cities()');
//in deactive remove custome post type . and database tables
function pluginpefix_decativation(){
    unregister_post_type('cities');
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'pluginpefix_decativation');
	/*Custom Post type end*/