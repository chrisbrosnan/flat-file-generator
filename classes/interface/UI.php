<?php 

class UI
{

    function addMenu()
    {

        add_menu_page( 
            'Flat File Generator Options', 
            'Flat File Generator', 
            'manage_options', 
            'flat-file-generator'
        );

    }

}

function flatfilegeneratorUi()
{

    //

}