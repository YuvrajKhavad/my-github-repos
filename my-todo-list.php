<?php
/**
 * Plugin Name: My GitHub Repos
 * Description: A simple widget plugin to show latest github repos
 * Version: 1.0
 * Author: Yuvraj Khavad
 *
 **/
// Exit if accessed directly
if(!defined('ABSPATH'))
{
    exit;
}

/**
 * Define Constants
 */
define('MGR_PLUGIN_PATH', plugin_dir_path(__FILE__).'/');
define('MGR_INCLUDES', MGR_PLUGIN_PATH .'includes/');

define('MGR_PLUGIN_URL', plugins_url().'/my-github-repos/');
define('MGR_URL_INCLUDES', MGR_PLUGIN_URL.'includes/');
define('MGR_PLUGIN_JS', MGR_PLUGIN_URL.'js/');
define('MGR_PLUGIN_CSS', MGR_PLUGIN_URL.'css/');

// Load scripts
//require_once(MGR_INCLUDES. 'my-todo-list-script.php');

// Load shortcodes
//require_once(MGR_INCLUDES. 'my-todo-list-shortcodes.php');

//check if admin
if(is_admin())
{
    // Load custome post type
    //require_once(MGR_INCLUDES. 'my-todo-list-cpt.php');

    // Load custome filed
    //require_once(MGR_INCLUDES. 'my-todo-list-field.php');
}
?>