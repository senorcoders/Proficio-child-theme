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
			
	wp_enqueue_style( 'styleTheme', get_template_directory_uri(). '/style.css', array( 'bootstrap', 'creative' ));

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
	}


	
	/*add_filter('wpcf7_form_elements', function($content) {
    	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    	return $content;
	});*/

/**titan options page**/
require get_template_directory() . '/titan-framework-checker.php';

require get_template_directory() . '/titan-options.php';
