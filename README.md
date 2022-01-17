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

    class Employees_And_Cakes()
    Establish props:
        Work Day
        Employee Dictionary with:
            Employee Name, Birthday, Day Off
        Cake Day Dictionary with:
            Employee Name(s), Cake Day, Cupcake, Large Cake
        Cake Free Day

    
    class Build_Employee_Dictionary(Employee_Dictionary)
        readfile(employee sample file)
        split() each employee's data and birthday to create Employee Dictionary


    class Day_Off_And_Cake_Day(Work_Day, Cake_Day_Dictionary, Employee_Dictionary)
    iterate through each day of the year:
        build array of work days accounting for non Work Days
        if (iterate through Employee Dictionary[Birthday]) not in Work Day:
            assign Day Off to next Work Day
            assign Cake Day to day after next Work Day
        else:
            assign Day Off to Work Day
            assign Cake Day to next Work Day

   class Sorting_Algorithm(Cake Day_Dictionary, Employee_Dictionary)
    iterate through Emplpoyee Dictionary[Cake Day]:
            if 2 or more Cake Day(s) next to each other:
                if 3 or more Cake Day(s) next to earch other:
                    first Cake Day converted to Work Day
                    second Cake Day Large Cake TRUE
                    third Cake Day converted to Cake Free Day and
                    thrid Cake Day assigned to next Work Day
                else:
                    first Cake Day converted to Work Day
                    second Cake Day Large Cake TRUE
                    third day converted to Cake Free Day
            else:
                if 2 or more Cake Day(s) on same Working Day:
                    Large Cake assigned to Cake Day
                    second day converted to Cake Free Day
                else:    
                    Cupcake assigned to Cake Day
                    second day converted to Cake Free Day
            
    class Output_Cake_Day_Dictionary(Cake_Day_Dictionary)
    iterate through Cake Day Dictionary:
        fputcsv() as Cake Day, Cupcake, Large Cake, Employee Name(s)


