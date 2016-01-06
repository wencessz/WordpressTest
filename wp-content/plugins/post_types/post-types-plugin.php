<?php
/*
Plugin Name: Custom Post types
Version: 1.0.0
Author: Victor szelagowski
Text Domain: post_types
Domain Path: /languages
*/


defined( 'ABSPATH' ) or exit;

/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

    require_once realpath(dirname(__FILE__) . '/../cmb2/init.php');

}

function add_tests_fields() {

  // Start with an underscore to hide fields from custom fields list
  $prefix = '_tests_';

  /**
   * Sample metabox to demonstrate each field type included
   */
  $cmb_demo = new_cmb2_box( array(
    'id'            => $prefix . 'metabox',
    'title'         => __( 'Fields', 'po_post_types' ),
    'object_types'  => array( 'test', ), // Post type
  ) );

  $cmb_demo->add_field( array(
    'name' => __( 'Input text', 'po_post_types' ),
    'id'   => $prefix . 'input_text',
    'type' => 'text',
  ) );

}

function post_types_add() {
  load_plugin_textdomain('post_types', false, 'post_types/languages/');
  $labels = array(
    'name'               => __( 'test', 'po_post_types'),
    'singular_name'      => __( 'Test', 'po_post_types'),
    'add_new'            => __( 'Add New', 'po_post_types'),
    'add_new_item'       => __( 'Add a Test', 'po_post_types'),
    'edit_item'          => __( 'Edit Test', 'po_post_types' ),
    'new_item'           => __( 'New Test', 'po_post_types' ),
    'all_items'          => __( 'All Tests', 'po_post_types' ),
    'view_item'          => __( 'View Tests', 'po_post_types' ),
    'search_items'       => __( 'Search Tests', 'po_post_types' ),
    'not_found'          => __( 'No Tests found', 'po_post_types' ),
    'not_found_in_trash' => __( 'No Tests found in the Trash', 'po_post_types' ),
    'parent_item_colon'  => '',
    'menu_name'          => __( 'Tests', 'po_post_types' ),
    'rewrite' => false
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'All Tests',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'test', $args );

}


add_action( 'init', 'post_types_add' );
add_action( 'cmb2_admin_init', 'add_tests_fields' );
