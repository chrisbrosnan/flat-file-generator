<?php 
/*
Plugin Name: Flat File Generator
Plugin URI: https://chrisbrosnan.me
Description: A WordPress plugin that allows you to export post, content, and site options data as flat files
Version: 1.0.0
Author: Chris Brosnan
Author URI: https://chrisbrosnan.me
Text Domain: flat-file-generator
*/

function addMenu()
{

    add_menu_page( 
        'Flat File Generator Options', 
        'Flat File Generator', 
        'manage_options', 
        'flat-file-generator', 
        'flatfilegeneratorUi'
    );

}
add_action('admin_menu', 'addMenu');

// // Set Constants

// define('FFG_PATH', plugin_dir_path( __FILE__ ));

// class FlatFileGenerator
// {

//     function runPlugin()
//     {

//         // Include Core File

//         include( FFG_PATH . 'classes/Core.php');

//         $core = new Core;

//         $core->activate($path); 

//     }

// }

// function runPlugin()
// {
//     $path = FFG_PATH;
//     $ffg = new FlatFileGenerator;
//     $ffg->runPlugin($path); 
// }

// runPlugin();