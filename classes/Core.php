<?php 

class Core
{

    public function activate($path)
    {

        // Exports 
        include('Formats.php');
        include('Options.php');

        // Interface
        include('UI.php');

    }

}