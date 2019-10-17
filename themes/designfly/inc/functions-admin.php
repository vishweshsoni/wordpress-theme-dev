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
    // add_submenu_page(
    //     'designfly_page', //parent slug
    //     'Designfly Menu Title', //page title
    //     'Designfly Settings', //menu title
    //     'manage_options', //capabillity
    //     'designfly_submenu_page', //submenu slug[aka:menu slug]
    //     'submenu_page_creation' //callback function
    // );
    add_submenu_page(
            'designfly_page',//parent Slug
            'Theme Options',//page title
            'Theme Options',//menu title
            'manage_options',//capabillity
            'designfly_theme',//slug of page
            'designfly_submenu_options_callback'//callback function for the submenu
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

/**
 * submenu page callback function
 */
function submenu_page_creation()
{
    require_once get_template_directory().'/inc/templates/designfly-admin-settings.php';
}

/**
 * function callback for settings register_settings
 */
function desginfly_custom_setttings()
{  
    
    /**
     * Cover Page 
     * register setting for cover text and description
     * -: Cover text 1 , Cover text 1 Description
     * -: Cover text 2 , Cover text 2 Description
     * -: Cover text 3 , Cover text 3 Description
     */
    register_setting(
        'designfly-settings-group', //db field
        'profile_picture' //
    );
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

    /**
     * section for registered settings
     */
    add_settings_section(
        'designfly_cover_texts', //id,
        'Designfly cover text titles', //title,
        'designfly_cover_text_options', //callback
        'designfly_page' // page
    );

    /**
     * setting fields for 
     * -: Cover text 1 , Cover text 1 Description
     * -: Cover text 2 , Cover text 2 Description
     * -: Cover text 3 , Cover text 3 Description
     */
    add_settings_field(
        'cover-img', //id,
        'Cover Image', // title,
        'cover_image_callback', // callback,
        'designfly_page', //page,
        'designfly_cover_texts'
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
    register_setting(
        'designfly-theme-options', //db field
        'post_formats',
        'designfly_post_formats_callback'//
    );
    add_settings_section(
        'designfly-theme-options-section',//id
        'Theme options',
        'designfly_theme_options_callback_function',//callbackfunction
        'designfly_theme'
    );
    add_settings_field(
        'post-formats',//
        'Post Formats',//
        'designfly_post_formats_settings_callback',
        'designfly_theme',
        'designfly-theme-options-section'
    );    
    
    
    
}
function designfly_cover_text_options()
{
    echo "customize your area";
}

//callback function for image
function cover_image_callback(){
        $coveImg= esc_attr(get_option('profile_picture'));  
        echo '<input type="button" value="Upload Cover Photo" class="button button-secondary one" ><input type="hidden" id="profile-picture" name="profile_picture" value="'.$coveImg.'"/>';

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


/**
 * settings page functions
 */
function designfly_submenu_options_callback(){
    require_once get_template_directory().'/inc/templates/designfly-admin-settings.php';
}
function designfly_post_formats_callback($input){
    return $input;
}
function designfly_theme_options_callback_function(){
       echo 'Activate and deactivate  spacific theme';
}

function designfly_post_formats_settings_callback(){
      $formats = array('aside','gallery','link','video','image','quotes','chat');
      $output='';
      foreach($formats as $format){
        $output.='<label><input type="checkbox" id="'.$format.'" name="'.$format.'" value="1>'.$format.'</label><br>';
      }
      return $output;
}