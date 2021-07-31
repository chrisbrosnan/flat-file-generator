<?php 

class Core
{

    public function activate($path)
    {

        // Exports 
        include('exports/Formats.php');
        include('exports/Options.php');

        // Interface
        include('exports/UI.php');

    }

}