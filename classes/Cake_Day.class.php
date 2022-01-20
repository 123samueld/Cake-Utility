<?php

class Cake_Day extends Employees{
#Props
    public $working_days = array();
    public $day_off;
    public $cake_day;
    public $name_and_day_off_array;
    public $name_and_cake_day_array;
#Mehtods
    public function Find_Day_Off(){
        $date = "Date";
        $today = New DateTime;
        $day_counter = 365;
        for ($i = 0; $i < $day_counter; $i++){
            $date_interval = New DateInterval('P1D');
            date_add($today,$date_interval);
            if  (date_format($today,"l") == "Saturday"){
                //pass
            }elseif(date_format($today,"l") == "Sunday"){
                //pass
            }elseif(date_format($today,"m-d") == "12-25"){
                //pass
            }elseif(date_format($today,"m-d") == "12-26"){
                //pass
            }elseif(date_format($today,"m-d") == "01-01"){
                //pass
            }else{
                $working_day = date_format($today,"Y-m-d");
                array_push($this->working_days, $working_day);
            }
        }
    }
/*
    public function Find_Cake_Day(){
        self::Create_Name_And_Birthday_Array();
        self::Find_Day_Off();
        $a = $this->name_and_birthday_array;
        $b = $this->working_days;
        for ($x = 0; $x <= 11; $x++){
            $d = $a[$x];
            print_r($a);
        }
    }
*/

    public function Find_Cake_Day(){
        #compare birthdays and working days
        #return dates that match
        #next working day after match is cake day
        self::Create_Name_And_Birthday_Array();
        print_r($this->name_and_birthday_array);


    }

    public function Name_And_Cake_Day_Assoc_Array(){
        #connect names to cake days. Probably assoc array?
    }

}