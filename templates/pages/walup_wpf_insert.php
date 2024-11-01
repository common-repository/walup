<?php
function register_admin_pages_walup() {

	/**
	 * Post Type: Walup.
	 */

	$labels = [
		"name" => esc_html__( "Walup", "walup_for_wpf" ),
		"singular_name" => esc_html__( "Walup", "walup_for_wpf" ),
		"menu_name" => esc_html__( "Walup Pages", "walup_for_wpf" ),
		"all_items" => esc_html__( "All Walups", "walup_for_wpf" ),
		"add_new" => esc_html__( "Add Walup Page", "walup_for_wpf" ),
		"add_new_item" => esc_html__( "Add New Walup", "walup_for_wpf" ),
		"edit_item" => esc_html__( "Edit Walup Page", "walup_for_wpf" ),
		"new_item" => esc_html__( "New Walup", "walup_for_wpf" ),
		"view_item" => esc_html__( "View Walup Page", "walup_for_wpf" ),
		"view_items" => esc_html__( "View Walup Pages", "walup_for_wpf" ),
		"search_items" => esc_html__( "Search Walup Pages", "walup_for_wpf" ),
		"not_found" => esc_html__( "No Walup Page Found", "walup_for_wpf" ),
		"not_found_in_trash" => esc_html__( "No Walup Pages Found in Trash", "walup_for_wpf" ),
		"parent" => esc_html__( "wallet-up Parent", "walup_for_wpf" ),
		"featured_image" => esc_html__( "Walup Feature Image", "walup_for_wpf" ),
		"set_featured_image" => esc_html__( "Walup Set Feature Image", "walup_for_wpf" ),
		"remove_featured_image" => esc_html__( "Walup Remove Image", "walup_for_wpf" ),
		"use_featured_image" => esc_html__( "Walup Feature Image", "walup_for_wpf" ),
		"archives" => esc_html__( "Walup Archive", "walup_for_wpf" ),
		"insert_into_item" => esc_html__( "Walup Insert", "walup_for_wpf" ),
		"uploaded_to_this_item" => esc_html__( "Walup Upload", "walup_for_wpf" ),
		"filter_items_list" => esc_html__( "Walup List items", "walup_for_wpf" ),
		"items_list_navigation" => esc_html__( "Walup Nav List", "walup_for_wpf" ),
		"items_list" => esc_html__( "Walup Item List", "walup_for_wpf" ),
		"attributes" => esc_html__( "Walup Attributes", "walup_for_wpf" ),
		"name_admin_bar" => esc_html__( "New menu in admin bar", "walup_for_wpf" ),
		"item_published" => esc_html__( "Walup Published", "walup_for_wpf" ),
		"item_published_privately" => esc_html__( "Walup Published Privately", "walup_for_wpf" ),
		"item_reverted_to_draft" => esc_html__( "Walup reverted to draft", "walup_for_wpf" ),
		"item_scheduled" => esc_html__( "Walup Scheduled", "walup_for_wpf" ),
		"item_updated" => esc_html__( "Walup Updated", "walup_for_wpf" ),
		"parent_item_colon" => esc_html__( "wallet-up Parent", "walup_for_wpf" ),
	];

	$args = [
		"label" => esc_html__( "Walup", "walup_for_wpf" ),
		"labels" => $labels,
		"description" => "Add your customs pages for Wallet Up Checkout",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "walup",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "page",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-cloud-saved",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "revisions", "author", "page-attributes", "post-formats", "walup-support" ],
		"show_in_graphql" => false,
	];

	register_post_type( "walup", $args );
}

add_action( 'init', 'register_admin_pages_walup' );

function register_walup_tag() {

	/**
	 * Taxonomy: Walup Tags.
	 */

	$labels = [
		"name" => esc_html__( "Walup Tags", "walup_for_wpf" ),
		"singular_name" => esc_html__( "Walup Tag", "walup_for_wpf" ),
	];


	$args = [
		"label" => esc_html__( "Walup Tags", "walup_for_wpf" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'walup_tag', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "walup_tag",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "walup_tag", [ "walup" ], $args );
}
add_action( 'init', 'register_walup_tag' );

			if( function_exists('walup_add_local_field_group') ):

walup_add_local_field_group(array(
	'key' => 'group_636d290ee3274',
	'title' => 'walup',
	'fields' => array(
		array(
			'key' => 'field_636d29106710b',
			'label' => 'Store Phone Number',
			'name' => 'store_phone_number',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'min' => '',
			'max' => '',
			'placeholder' => 'Store Phone Number',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'walup',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;

/**
 * Firing Custom post EXIT for Walup Template for WPForm
*/

add_action( 'admin_init', 'walup_admin_init' );
function walup_admin_init() {
    if ( ! get_option( 'walup_installed' ) ) {
        $new_page_id = wp_insert_post( array(
            'post_title'     => 'Oops!',
            'post_type'      => 'page',
            'post_name'      => 'walup_exit',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '<p><h3>Sorry we can not process your request. Payment is required to complete your form.</h3></p><p></p>
<INPUT TYPE="button" VALUE="Try Again" onClick="document.referrer ? window.location = document.referrer : history.back()
">
    ',
            'post_status'    => 'publish',
            'post_author'    => get_current_user_id(),
            'menu_order'     => 0
        ) );

        if ( $new_page_id && ! is_wp_error( $new_page_id ) ){
            update_post_meta( $new_page_id, '_wp_page_template', 'template-blog.php' );
        }

        update_option( 'walup_installed', true );
    }
}
