<?php 

class UI
{

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

}

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

function flatfilegeneratorUi()
{

    //

}