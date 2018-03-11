<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Product Post Type
function product_post_type() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Products',
		'archives'              => 'Product Archives',
		'attributes'            => 'Product Attributes',
		'parent_item_colon'     => 'Parent Product:',
		'all_items'             => 'All Product',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Product',
		'uploaded_to_this_item' => 'Uploaded to this product',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter products list',
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'Store item',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'product_post_type', 0 );

// Register Adventure Post Type
function adventure_post_type() {

	$labels = array(
		'name'                  => 'Adventures',
		'singular_name'         => 'Adventure',
		'menu_name'             => 'Adventures',
		'name_admin_bar'        => 'Adventures',
		'archives'              => 'Adventure Archives',
		'attributes'            => 'Adventure Attributes',
		'parent_item_colon'     => 'Parent Adventure:',
		'all_items'             => 'All Adventures',
		'add_new_item'          => 'Add New Adventure',
		'add_new'               => 'Add New Adventure',
		'new_item'              => 'New Adventure',
		'edit_item'             => 'Edit Adventure',
		'update_item'           => 'Update Adventure',
		'view_item'             => 'View Adventure',
		'view_items'            => 'View Adventures',
		'search_items'          => 'Search Adventure',
		'not_found'             => 'Adventure not found',
		'not_found_in_trash'    => 'Adventure not found in Trash',
		'featured_image'        => 'Adventure featured Image',
		'set_featured_image'    => 'Set Adventure featured image',
		'remove_featured_image' => 'Remove Adventure featured image',
		'use_featured_image'    => 'Use as Adventure featured image',
		'insert_into_item'      => 'Insert into Adventure',
		'uploaded_to_this_item' => 'Uploaded to this Adventure',
		'items_list'            => 'Adventures list',
		'items_list_navigation' => 'Adventures list navigation',
		'filter_items_list'     => 'Filter Adventures list',
	);
	$args = array(
		'label'                 => 'Adventure',
		'description'           => 'Adventure posts',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 15,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => 'adventure',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rest_base'             => 'adventure',
	);
	register_post_type( 'adventure', $args );

}
add_action( 'init', 'adventure_post_type', 0 );