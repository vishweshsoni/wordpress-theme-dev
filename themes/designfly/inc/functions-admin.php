<?php
/**
 * @package designfly
 * ==================
 *  Admin Page
 * ==================
 */

function admin_add_page()
{
    add_menu_page(
        'Desginfly Options', //page title
        'Designfly', //menu title
        'manage_options', //capabillity
        'designfly-page', //menuslug
        'admin_page_creation', //callback
        'dashicons-admin-customizer', //icon
        110);
}
function admin_page_creation()
{
    //genration of our admin page

}
add_action( 'admin_menu', 'admin_add_page');
