<?php

class Cake_Day extends Employees{
#Props
    public $working_days;
    public $day_off;
    public $cake_day;
    public $name_and_day_off_array;
    public $name_and_cake_day_array;
#Mehtods
    public function Find_Day_Off(){
        $today = New DateTime;
        $day_counter = 365;
        for ($i = 0; $i < $day_counter; $i++){
            $date_interval = New DateInterval('P1D');
            date_add($today,$date_interval);
            if  (date_format($today,"l") == "Saturday"){
                echo "Day Off";
            }elseif(date_format($today,"l") == "Sunday"){
                echo "Day Off";
            }elseif(date_format($today,"m-d") == "12-25"){
                echo "Day Off";
            }elseif(date_format($today,"m-d") == "12-26"){
                echo "Day Off";
            }elseif(date_format($today,"m-d") == "01-01"){
                echo "Day Off";
            }else{
                echo date_format($today,"l Y-m-d");
            }
            echo "</br>";
        }
    }
    public function Find_Cake_Day(){
        
    }
    public function Create_Name_And_Cake_Day_Array(){
        
    }

}