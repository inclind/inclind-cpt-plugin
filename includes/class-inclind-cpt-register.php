<?php

/**
 * Registers the CPTs
 *
 * @link       https://www.inclind.com/
 * @since      1.0.0
 *
 * @package    Inclind_Cpt
 * @subpackage Inclind_Cpt/includes
 */

/**
 * Registers the CPTs.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Inclind_Cpt
 * @subpackage Inclind_Cpt/includes
 * @author     Carson Schulz <carson@inclindinc.com>
 */
class Inclind_Cpt_Register {


	/**
	 * Register all of the post types
	 *
	 * @param  array  This an array of CPTs. The key will be the post key and the value will be the arguments.
	 *
	 * @since    1.0.0
	 */
	public function register_post_types( $cpts ) {

		if ( count( $cpts ) <= 0 ) {
			return;
		}

		// Iterate and register
		foreach ( $cpts as $post_value => $args ) {
			register_post_type( $post_value, $args );
		}

	}


	/**
	 * Markup for all of the CPTs
	 * FOR ALL THAT IS GOOD IN HUMANITY PLEASE USE A GENERATOR, PREFERABLY:
	 * https://generatewp.com/post-type/
	 *
	 * @since    1.0.0
	 */
	public function create_post_types() {

		// We will store all of our arguments here
		$cpts = [];

		// Example labels
		$labels_example = array(
			'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Post Types', 'text_domain' ),
			'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
			'archives'              => __( 'Item Archives', 'text_domain' ),
			'attributes'            => __( 'Item Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'All Items', 'text_domain' ),
			'add_new_item'          => __( 'Add New Item', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'view_items'            => __( 'View Items', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);

		// Example arguments
		$args_example = array(
			'label'                 => __( 'Post Type', 'text_domain' ),
			'description'           => __( 'Post Type Description', 'text_domain' ),
			'labels'                => $labels_example,
			'supports'              => false,
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-carrot',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);

		// Store the above item in the cpt array. Ensure it has the post type key as the key name and the args as the value
		$cpts['post_type'] = $args_example;

		// Now we will register them
		$this->register_post_types( $cpts );

	}

}