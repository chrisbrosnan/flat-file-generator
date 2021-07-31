<?php 

class UI
{

    public function optionsLayout()
    {
        $this->headerTitle(); 
        $this->optionsSpacer(); 
        $this->optionsForm(); 
    }

    public function headerTitle()
    {
        echo '<h1>Flat File Generator</h1>';
    }

    public function optionsSpacer()
    {
        echo '<br/>';
    }

    public function optionsForm()
    {
        echo '<p>Select a file format and content type</p>'; 
        echo '<form>'; 
            echo '<select name="file-format">
                    <option>JSON</option>
                    <option>CSV</option>
                </select><br/>'; 
                echo '<input type="submit" value="Export">';
        echo '</form>'; 
    }

}