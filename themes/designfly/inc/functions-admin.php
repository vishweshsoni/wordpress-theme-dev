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

    //add submenu page called designfly settings
    add_submenu_page(
        'designfly_page', //parent slug
        'Designfly Menu Title', //page title
        'Designfly Settings', //menu title
        'manage_options', //capabillity
        'designfly_submenu_page', //submenu slug[aka:menu slug]
        'submenu_page_creation' //callback function
    );

    /**
     *activation of custom settings
     */
    add_action('admin_init', 'desginfly_custom_setttings');

}
function admin_page_creation()
{
    //it will genrate content for the admin page from ,
    //directory: /inc/templates/designfly-admin.php
    require_once get_template_directory() . '/inc/templates/designfly-admin.php';

}
add_action('admin_menu', 'admin_add_page');

function submenu_page_creation()
{

}

/**
 * function callback for settings register_settings
 */
function desginfly_custom_setttings()
{
    register_setting(
        'designfly-settings-group', //db field
        'first_title' //
    );
    register_setting(
        'designfly-settings-group', //db field
        'first_title_description' //
    );

    register_setting(
        'designfly-settings-group', //db field
        'second_title' //
    );
    register_setting(
        'designfly-settings-group', //db field
        'second_title_description' //
    );

    register_setting(
        'designfly-settings-group', //db field
        'third_title' //
    );
    register_setting(
        'designfly-settings-group', //db field
        'third_title_description' //
    );
    add_settings_section(
        'designfly_cover_texts', //id,
        'Designfly cover text titles', //title,
        'designfly_cover_text_options', //callback
        'designfly_page' // page
    );

    add_settings_field(
        'first-text', //id,
        'First cover text', // title,
        'first_title_callback', // callback,
        'designfly_page', //page,
        'designfly_cover_texts'
    );

    add_settings_field(
        'first-text-description', //id,
        'First cover text Description', // title,
        'first_title_description_callback', // callback,
        'designfly_page', //page,
        'designfly_cover_texts'
    );
    add_settings_field(
        'second-text', //id,
        'Second cover text', // title,
        'second_title_callback', // callback,
        'designfly_page', //page,
        'designfly_cover_texts'
    );

    add_settings_field(
        'second-text-description', //id,
        'Second cover text Description', // title,
        'second_title_description_callback', // callback,
        'designfly_page', //page,
        'designfly_cover_texts'
    );

    add_settings_field(
        'third-text', //id,
        'Third cover text', // title,
        'third_title_callback', // callback,
        'designfly_page', //page,
        'designfly_cover_texts'
    );

    add_settings_field(
        'third-text-description', //id,
        'Third cover text Description', // title,
        'third_title_description_callback', // callback,
        'designfly_page', //page,
        'designfly_cover_texts'
    );
}
function designfly_cover_text_options()
{
    echo "customize your area";
}

//callback function for first title
function first_title_callback()
{
    $first_title_text=esc_attr(get_option('first_title'));  
    echo '<input type="text" name="first_title" value="'.$first_title_text.'"placeholder="First Text" />';
}

function first_title_description_callback(){
    $first_title_desc=esc_attr(get_option('first_title_description')); 
    echo '<input type="text" name="first_title_description" value="'.$first_title_desc.'"placeholder="First Title description" />';
}


function second_title_callback()
{
    $second_title_text=esc_attr(get_option('second_title'));  
    echo '<input type="text" name="second_title" value="'.$second_title_text.'"placeholder="Second Text" />';
}

function second_title_description_callback(){
    $second_title_desc=esc_attr(get_option('second_title_description')); 
    echo '<input type="text" name="second_title_description" value="'.$second_title_desc.'"placeholder="Second Title description" />';
}


function third_title_callback()
{
    $third_title_text=esc_attr(get_option('third_title'));  
    echo '<input type="text" name="third_title" value="'.$third_title_text.'"placeholder="Third Text" />';
}

function third_title_description_callback(){
    $third_title_desc=esc_attr(get_option('third_title_description')); 
    echo '<input type="text" name="third_title_description" value="'.$third_title_desc.'"placeholder="Third Title description" />';
}