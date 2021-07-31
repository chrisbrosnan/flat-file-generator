<?php 

class UI
{

    public function optionsLayout()
    {
        $this->headerTitle(); 
        $this->optionsSpacer(); 
    }

    public function headerTitle()
    {
        echo '<h1>Flat File Generator</h1>';
    }

    public function optionsSpacer()
    {
        echo '<br/>';
    }

}