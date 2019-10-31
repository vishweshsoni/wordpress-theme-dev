<?php
/**
 * @package designfly
 * ==================
 *  Admin Page
 * ==================
 */

$options= get_option('post_formats');
$formats = array('aside','gallery','link','video','image','quotes','chat');
$output=array();
foreach($formats as $format){
  $output[]= (@$options[$format]==1 ? $format: ''); 
}
if(!empty($options)){
        add_theme_support('post_formats', $output);
}
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 400,
		'width'       => 400,
    'flex-width' => true,
    'flex-height'=>true,
    'header-text' => array( 'site-title', 'site-description' ),

	) ) ;

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

/***
 * adding Navigation menus
 * 
 */
function add_nav_menus(){ 
    register_nav_menu( 'primary-menu', __('Primary Menu') );
}
add_action('after_setup_theme','add_nav_menus');