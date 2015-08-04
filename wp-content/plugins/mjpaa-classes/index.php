<?php
/*
Plugin Name: MJPAA Class List
Plugin URI: #
Description: Custom post type for MJPAA classes
Version: 1.0.0
Author: MJPAA
*/
?>
<?php
// Register Custom Post Type: "Classes"
function custom_post_type_classes() {

	$labels = array(
		'name'                => _x( 'Classes', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Class', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Classes', 'text_domain' ),
		'name_admin_bar'      => __( 'Classes', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Classes', 'text_domain' ),
		'add_new_item'        => __( 'Add New Class', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Class', 'text_domain' ),
		'edit_item'           => __( 'Edit Class', 'text_domain' ),
		'update_item'         => __( 'Update Class', 'text_domain' ),
		'view_item'           => __( 'View Class', 'text_domain' ),
		'search_items'        => __( 'Search Class', 'text_domain' ),
		'not_found'           => __( 'Class not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Class not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Class', 'text_domain' ),
		'description'         => __( 'Class lists for MJPAA', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-audio',
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
add_action( 'init', 'custom_post_type_classes', 0 );

?>