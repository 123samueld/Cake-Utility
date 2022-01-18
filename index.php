<?php

include "includes/autoloader.inc.php";

$first_emp = new Cake_Day();
echo $first_emp->Find_Day_Off();

/*
$todays_date = new DateTime;
$year_from_now = (new DateTime)->setISODate($todays_date->format('Y') + 1, $todays_date->format('W'));
$days_per_year = 365;
while(($todays_date < $year_from_now) and ($days_per_year >= 0)){
    echo $year_from_now->format('D Y-m-d').'<br />';
    $year_from_now->modify("1 day");
    $days_per_year -= 1;
}
*/


