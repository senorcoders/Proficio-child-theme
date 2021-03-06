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
		wp_enqueue_style( 'stylebdangla', get_template_directory_uri(). '/assets/src/css/style-B.css' );
    wp_enqueue_style( 'styleOwl', get_template_directory_uri(). '/css/owl.carousel.min.css' );
     wp_enqueue_style( 'aosCss', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css' );
     


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
		wp_enqueue_script( 'proficioJS', get_template_directory_uri() . '/js/proficio.js', array( 'jquery' ) );
    wp_enqueue_script( 'owlJS', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'aosJS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', array( 'jquery' ) );

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




// Register Sidebars
    function custom_sidebars() {

    	$args = array(
    		'id'            => 'post_sidebar',
    		'class'         => 'sidebar-posts',
    		'name'          => __( 'Right Post Sidebar', 'text_domain' ),
    		'description'   => __( 'Right sidebar for posts', 'text_domain' ),
    		'before_widget' => '<div id="%1$s">',
    		'after_widget'  => '</div>',
    		);
    	register_sidebar( $args );

    	$args = array(
    		'id'            => 'contact_sidebar',
    		'class'         => 'sidebar-contact',
    		'name'          => __( 'Right Contact Sidebar', 'text_domain' ),
    		'description'   => __( 'Right sidebar for Contact Page', 'text_domain' ),
    		'before_widget' => '<div id="%1$s">',
    		'after_widget'  => '</div>',
    		);
    	register_sidebar( $args );


    	$args = array(
    		'id'            => 'news_sidebar',
    		'class'         => 'news-contact',
    		'name'          => __( 'Right News Sidebar', 'text_domain' ),
    		'description'   => __( 'Right sidebar for Proficio News', 'text_domain' ),
    		'before_widget' => '<div id="%1$s">',
    		'after_widget'  => '</div>',
    		);
    	register_sidebar( $args );

    }
    add_action( 'widgets_init', 'custom_sidebars' );

    function limit_words($string, $word_limit) {

	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character

    	$words = explode(' ', $string);

	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character

    	return implode(' ', array_slice($words, 0, $word_limit));

    }



// Add Shortcode
    function my_recent_post()
    {

    	ob_start();
    	?>
    	<div class="custom-recent-posts">

    		<h4 class="post-title">Recent Posts</h4>

    		<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

    		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    			<div class="row" style="margin-bottom: 40px;">

    				<?php if ( has_post_thumbnail() ) { ?>

    				<div class="col-md-5" class="post-thumbnails"><a href="<?php the_permalink() ?>"><?php  the_post_thumbnail('thumbnail'); ?></a></div>

    				<?php } ?>
    				<div class="col-md-7"><?php echo limit_words(get_the_excerpt(), '20'); ?></div>

    			</div>
    			<?php 
    			endwhile;
    			wp_reset_postdata();
    			?>
    		</div>
    		<?php
    		return ob_get_clean();

    	}
    	add_shortcode( 'recent', 'my_recent_post' );


    	add_filter('widget_text','do_shortcode');


 //GET SUBMENU OF AN ITEM FROM THE MENU

    	add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );

    	function submenu_limit( $items, $args ) {

    		if ( empty($args->submenu) )
    			return $items;

    		$parent_id = array_pop( wp_filter_object_list( $items, array( 'title' => $args->submenu, 'post_parent' => 0 ), 'and', 'ID' ) );
    		$children  = submenu_get_children_ids( $parent_id, $items );

    		foreach ( $items as $key => $item ) {

    			if ( ! in_array( $item->ID, $children ) )
    				unset($items[$key]);
    		}

    		return $items;
    	}

    	function submenu_get_children_ids( $id, $items ) {

    		$ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );

    		foreach ( $ids as $id ) {

    			$ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
    		}

    		return $ids;
    	}


