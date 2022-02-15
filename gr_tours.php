<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://gremza.com
 * @since             1.0.0
 * @package           Gr_tours
 *
 * @wordpress-plugin
 * Plugin Name:       Tours
 * Plugin URI:        https://gremza.com/lalu
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Marsel 
 * Author URI:        https://gremza.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gr_tours
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GR_TOURS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gr_tours-activator.php
 */
function activate_gr_tours() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gr_tours-activator.php';
	Gr_tours_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gr_tours-deactivator.php
 */
function deactivate_gr_tours() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gr_tours-deactivator.php';
	Gr_tours_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gr_tours' );
register_deactivation_hook( __FILE__, 'deactivate_gr_tours' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gr_tours.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gr_tours() {

	$plugin = new Gr_tours();
	$plugin->run();
// Register Custom Post Type
function gr_post_travel() {

	$labels = array(
		'name'                  => _x( 'Torus', 'Post Type General Name', 'lalutheme' ),
		'singular_name'         => _x( 'Tour', 'Post Type Singular Name', 'lalutheme' ),
		'menu_name'             => __( 'Tours', 'lalutheme' ),
		'name_admin_bar'        => __( 'Torus', 'lalutheme' ),
		'archives'              => __( 'Item Archives', 'lalutheme' ),
		'attributes'            => __( 'Item Attributes', 'lalutheme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lalutheme' ),
		'all_items'             => __( 'All Items', 'lalutheme' ),
		'add_new_item'          => __( 'Add New Item', 'lalutheme' ),
		'add_new'               => __( 'Add New', 'lalutheme' ),
		'new_item'              => __( 'New Item', 'lalutheme' ),
		'edit_item'             => __( 'Edit Item', 'lalutheme' ),
		'update_item'           => __( 'Update Item', 'lalutheme' ),
		'view_item'             => __( 'View Item', 'lalutheme' ),
		'view_items'            => __( 'View Items', 'lalutheme' ),
		'search_items'          => __( 'Search Item', 'lalutheme' ),
		'not_found'             => __( 'Not found', 'lalutheme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lalutheme' ),
		'featured_image'        => __( 'Featured Image', 'lalutheme' ),
		'set_featured_image'    => __( 'Set featured image', 'lalutheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'lalutheme' ),
		'use_featured_image'    => __( 'Use as featured image', 'lalutheme' ),
		'insert_into_item'      => __( 'Insert into item', 'lalutheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lalutheme' ),
		'items_list'            => __( 'Items list', 'lalutheme' ),
		'items_list_navigation' => __( 'Items list navigation', 'lalutheme' ),
		'filter_items_list'     => __( 'Filter items list', 'lalutheme' ),
	);
	$args = array(
		'label'                 => __( 'Tour', 'lalutheme' ),
		'description'           => __( 'Torus', 'lalutheme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-airplane',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'tours', $args );

}
add_action( 'init', 'gr_post_travel', 0 );
}

  
  
function load_tours_template( $template ) {
    global $post;

    if ( 'tours' === $post->post_type && locate_template( array( 'single-tours.php' ) ) !== $template ) {
        
        return plugin_dir_path( __FILE__ ) . 'single-tours.php';
    }

    return $template;
}

add_filter( 'single_template', 'load_tours_template' );  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
run_gr_tours();
