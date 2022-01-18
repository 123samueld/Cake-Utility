<?php

class Employees{
#Props
    public $file_name = "Sample_data_set.txt";    
    public $handle;
    public $sample_data_set;
    public $name_and_birthday_array = array();
#Methods
    public function Create_Name_And_Birthday_Array(){
        $this->handle = fopen($this->file_name, "r");
        $this->sample_data_set = fread($this->handle, filesize($this->file_name));
        fclose($this->handle);
        $this->name_and_birthday_array = explode("\n", $this->sample_data_set);
        var_dump($this->name_and_birthday_array[1]);
    }
}