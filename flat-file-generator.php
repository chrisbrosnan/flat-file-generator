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

function flatfilegeneratorUI()
{
    // $dataTypes = new Data; 
    // $fileFormats = new Formats; 
    // $exportFormats = $fileFormats->exportFormats();
    // $dataTypesArray = $dataTypes->getDataTypes(); 
    // $ui = new UI; 
    // $ui->optionsLayout($exportFormats, $dataTypesArray); 
?>
// check user capabilities
  if ( ! current_user_can( 'manage_options' ) ) {
    return;
  }

  //Get the active tab from the $_GET param
  $default_tab = null;
  $tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;

  ?>
  <!-- Our admin page content should all be inside .wrap -->
  <div class="wrap">
    <!-- Print the page title -->
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    <!-- Here are our tabs -->
    <nav class="nav-tab-wrapper">
      <a href="?page=my-plugin" class="nav-tab <?php if($tab===null):?>nav-tab-active<?php endif; ?>">Default Tab</a>
      <a href="?page=my-plugin&tab=settings" class="nav-tab <?php if($tab==='settings'):?>nav-tab-active<?php endif; ?>">Settings</a>
      <a href="?page=my-plugin&tab=tools" class="nav-tab <?php if($tab==='tools'):?>nav-tab-active<?php endif; ?>">Tools</a>
    </nav>

    <div class="tab-content">
    <?php switch($tab) :
      case 'settings':
        echo 'Settings'; //Put your HTML here
        break;
      case 'tools':
        echo 'Tools';
        break;
      default:
        echo 'Default tab';
        break;
    endswitch; ?>
    </div>
  </div>
<?php
}