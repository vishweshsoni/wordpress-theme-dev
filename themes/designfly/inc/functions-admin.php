<?php
/**
 * @package designfly
 * ==================
 *  Admin Page
 * ==================
 */

function admin_add_page()
{
    /**
     * below function will add menupage to the custom  theme
     * Page name: Designfly
     * Slug Name: designfly_page
     */
    add_menu_page(
        'Desginfly Options', //page title
        'Designfly', //menu title
        'manage_options', //capabillity
        'designfly_page', //menuslug
        'admin_page_creation', //callback
        'dashicons-admin-customizer', //icon
        110);
    /**
     * below function will add menupage to the custom  theme
     * Page name: Designfly
     * Slug Name: designfly_page
     */
    add_submenu_page(
        'designfly_page', //parent slug
        'Designfly Menu Title', //page title
        'Designfly Settings', //menu title
        'manage_options', //capabillity
        'designfluy_submenu_page', //submenu slug[aka:menu slug]
        'submenu_page_creation' //callback function
    );
}
function admin_page_creation()
{
    //genration of our admin page
}
add_action('admin_menu', 'admin_add_page');

function submenu_page_creation(){

}