// Register Sidebars
    	function footer_sidebars() {

    		$args = array(
    			'id'            => 'sidebar-footer1',
    			'class'         => 'footer1',
    			'name'          => __( 'Footer 1', 'text_domain' ),
    			'description'   => __( 'Footer 1 Content', 'text_domain' ),
    			'before_widget' => '<nav class="footer-nav">',
    			'after_widget'  => '</nav>',
    			);
    		register_sidebar( $args );

    		$args = array(
    			'id'            => 'sidebar-footer2',
    			'class'         => 'footer2',
    			'name'          => __( 'Footer 2', 'text_domain' ),
    			'description'   => __( 'Footer 2 Content', 'text_domain' ),
    			'before_widget' => '<nav class="footer-nav">',
    			'after_widget'  => '</nav>',
    			);
    		register_sidebar( $args );

    		$args = array(
    			'id'            => 'sidebar-footer3',
    			'class'         => 'footer3',
    			'name'          => __( 'Footer 3', 'text_domain' ),
    			'description'   => __( 'Footer 3 Content', 'text_domain' ),
    			'before_widget' => '<div class="geo-nav">',
    			'after_widget'  => '</div>',
    			);
    		register_sidebar( $args );

    	}
    	add_action( 'widgets_init', 'footer_sidebars' );

      function pre_footer_shortcode( $atts ) {
    // Attributes
        $atts = shortcode_atts(
          array(
            'url' => '',
            ),
          $atts
          );


      

        $html .= '<div class="modal fade" tabindex="-1" role="dialog" id="pre-footer-modal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">';

                if (strpos(esc_attr($atts['url']), "/wp-content/") !== false ) {

                  $html .= '<video width="100%" height="440" controls>
                            <source src="'. esc_attr($atts['url']) .'" type="video/mp4">
                          </video>';

        }else{
          $html .= ' <iframe width="100%" height="400" src="' . esc_attr($atts['url']) . '" frameborder="0" allowfullscreen></iframe>';
        }

          $html .= '</div>

            </div>
          </div>
        </div>';

        return $html;






      }
      add_shortcode( 'pre-footer-video', 'pre_footer_shortcode' );

      function modal_embed_shortcode(){
        ob_start();
        ?>
        <div id="modal-embed" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button></div>
              <div class="modal-body"><script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
                <script>MktoForms2.whenReady(function (form){
                  form.onSuccess(function(values, followUpUrl){
                    form.getFormElem().hide();
                    document.getElementById('confirmform').style.visibility = 'visible';
                    window.open(followUpUrl, '_blank');
                    return false;
                  });
                });
              </script>
              <div id="confirmform">

                Thank you for your interest in our case study, your download will begin momentarily.

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php

      return ob_get_clean();
    }


    add_shortcode( 'modal-embed', 'modal_embed_shortcode' );


// Maps Shortcode
    function map_america_shortcode() {
      ob_start();
      ?> 



      <div class="map-proficio" id="map"></div>


      <?php
      return ob_get_clean();


    }
    add_shortcode( 'america-map', 'map_america_shortcode' );

    function map_america_clone_shortcode() {
      ob_start();
      ?> 



      <div class="map-proficio" id="map-eu"></div>


      <?php
      return ob_get_clean();


    }
    add_shortcode( 'america-map-clone', 'map_america_clone_shortcode' );


    function map_america_emea_shortcode() {
      ob_start();
      ?> 



      <div class="map-proficio" id="map-emea"></div>


      <?php
      return ob_get_clean();


    }
    add_shortcode( 'america-map-emea', 'map_america_emea_shortcode' );

    function map_atlanta_shortcode() {
      ob_start();
      ?> 



      <div class="map-proficio" id="map-atlanta"></div>


      <?php
      return ob_get_clean();


    }
    add_shortcode( 'map-atlanta', 'map_atlanta_shortcode' );

     function map_hong_shortcode() {
      ob_start();
      ?> 



      <div class="map-proficio" id="map-hong"></div>


      <?php
      return ob_get_clean();


    }
    add_shortcode( 'map-hong-kong', 'map_hong_shortcode' );


