<?php 
/*
Plugin Name: CB Flat File Generator
Plugin URI: https://chrisbrosnan.me
Description: A WordPress plugin that allows you to export post, content, and site options data as flat files
Version: 1.0.0
Author: Chris Brosnan
Author URI: https://chrisbrosnan.me
Text Domain: flat-file-generator
*/

//include_once dirname( __FILE__ ) . '/classes/Core.php';
//include_once dirname( __FILE__ ) . '/classes/Formats.php';
//include_once dirname( __FILE__ ) . '/classes/Data.php';
//include_once dirname( __FILE__ ) . '/classes/Options.php';
//include_once dirname( __FILE__ ) . '/classes/UI.php';

function addMenu()
{

    add_menu_page( 
        'Flat File Generator Options', 
        'Flat File Generator', 
        'manage_options', 
        'flat-file-generator', 
        'initFFGenerator'
    );

}
add_action('admin_menu', 'addMenu');

if ( ! class_exists( 'Core' ) ) {
	include_once dirname( __FILE__ ) . '/classes/Core.php';
}

/**
 * Main Plugin Instance.
 *
 * @return Core
 */

function initFFGenerator()
{
	return Core::activate();
}