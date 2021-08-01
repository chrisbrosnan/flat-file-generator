<?php 

class UI
{
    
    // include('Formats.php');
    // include('Data.php');

    // public $data = new Data; 
    // public $formats = new Formats; 

    public function optionsLayout($exportFormats)
    {
        $this->headerTitle(); 
        $this->optionsSpacer(); 
        $this->optionsForm($exportFormats); 
    }

    public function headerTitle()
    {
        echo '<h1>Flat File Generator</h1>';
    }

    public function optionsSpacer()
    {
        echo '<br/>';
    }

    public function optionsForm($exportFormats)
    {
        $o = '<p>Select a file format and content type or database table</p>'; 
        $o .= '<form action="admin.php" method="get">'; 
            $o .= '<input type="hidden" name="page" value="flat-file-generator">';
            $o .= '<input type="hidden" name="download" value="yes">';
            $o .= '<select name="file-format" style="width: 200px;">'; 
            $o .= '<option value="none">Select a file format</option>';
                    foreach($exportFormats as $key => $value)
                    {
                        $o .= '<option value="'.$value.'">'.$key.'</option>'; 
                    }
            $o .= '</select>';
            $o .= '<br/>'; 
            $o .= '<select name="content-type" style="width: 200px;">';
            $o .= '<option value="none">Select a data type</option>';
                    // foreach($data->dataTypes as $key => $value)
                    // {
                    //     $o .= '<option value="'.$value.'">'.$key.'</option>'; 
                    // }
            $o .= '</select>';
            $o .= '<br/>'; 
            $o .= '<input style="margin-top: 1em;" type="submit" value="Export">';
        $o .=  '</form>';
        echo $o;  
    }

}