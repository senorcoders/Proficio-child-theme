<?php


/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
			'height'      => 248,
			'width'       => 248,
			'flex-height' => true,
		) );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'mytheme' ),
	) );

	add_action( 'wp_enqueue_scripts', 'add_style' );
	function add_style(){
		// Add custom fonts, used in the main stylesheet.
		wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
		wp_enqueue_style( 'Questrial', 'https://fonts.googleapis.com/css?family=Questrial' );
		wp_enqueue_style( 'Oxygen', 'https://fonts.googleapis.com/css?family=Oxygen:300,400,700' );


		//<!-- Bootstrap core CSS -->    
		wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css' );
    
    //<!-- Custom fonts for this template -->    
    wp_enqueue_style( 'fontawesome', get_template_directory_uri(). '/vendor/font-awesome/css/font-awesome.min.css' );  
    wp_enqueue_style( 'fontgoogle', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' );    
    wp_enqueue_style( 'fontgoogle2', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' );

    //<!-- Plugin CSS -->
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '/vendor/magnific-popup/magnific-popup.css' );  
    
    //<!-- Custom styles for this template -->    
    wp_enqueue_style( 'cretive', get_template_directory_uri(). '/css/creative.min.css' );  
			
	wp_enqueue_style( 'styleTheme', get_template_directory_uri(). '/style.css' );
	wp_enqueue_style( 'stylemrec', get_template_directory_uri(). '/assets/src/css/customMilton.css' );


	}

	add_action( 'wp_enqueue_scripts', 'add_script' );
	function add_script(){
		
		 //<!-- Bootstrap core JavaScript -->
	    wp_enqueue_script( 'tether', get_template_directory_uri() . '/vendor/tether/tether.min.js', array( 'jquery' ) );
	    wp_enqueue_script( 'boostrapjs', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );

	    //<!-- Plugin JavaScript -->
	    wp_enqueue_script( 'easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array( 'jquery' ) );
	    wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array( 'jquery' ) );
	    wp_enqueue_script( 'magnific-popupjs', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ) );

	    //<!-- Custom scripts for this template -->
	    wp_enqueue_script( 'creative', get_template_directory_uri() . '/js/creative.min.js', array( 'jquery' ) );
	    
wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ) );
	}


	
	/*add_filter('wpcf7_form_elements', function($content) {
    	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    	return $content;
	});*/

function sc_enqueue_admin_script() {
    wp_enqueue_script( 'my_custom_script', get_template_directory_uri() . '/assets/src/js/customMilton.js', array('jquery') );
}
add_action( 'admin_enqueue_scripts', 'sc_enqueue_admin_script' );

/**titan options page**/
require get_template_directory() . '/titan-framework-checker.php';

require get_template_directory() . '/titan-options.php';


// Register Event Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ),
		'name_admin_bar'        => __( 'Events', 'text_domain' ),
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
	$args = array(
		'label'                 => __( 'Event', 'text_domain' ),
		'description'           => __( 'Events', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'           => 'dashicons-tickets-alt',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'custom_post_type', 0 );
