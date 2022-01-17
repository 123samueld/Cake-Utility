<?php

include "includes/autoloader.inc.php";
/*

Props:
    Current Day
    Work Day
    Day Off
    Birthday
    Employee Name
    Cake Day
    Adjusted Cake Day
    Cake Free Day
    Cupcake Day
    Large Cake Day
    Employee Dictionary(Associative Array) with:
        Employee Name, Birthday, Day Off, Cake Day, Adjusted Cake Day


Planning Skeleton:
    +++ Parent Class
    open and read files
    split each employee's data and birthday to create Employee Dictionary
    +++ Child 1st Class
    iterate through each day of the year:
        create list of work days accounting for non Work Days
        if (iterate through Employee Dictionary[Birthday]) not in Work Day:
            assign Day Off to next Work Day
            assign Cake Day to day after next Work Day
        else:
            assign Day Off to Work Day
            assign Cake Day to next Work Day
    +++ Child 1st Class
    iterate through Emplpoyee Dictionary[Cake Day]:
            if 2 or more Cake Day(s) next to each other:
                if 3 or more Cake Day(s) next to earch other:
                    First Cake Day converted to Work Day
                    Large Cake Day assigned to second Cake Day
                    thrid Cake Day assigned to next Working Day
                else:
                    First Cake Day converted to Work Day
                    Large Cake Day assigned to second Cake Day
                    Cake Free Day assigned to day after Cake Day
            else:
                if 2 or more Cake Day(s) on same Working Day:
                    Large Cake Day assigned to Cake Day
                    Cake Free Day assigned to day after Cake Day
                else:    
                    Cupcake Day assigned to Cake Day
                    Cake Free Day assigned to day after Cake Day
            
    +++ Child 1st Class
    create CSV file with Employee Dictionary, each key is the name




    update the SVG file with cakeday's, num 'o cupcakes, num 'o large cakes, cake recipient names
*/
