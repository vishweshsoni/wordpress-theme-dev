<?php
/**
 * @package designfly
 * ==================
 *  Admin Enqueu Functions
 * ==================
 */

/**
 * Description: includes script and register it
 */
function desginfly_load_admin_scripts($hook)
{
    
    if('toplevel_page_designfly_page'!=$hook){
        return;
    }
    wp_register_style(
        'designfly_admin', //      $handle:string,
        get_template_directory_uri() . '/css/designfly.admin.css', //$src:string|boolean,
        array(), //$deps:array,
        '1.0.0', //$ver:string|boolean|null,
        'all'//$media:string
    );
    wp_enqueue_style( 'designfly_admin');

    //include media
    // wp_enqueue_media();
    wp_enqueue_media();

    //include js
    wp_register_script(     
        'designfly_admin_script',
        get_template_directory_uri() . '/js/designfly.admin.js', //$src:string|boolean,
        array('jquery'), //$deps:array,
        '1.0.0', //$ver:string|boolean|null,
        true//$media:string
    );
    wp_enqueue_script( 'designfly_admin_script');
}

add_action('admin_enqueue_scripts','desginfly_load_admin_scripts');