// PROFICIO NEWS
    function proficio_news_post_type() {

      $labels = array(
       'name'                  => _x( 'Proficio News', 'Post Type General Name', 'text_domain' ),
       'singular_name'         => _x( 'Proficio New', 'Post Type Singular Name', 'text_domain' ),
       'menu_name'             => __( 'Proficio News', 'text_domain' ),
       'name_admin_bar'        => __( 'Proficio News', 'text_domain' ),
       'archives'              => __( 'Proficio News Archives', 'text_domain' ),
       'attributes'            => __( 'Proficio News Attributes', 'text_domain' ),
       'parent_item_colon'     => __( 'Parent Proficio News:', 'text_domain' ),
       'all_items'             => __( 'All Proficio News', 'text_domain' ),
       'add_new_item'          => __( 'Add New Proficio New', 'text_domain' ),
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
     $rewrite = array(
    'slug'                  => 'news',
    'with_front'            => false,
    'pages'                 => false,
    'feeds'                 => false,
  );
      $args = array(
       'label'                 => __( 'Proficio New', 'text_domain' ),
       'description'           => __( 'Custom Post Type for Proficio News', 'text_domain' ),
       'labels'                => $labels,
       'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
       'taxonomies'            => false,
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
      'rewrite'               => $rewrite,
       'capability_type'       => 'page',
       'menu_icon'				=> 'dashicons-welcome-widgets-menus',
       );
      register_post_type( 'news', $args );

    }
    add_action( 'init', 'proficio_news_post_type', 0 );

    function fn_sitemap_shortcode() {
      return 
      wp_list_pages( array( 'title_li' => '<a href="https://proficio.wpengine.com">' . __('HomePage') . '</a>' ) );
    }
    add_shortcode('sitemap_shortcode', 'fn_sitemap_shortcode');


    function proficio_pagination(){
      global $wp_query; 
      echo paginate_links();
    }


    function proficio_numeric_posts_nav() {

      if( is_singular() )
       return;

     global $wp_query;

     /** Stop execution if there's only 1 page */
     if( $wp_query->max_num_pages <= 1 )
       return;

     $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
     $max   = intval( $wp_query->max_num_pages );

     /**	Add current page to the array */
     if ( $paged >= 1 )
       $links[] = $paged;

     /**	Add the pages around the current page to the array */
     if ( $paged >= 3 ) {
       $links[] = $paged - 1;
       $links[] = $paged - 2;
     }

     if ( ( $paged + 2 ) <= $max ) {
       $links[] = $paged + 2;
       $links[] = $paged + 1;
     }

     echo '<div class="navigation"><ul>' . "\n";

     /**	Previous Post Link */
     if ( get_previous_posts_link() )
       printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

     /**	Link to first page, plus ellipses if necessary */
     if ( ! in_array( 1, $links ) ) {
       $class = 1 == $paged ? ' class="active"' : '';

       printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

       if ( ! in_array( 2, $links ) )
        echo '<li>…</li>';
    }

    /**	Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
     $class = $paged == $link ? ' class="active"' : '';
     printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
   }

   /**	Link to last page, plus ellipses if necessary */
   if ( ! in_array( $max, $links ) ) {
     if ( ! in_array( $max - 1, $links ) )
      echo '<li>…</li>' . "\n";

    $class = $paged == $max ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }

  /**	Next Post Link */
  if ( get_next_posts_link() )
   printf( '<li>%s</li>' . "\n", get_next_posts_link() );

 echo '</ul></div>' . "\n";

}


add_action( 'wp_dashboard_setup', 'my_dashboard_setup_function' );

function my_dashboard_setup_function() {
        add_meta_box( 'my_dashboard_widget', 'Proficio Shortcodes', 'my_dashboard_widget_function', 'dashboard', 'side', 'high' );
}
function my_dashboard_widget_function() {
        echo '[customer-logos] => Display Client Logos Carousel <br> [quotes-slider] => Display Client Testimonial slider Section <br> [pre-footer-video url="video url to embed"] => Display Video Section';
}



function quotes_post_type() {

  $labels = array(
    'name'                  => _x( 'Quotes', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Quote', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Quotes', 'text_domain' ),
    'name_admin_bar'        => __( 'Quotes', 'text_domain' ),
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
    'label'                 => __( 'Quote', 'text_domain' ),
    'description'           => __( 'Post Type for Quotes', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array('thumbnail' ),
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
    'menu_icon'             => 'dashicons-format-quote',
    'capability_type'       => 'page',
    );
  register_post_type( 'quotes', $args );

}
add_action( 'init', 'quotes_post_type', 0 );


function quotes_shortcode() {
  ob_start();
  include('inc/quotes.php');    
  return ob_get_clean();   
} 
add_shortcode( 'quotes-slider', 'quotes_shortcode' );



function customer_slide_shortcode() {
  ob_start();
  include('inc/customer-slider.php');    
  return ob_get_clean();   
} 
add_shortcode( 'customer-logos', 'customer_slide_shortcode' );


function filter_post_link($permalink, $post) {
    if ($post->post_type != 'news')
        return $permalink;
    return 'blog'.$permalink;
}
add_filter('pre_post_link', 'filter_post_link', 10, 2);


add_action( 'generate_rewrite_rules', 'add_blog_rewrites' );
function add_blog_rewrites( $wp_rewrite ) {
    $wp_rewrite->rules = array(
        'blog/([^/]+)/?$' => 'index.php?name=$matches[1]',
        'blog/[^/]+/attachment/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
        'blog/[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
        'blog/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
        'blog/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
        'blog/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
        'blog/([^/]+)/trackback/?$' => 'index.php?name=$matches[1]&tb=1',
        'blog/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?name=$matches[1]&feed=$matches[2]',
        'blog/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?name=$matches[1]&feed=$matches[2]',
        'blog/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?name=$matches[1]&paged=$matches[2]',
        'blog/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?name=$matches[1]&cpage=$matches[2]',
        'blog/([^/]+)(/[0-9]+)?/?$' => 'index.php?name=$matches[1]&page=$matches[2]',
        'blog/[^/]+/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
        'blog/[^/]+/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
        'blog/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
        'blog/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
        'blog/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
    ) + $wp_rewrite->rules;
}


//REDIRECT SIGNATURES

add_action ('wp_loaded', 'my_redirect_function');

function my_redirect_function() {
    $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$titan = TitanFramework::getInstance( 'proficio' );
    
    $signature1 = $titan->getOption('signature1');
    $signature2 = $titan->getOption('signature2');

    $signature3 = $titan->getOption('signature3');
    $signature4 = $titan->getOption('signature4');
    $signature5 = $titan->getOption('signature5');
    $signature6 = $titan->getOption('signature6');


if (strpos($url,'signature1') !== false) {
    wp_redirect($signature1);
    exit;
} elseif (strpos($url,'signature2') !== false) {
  wp_redirect($signature2);
    exit;
} elseif (strpos($url,'signature3') !== false) {
 wp_redirect($signature3);
    exit;
}elseif (strpos($url,'signature4') !== false) {
 wp_redirect($signature4);
    exit;
} elseif (strpos($url,'signature5') !== false) {
 wp_redirect($signature5);
    exit;
} elseif (strpos($url,'signature6') !== false) {
  wp_redirect($signature6);
    exit;
}  

    
}



function fyf_shortcode() {
  ob_start(); ?>
     <hr />
  <div class="free-offer">
    <div class="container">
        <h4>Limited Time Offer</h4>
        <h1>First Year <span style="color: #fff;">Free</span></h1>
        <h2>World Class Cybersecurity Services</h2>
        <a class="btn btn-primary btn-xl" href="/first-year-free/" >Learn more</a>
    </div>
  </div>
  <hr>

  <?php return ob_get_clean();

}
add_shortcode( 'fyf_pod', 'fyf_shortcode' );