<?php

class Employees{
#Props
    public $file_name = "Sample_data_set.txt";    
    public $handle;
    public $sample_data_set;
    public $name_and_birthday_array = array();
#Methods
    public function Create_Name_And_Birthday_Array(){
        $name_and_birthday_array_of_strings;
        $this->handle = fopen($this->file_name, "r");
        $this->sample_data_set = fread($this->handle, filesize($this->file_name));
        fclose($this->handle);
        $line_break = "\n";
        $comma = ",";
        $comma_seperated_data_set = str_replace($line_break,$comma,$this->sample_data_set);
        $this->name_and_birthday_array = explode(",", $comma_seperated_data_set);
    }
}