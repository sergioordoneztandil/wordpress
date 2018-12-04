<?php 
/**
 * Function to register post type 
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.2.8
 */
function wplss_logo_showcase_post_types() {

	$sp_logoshowcase_labels =  apply_filters( 'sp_logo_showcase_slider_labels', array(
		'name'                => 'Other Brans',
		'singular_name'       => 'Other Brands',
		'add_new'             => __('Add New', 'wp-logo-showcase-responsive-slider-slider'),
		'add_new_item'        => __('Add New Brand', 'wp-logo-showcase-responsive-slider-slider'),
		'edit_item'           => __('Edit Brand', 'wp-logo-showcase-responsive-slider-slider'),
		'new_item'            => __('New Brand', 'wp-logo-showcase-responsive-slider-slider'),
		'all_items'           => __('All Brand', 'wp-logo-showcase-responsive-slider-slider'),
		'view_item'           => __('View Brand', 'wp-logo-showcase-responsive-slider-slider'),
		'search_items'        => __('Search Brand', 'wp-logo-showcase-responsive-slider-slider'),
		'not_found'           => __('No Brand found', 'wp-logo-showcase-responsive-slider-slider'),
		'not_found_in_trash'  => __('No Brand found in Trash', 'wp-logo-showcase-responsive-slider-slider'),
		'featured_image' 		=> __('Set brand image', 'wp-logo-showcase-responsive-slider-slider'),
		'set_featured_image'	=> __( 'Set brand image' , 'wp-logo-showcase-responsive-slider-slider' ),
		'remove_featured_image' => __( 'Remove brand image', 'wp-logo-showcase-responsive-slider-slider' ),
		'parent_item_colon'   => '',
		'menu_name'           => __('Other Brands', 'wp-logo-showcase-responsive-slider-slider'),
		'exclude_from_search' => true
	));

	$sp_logoshowcase_args = array(
		'labels' 				=> $sp_logoshowcase_labels,
		'public' 				=> false,
		'menu_icon'   			=> 'dashicons-images-alt2',
		'show_ui' 				=> true,
		'show_in_menu' 			=> true,
		'query_var' 			=> false,
		'capability_type' 		=> 'post',
		'hierarchical' 			=> false,
		'supports' 				=> array('title','thumbnail')
	);
	register_post_type( 'logoshowcase', apply_filters( 'sp_logoshowcase_post_type_args', $sp_logoshowcase_args ) );
}
add_action('init', 'wplss_logo_showcase_post_types');


/**
 * Function to register post taxonomies 
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.2.8
*/
add_action( 'init', 'wplss_logo_showcase_taxonomies');
function wplss_logo_showcase_taxonomies() {
    $labels = array(
        'name'              => _x( 'Category', 'wp-logo-showcase-responsive-slider-slider' ),
        'singular_name'     => _x( 'Category', 'wp-logo-showcase-responsive-slider-slider' ),
        'search_items'      => __( 'Search Category' ),
        'all_items'         => __( 'All Category' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Logo Category' ),

    );
    $args = array(
    	'public'			=> false,
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => false,
    );
    register_taxonomy( 'wplss_logo_showcase_cat', array( 'logoshowcase' ), $args );
}