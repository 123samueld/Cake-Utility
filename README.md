# Cake-Utility

Setup:
    I'd never ran PHP from the command line and it was giving me some trouble. I felt it wasn't the core subject of the challenge so I skipped it to save time and effort. I'm running the app using Laragon WAMP. It should be possible to run the app with WAMP/XAMP and probably Docker. Alternativly I can strongly reccomend Laragon for it's blisteringly fast setup time (10 mins start to finish).

Thoughts about this app:
    I've not done Unit Testing before, although I'm aware of the concept. I think during a technical test is not the time to learn test driven development, but it's a best-practice I'm eager to learn.

Possible Error & Bug:
    Possible Error:
        It appears there's an error in the question. In summary it says "output in format: num of small cakes, num of large cakes etc". It doesn't state wether it's num of cakes per year or per day. The last rule is "no more than one cake per day". This creates a lack of clarity. I'm going to follow the format laid out by the examples which is per diam.

    Possible Bug:
        If there are like +4 Cake Days in a row that would likely cause overlap betweek Cake Days and Cake Free Days, probably more overlap. It would be easy to add more layres to the algorithm to handle the issue. 

This is the plan for the app:


Skeleton:

    class Employee
        props
            name
            birthday date
        method
            Create_Employee
                split() sample file into name and date
                return name and date

    class Cake_Day
        props 
            name 
            birthday date
            day off
            cake day date
        methods
            Find_Day_Off
                filter out non-work days
                reference birthday date with work days
                return day off
            Find_Cake_Day
                reference day off plus 1 with work days
                return name and cake day date

    class Adjusted_Cake_Day
        props 
            name
            cake day date
            cupcake
            large cake
        methods
            Sort_Exceptions_For_Adjusted_Cake_Day_Date
                return name(s) Cake_Day_Date
            Sort_Exceptions_For_Cake_Type
                return cupcake/large cake 

    class Create_CSV_File
        props
            name
            cake day date
            cupcake
            large cake
        methods
            Write_To_CSV_File
                fputcsv() as name(s), cake day date, cupcake, large cake

iterate through sample file:
    for each employee, instantiate Create_CSV_File 


