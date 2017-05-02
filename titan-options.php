<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'proficio_create_options' );

/**
 * Initialize Titan & options here
 */
function proficio_create_options() {

	$titan = TitanFramework::getInstance( 'proficio' );
	
	
	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	
	$section = $titan->createThemeCustomizerSection( array(
	    'name' => __( 'Theme Options', 'proficio' ),
	) );
	
	$section->createOption( array(
	    'name' => __( 'Background Color', 'proficio' ),
	    'id' => 'sample_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'proficio' ),
	    'default' => '#FFFFFF',
		'css' => 'body { background-color: value }',
	) );
	
	$section->createOption( array(
	    'name' => __( 'Headings Font', 'proficio' ),
	    'id' => 'headings_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for all headings in the site', 'proficio' ),
		'show_color' => false,
		'show_font_size' => false,
	    'show_font_weight' => false,
	    'show_font_style' => false,
	    'show_line_height' => false,
	    'show_letter_spacing' => false,
	    'show_text_transform' => false,
	    'show_font_variant' => false,
	    'show_text_shadow' => false,
	    'default' => array(
	        'font-family' => 'Fauna One',
	    ),
		'css' => 'h1, h2, h3, h4, h5, h6 { value }',
	) );
	
	
	/**
	 * Create an admin panel & tabs
	 * You should put options here that do not change the look of your theme
	 */
	
	$adminPanel = $titan->createAdminPanel( array(
	    'name' => __( 'Theme Settings', 'proficio' ),
	) );
	
	$generalTab = $adminPanel->createTab( array(
	    'name' => __( 'General', 'proficio' ),
	) );

	$generalTab->createOption( array(
		'name' => 'Email',
		'id' => 'email',
		'type' => 'text',
		'desc' => _('Business Email')
	) );

	$generalTab->createOption( array(
		'name' => 'Phone Number',
		'id' => 'phone',
		'type' => 'text',
		'desc' => _('Business Phone Number')
	) );

	$generalTab->createOption( array(
		'name' => 'Working hours',
		'id' => 'working-hours',
		'type' => 'text',
		'desc' => _('Business Working Hours')
	) );

	$generalTab->createOption( array(
		'name' => 'Address',
		'id' => 'address',
		'type' => 'text',
		'desc' => _('Business address')
	) );

	$generalTab->createOption( array(
		'name' => 'Parallax Image',
		'id' => 'parallax-image',
		'type' => 'file',
		'desc' => _('Background image for parallax section')
	) );

	$generalTab->createOption( array(
		'name' => 'CTA Text',
		'id' => 'cta-text',
		'type' => 'text'		
	) );

	$generalTab->createOption( array(
		'name' => 'CTA Text Button',
		'id' => 'cta-text-button',
		'type' => 'text'		
	) );
	
	$generalTab->createOption( array(
	    'type' => 'save',
	) );

	

	$header = $adminPanel->createTab( array(
	    'name' => __( 'Header', 'proficio' ),
	) );

	
	
	$header->createOption( array(
		'name' => 'Title Slide 1',
		'id' => 'title1',
		'type' => 'text'
	) );

	$header->createOption( array(
		'name' => 'Subtitle Slide 1',
		'id' => 'subtitle1',
		'type' => 'text'
	) );


	$header->createOption( array(
		'name' => 'Slide 1',
		'id' => 'slide1',
		'type' => 'file',
		'desc' => 'Upload your image for slide 1'
	) );

	$header->createOption( array(
		'name' => 'Title Slide 2',
		'id' => 'title2',
		'type' => 'text'
	) );

	$header->createOption( array(
		'name' => 'Subtitle Slide 2',
		'id' => 'subtitle2',
		'type' => 'text'
	) );

	$header->createOption( array(
		'name' => 'Slide 2',
		'id' => 'slide2',
		'type' => 'file',
		'desc' => 'Upload your image for slide 2'
	) );

	$header->createOption( array(
		'name' => 'Title Slide 3',
		'id' => 'title3',
		'type' => 'text'
	) );

	$header->createOption( array(
		'name' => 'Subtitle Slide 3',
		'id' => 'subtitle3',
		'type' => 'text'
	) );

	$header->createOption( array(
		'name' => 'Slide 3',
		'id' => 'slide3',
		'type' => 'file',
		'desc' => 'Upload your image for slide 3'
	) );

	$header->createOption( array(
	    'type' => 'save',
	) );

	$footer = $adminPanel->createTab( array(
	    'name' => __( 'Footer', 'proficio' ),
	) );

	$footer->createOption( array(
		'name' => 'footer-logo',
		'id' => 'footer-logo',
		'type' => 'file'
	) );
	$footer->createOption( array(
	    'type' => 'save',
	) );
	
}

/*metaboxes*/

add_action( 'tf_create_options', 'mrec_proficio_metabox_options' );
 
function aa_metabox_options() {
 
    // Initialize Titan with your theme name.
    $titan = TitanFramework::getInstance( 'neat' );
 
    /**
     * First metabox.
     */
 
    $aa_metbox = $titan->createMetaBox( array(
        'name'      => 'CTA', // Name the options menu.
        'post_type' => array( 'page' ) // Can be a string or array.
    ) );
 
}