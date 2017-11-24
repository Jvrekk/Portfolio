<?php
	function js_portfolio(){
		//css
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array(), '4.0', 'all');
		wp_enqueue_style('customstyle', get_template_directory_uri() . '/styles/style.css', array(), '1.0', 'all');
		
		//js
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true);
		wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.29', true);
		wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0', true);
		wp_enqueue_script('customjs', get_template_directory_uri() . '/js/index.js', array(), '1.0', true);
	}
	add_action('wp_enqueue_scripts', 'js_portfolio');


	function js_theme_setup(){
		add_theme_support('menus');
		register_nav_menu('main', 'Main menu of page');
		register_nav_menu('footer', 'Menu in the footer');
		register_nav_menu('footer-2', 'Second menu in the footer');
	}
	add_action('init', 'js_theme_setup');

	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('aside','image','video'));

	function jS_remove_version(){
		return '';
	}
	add_filter('the_generator', 'jS_remove_version');

	// Remove WP Version From Styles	
	add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
	// Remove WP Version From Scripts
	add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

	// Function to remove version numbers
	function sdt_remove_ver_css_js( $src ) {
		if ( strpos( $src, 'ver=' ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
	
	
	require get_template_directory() . '/bootstrap-navwalker.php';
	
