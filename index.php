<?php

include "includes/autoloader.inc.php";

/*
Planning Skeleton:
    open and read files
    split each employee's data and assign to name and birthday variables
    iterate through each day of the year:
        match birthdays to dates
            check calendar for working days (not weekends, christmas, boxing day or new years day)
            if birthday is not working day 
                add 1 to cakeday until date matches working day
                create dates with names
                if 3 cakedays in a row
                    push back 3rd cakeday by 1 day
                    if 2 cakeday in a row
                        no cake first day, large cake second day
                    if more than one name on same date
                        provide big cake for named employees on that date
            provide cupcake for named employee on that date
    update the SVG file with cakeday's, num 'o cupcakes, num 'o large cakes, cake recipient names
*/
