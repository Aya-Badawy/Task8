<?php
 /**
 plugin Name: Countries.
 Description: basic word press Plugin for custom Countries posts Type.
 * Author:     hiker-onTrail.com
 * License:     GPL2
 *blog is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Countries} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with blog.  
 
 */
/*Custom Post type start*/
function cw_post_type_Countries() {
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
	'name' => _x('Countries', 'plural'),
	'singular_name' => _x('Countries', 'singular'),
	'menu_name' => _x('Countries', 'admin menu'),
	'name_admin_bar' => _x('Countries', 'admin bar'),
	'add_new' => _x('Add New', 'add new'),
	'add_new_item' => __('Add New Countries'),
	'new_item' => __('New Countries'),
	'edit_item' => __('Edit Countries'),
	'view_item' => __('View Countries'),
	'all_items' => __('All Countries'),
	'search_items' => __('Search Countries'),
	'not_found' => __('No Countries found.'),
        
	);
	$args = array(
	'supports' => $supports,
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'Countries'),
	'has_archive' => true,
	'hierarchical' => false,
	);
	register_post_type('Countries', $args);
	}
    add_action('init', 'cw_post_type_Countries');
    //remove permaLinks after register custom post type to avoid 404 error.
 function pluginprefix1_install(){
    wp_custom_post_Type();
    flush_rewrite_rules();
 }
 register_activation_hook( __FILE__,'cw_post_type_Countries()');
//in deactive remove custome post type . and database tables
function pluginpefix1_decativation(){
    unregister_post_type('cities');
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'pluginpefix1_decativation');
	/*Custom Post type end*/