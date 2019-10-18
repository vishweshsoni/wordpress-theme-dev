<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package designfly
 */ 

?>
<!DOCTYPE html>
<html <?php language_attributes();?> >
	
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if(is_singular() && pings_open(get_queried_object())): ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>">
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>


