<?php

/*
Plugin Name: Denver Custom Post Types
Description: Sessions, speakers, and sponsors for Denver.
*/

function register_denver_session_post_type()
{
    $labels = array(
        "name" => "Denver Sessions",
        "singular_name" => "Denver Session",
        "menu_name" => "Denver Sessions",
        "all_items" => "All Denver Sessions",
        "add_new" => "Add New",
        "add_new_item" => "Add New Denver Session",
        "edit" => "Edit",
        "edit_item" => "Edit Denver Session",
        "new_item" => "New Denver Session",
        "view" => "View",
        "view_item" => "View Denver Session",
        "search_items" => "Search Denver Session",
        "not_found" => "No Sessions Found",
        "not_found_in_trash" => "No Sessions found in Trash",
    );

    $args = Array(
        "labels" => $labels,
        "description" => "A WITS Session",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "denver_session", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "excerpt", "revisions", "thumbnail", "author", "tags"),
    );
    register_post_type("denver_session", $args);
}
add_action('init', 'register_denver_session_post_type');





/* REGISTER SPEAKERS POST TYPE */
function register_denver_speaker_post_type()
{
    $labels = array(
        "name" => "Denver Speakers",
        "singular_name" => "Denver Speaker",
        "menu_name" => "Denver Speakers",
        "all_items" => "All Denver Speakers",
        "add_new" => "Add New",
        "add_new_item" => "Add New Denver Speaker",
        "edit" => "Edit",
        "edit_item" => "Edit Denver Speaker",
        "new_item" => "New Denver Speaker",
        "view" => "View",
        "view_item" => "View Denver Speaker",
        "search_items" => "Search Denver Speakers",
        "not_found" => "No Speakers Found",
        "not_found_in_trash" => "No Speakers found in Trash",
    );

    $args = Array(
        "labels" => $labels,
        "description" => "A WITS Speaker",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "denver_speaker", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "excerpt", "revisions", "thumbnail", "author"),
    );
    register_post_type("denver_speaker", $args);
}
add_action('init', 'register_denver_speaker_post_type');

if(function_exists("register_boston_field_group"))
{
  acf_add_local_field_group(array (
	'key' => 'group_586a721550db2',
	'title' => 'Denver Session Relationship',
	'fields' => array (
		array (
			'key' => 'field_586a7269a2d61',
			'label' => 'Denver Session Relationship',
			'name' => 'boston_session_relationship',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'boston_session',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'post_type',
			),
			'elements' => '',
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'boston_speaker',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_586a709cc2d86',
	'title' => 'Denver Speaker Fields',
	'fields' => array (
		array (
			'key' => 'field_586a719d5273c',
			'label' => 'Keynote',
			'name' => 'boston_keynote',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
		),
		array (
			'key' => 'field_586a71be5273d',
			'label' => 'Speaker Job Title',
			'name' => 'boston_job_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_586a71d65273e',
			'label' => 'Speaker Twitter',
			'name' => 'boston_twitter',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_586a71f85273f',
			'label' => 'Speaker Website',
			'name' => 'boston_website',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'boston_speaker',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_586a7384428df',
	'title' => 'Boston Speaker Photo',
	'fields' => array (
		array (
			'key' => 'field_586a73d329d26',
			'label' => 'Boston Speaker Photo',
			'name' => 'boston_speaker_photo',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'boston_speaker',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'post_type',
			),
			'elements' => '',
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'boston_session',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
}?>
