<?php 
/*

<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
 
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="libraries/lib.css">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">			
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
	<link rel="stylesheet" type="text/css" href="css/shortcode.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	
	
	<!-- Library - Js -->
	<script src="libraries/lib.js"></script>
	
	<script src="libraries/jquery.countdown.min.js"></script>
	
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>

	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
	
	
	
	
*/

function maxshop_style_and_scripts(){
	wp_register_style('maxshopgooglefonts', 'https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', array(), '1.0', 'all' );
	wp_register_style('settings', THEME_URI.'/revolution/css/settings.css', array(), '1.0', 'all' );
	wp_register_style('layers', THEME_URI.'/revolution/css/layers.css', array(), '1.0', 'all'  );
	wp_register_style('navigation', THEME_URI.'/revolution/css/navigation.css', array(), '1.0', 'all'  );
	wp_register_style('lib.css', THEME_URI.'/libraries/lib.css', array(), '1.0', 'all'  );
	wp_register_style('plugins.css', THEME_URI.'/css/plugins.css', array(), '1.0', 'all'  );
	wp_register_style('navigation-menu', THEME_URI.'/css/navigation-menu.css', array(), '1.0', 'all'  );
	wp_register_style('shortcode', THEME_URI.'/css/shortcode.css', array(), '1.0', 'all'  );
	wp_register_style('maxshop-style', THEME_URI.'/style.css', array(), '1.0', 'all'  );
		
	wp_enqueue_style('maxshopgooglefonts');
	wp_enqueue_style('settings');
	wp_enqueue_style('layers');
	wp_enqueue_style('navigation');
	wp_enqueue_style('lib.css');
	wp_enqueue_style('plugins.css');
	wp_enqueue_style('navigation-menu');
	wp_enqueue_style('shortcode');
	wp_enqueue_style('maxshop-style');
	
	//scripts
	wp_register_script('lib_js', THEME_URI.'/libraries/lib.js', array('jquery'), '1.0', true );
	wp_register_script('countdown_js', THEME_URI.'/libraries/jquery.countdown.min.js', array('jquery'), '1.0',  true  );	
	wp_register_script('themepunch_tools', THEME_URI.'/revolution/js/jquery.themepunch.tools.min.js?rev=5.0', array('jquery'), '1.0',  true  );	
	wp_register_script('themepunch_revolution', THEME_URI.'/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0', array('jquery'), '1.0',  true  );	
	wp_register_script('revolution_video', THEME_URI.'/revolution/js/extensions/revolution.extension.video.min.js', array('jquery'), '1.0',  true  );	
	wp_register_script('extension_slideanims', THEME_URI.'/revolution/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '1.0',  true  );	
	wp_register_script('layeranimation', THEME_URI.'/revolution/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '1.0',  true  );	
	wp_register_script('navigation_min_js', THEME_URI.'/revolution/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '1.0',  true  );	
	wp_register_script('actions', THEME_URI.'/revolution/js/extensions/revolution.extension.actions.min.js', array('jquery'), '1.0',  true  );	
	wp_register_script('function_maxshop', THEME_URI.'/js/functions.js', array('jquery'), '1.0',  true  );	
	
	wp_enqueue_script('lib_js');
	wp_enqueue_script('countdown_js');
	wp_enqueue_script('themepunch_tools');
	wp_enqueue_script('themepunch_revolution');
	wp_enqueue_script('revolution_video');
	wp_enqueue_script('extension_slideanims');
	wp_enqueue_script('layeranimation');
	wp_enqueue_script('navigation_min_js');
	wp_enqueue_script('actions');
	wp_enqueue_script('function_maxshop');
	
}