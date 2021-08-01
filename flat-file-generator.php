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

// Set Constants

define('FFG_PATH', plugin_dir_path( __FILE__ ));

// Include Classes
include( FFG_PATH . 'classes/Core.php');
include( FFG_PATH . 'classes/Formats.php');
include( FFG_PATH . 'classes/Data.php');
include( FFG_PATH . 'classes/Options.php');
include( FFG_PATH . 'classes/UI.php');

$dataTypes = new Data; 
$fileFormats = new Formats; 
$exportFormats = $fileFormats->exportFormats();

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

function flatfilegeneratorUI($exportFormats)
{
    print_r($exportFormats); 
    $ui = new UI; 
    $ui->optionsLayout($exportFormats); 
}