# Cake-Utility

## Setup:
I'd never ran PHP from the command line and it was giving me some trouble. I felt it wasn't the core subject of the challenge so I skipped it to save time and effort. I'm running the app using Laragon WAMP. It should be possible to run the app with WAMP/XAMP and probably Docker. Alternativly I can strongly reccomend Laragon for it's blisteringly fast setup time (10 mins start to finish).

## Thoughts about this app:
I've not done Unit Testing before, although I'm aware of the concept. I think during a technical test is not the time to learn test driven development, but it's a best-practice I'm eager to learn.

## Possible Error & Bug:
### Possible Error:
It appears there's an error in the question. In summary it says "output in format: num of small cakes, num of large cakes etc". It doesn't state whether it's num of cakes per year or per day. The last rule is "no more than one cake per day". This could suggest more than one cake per day and creates a diffusion of clarity. I'm going to follow the format laid out by the examples which is 1 cake per diam.

### Possible Bug:
If there are like +4 Cake Days in a row that would likely cause overlap between Cake Days and Cake Free Days. It would be easy to add more layres to the algorithm to provide deeper solving power. 

## Week log
### Day 1 Friday
Setting up the project, Laravel, Github and built the class autoloader
### Day 2 Saturday
First architecture iteration, attemping to solve the problem in the planning stage before writing code
### Day 3 Sunday
Rest day
### Day 4 Monday
Second architecture iteration, improved problem solving.
### Day 5 Tuesday
Third architecture iteration, improved problem solving. Created class Employees.
### Day 6 Wednesday
Created class Cake_Day, first method. Got stuck trying to solve second method: Find_Cake_Day(). Struggling to intersect values between employee data array and array of working days.
### Day 7 Thursday
Still stuck trying to solve intersection between employee data and working days. Made breakthrough in array building at 1800, exhasted, out of time to complete the test.