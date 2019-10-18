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
