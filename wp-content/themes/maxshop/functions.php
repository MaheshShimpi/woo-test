<?php 
/*
*	Constant 
*/
define('THEME_PATH', get_template_directory() );
define('THEME_URI', get_template_directory_uri() );





/*
*	includes 
*/

include(THEME_PATH.'/includes/front/enqueue.php');



/*
*	Hooks 
*/
add_action('wp_enqueue_scripts', 'maxshop_style_and_scripts');

/*
*	Shortcodes
*/


