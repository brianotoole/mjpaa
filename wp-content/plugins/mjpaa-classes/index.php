<?php
/*
Plugin Name: MJPAA Class List
Plugin URI: #
Description: Custom post type & taxonomies for MJPAA classes
Version: 1.0.0
Author: MJPAA
*/


// Register Custom Taxonomy: "Program" - used within the "Class" custom post type
function class_program() {

	$labels = array(
		'name'                       => _x( 'Class Programs', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Class Program', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Class Programs', 'mjpaa' ),
		'all_items'                  => __( 'All Programs', 'mjpaa' ),
		'parent_item'                => __( 'Parent Program', 'mjpaa' ),
		'parent_item_colon'          => __( 'Parent Program:', 'mjpaa' ),
		'new_item_name'              => __( 'New Program Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add Program Item', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Program', 'mjpaa' ),
		'update_item'                => __( 'Update Program', 'mjpaa' ),
		'view_item'                  => __( 'View Program', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate programs with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove programs', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Programs', 'mjpaa' ),
		'search_items'               => __( 'Search Programs', 'mjpaa' ),
		'not_found'                  => __( 'Program Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'program', array( 'classes' ), $args );

}
add_action( 'init', 'class_program', 0 );



// Register Custom Taxonomy: "Session" - used within the "Class" custom post type
function class_session() {

	$labels = array(
		'name'                       => _x( 'Class Sessions', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Class Session', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Class Sessions', 'mjpaa' ),
		'all_items'                  => __( 'All Sessions', 'mjpaa' ),
		'parent_item'                => __( 'Parent Session', 'mjpaa' ),
		'parent_item_colon'          => __( 'Parent Session:', 'mjpaa' ),
		'new_item_name'              => __( 'New Session Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add Session Item', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Session', 'mjpaa' ),
		'update_item'                => __( 'Update Session', 'mjpaa' ),
		'view_item'                  => __( 'View Session', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate sessions with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove sessions', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Sessions', 'mjpaa' ),
		'search_items'               => __( 'Search Sessions', 'mjpaa' ),
		'not_found'                  => __( 'Session Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'session', array( 'classes' ), $args );

}
add_action( 'init', 'class_session', 0 );



// Register Custom Taxonomy: "Grade" - used within the "Class" custom post type
function class_grade_level() {

	$labels = array(
		'name'                       => _x( 'Class Grade Levels', 'Taxonomy General Name', 'mjpaa' ),
		'singular_name'              => _x( 'Class Grade Level', 'Taxonomy Singular Name', 'mjpaa' ),
		'menu_name'                  => __( 'Class Grade Levels', 'mjpaa' ),
		'all_items'                  => __( 'All Grade Levels', 'mjpaa' ),
		'parent_item'                => __( 'Grade Level Parent Item', 'mjpaa' ),
		'parent_item_colon'          => __( 'Grade Level Parent Item:', 'mjpaa' ),
		'new_item_name'              => __( 'New Grade Level Name', 'mjpaa' ),
		'add_new_item'               => __( 'Add New Grade Level', 'mjpaa' ),
		'edit_item'                  => __( 'Edit Grade Level', 'mjpaa' ),
		'update_item'                => __( 'Update Grade Level', 'mjpaa' ),
		'view_item'                  => __( 'View Grade Level', 'mjpaa' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'mjpaa' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'mjpaa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mjpaa' ),
		'popular_items'              => __( 'Popular Grade Levels', 'mjpaa' ),
		'search_items'               => __( 'Search Grade Levels', 'mjpaa' ),
		'not_found'                  => __( 'Not Found', 'mjpaa' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'grade', array( 'classes' ), $args );

}
add_action( 'init', 'class_grade_level', 0 );



// Register Custom Post Type: "Class"
function custom_post_type_classes() {

	$labels = array(
		'name'                => _x( 'Classes', 'Post Type General Name', 'mjpaa' ),
		'singular_name'       => _x( 'Class', 'Post Type Singular Name', 'mjpaa' ),
		'menu_name'           => __( 'Classes', 'mjpaa' ),
		'name_admin_bar'      => __( 'Classes', 'mjpaa' ),
		'parent_item_colon'   => __( 'Parent Item:', 'mjpaa' ),
		'all_items'           => __( 'All Classes', 'mjpaa' ),
		'add_new_item'        => __( 'Add New Class', 'mjpaa' ),
		'add_new'             => __( 'Add New', 'mjpaa' ),
		'new_item'            => __( 'New Class', 'mjpaa' ),
		'edit_item'           => __( 'Edit Class', 'mjpaa' ),
		'update_item'         => __( 'Update Class', 'mjpaa' ),
		'view_item'           => __( 'View Class', 'mjpaa' ),
		'search_items'        => __( 'Search Class', 'mjpaa' ),
		'not_found'           => __( 'Class not found', 'mjpaa' ),
		'not_found_in_trash'  => __( 'Class not found in Trash', 'mjpaa' ),
	);
	$args = array(
		'label'               => __( 'Class', 'mjpaa' ),
		'description'         => __( 'Class lists for MJPAA', 'mjpaa' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail', 'post-formats', ),
		'taxonomies'          => array( 'program', 'session', 'grade' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-playlist-audio',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'class', $args );

}
add_action( 'init', 'custom_post_type_classes', 1 );

?>