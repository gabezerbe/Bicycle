# Bicycle
A programming challenge to create a Bicycle class, instantiate it and run it.

## Installation/Usage
clone this project to a directory of your choice with
``git clone git@github.com:gabezerbe/Bicycle.git``

run ``composer install`` in your terminal of choice while in the project directory

run ``php bin/console app:ride-bike`` to check out your new bike!

## Manual
The Bicycle class relies on a few component classes that contain information on parts such as the brakes, wheels, drivetrain etc.
You'll be totally fine just calling `new Bicycle()` however as its constructor has a default set up to produce a Trek bicycle for demonstration purposes.

Below you can find specifications on the classes and their parts.

### Bicycle Class
```php
//Include the Bicycle class and any of its component classes you might want to alter
use App\Service\Bicycle;
use App\Serivce\Wheels;

// Instantiate a new Bicycle
$bike = new Bicycle();

// Instantiate a new Bicycle with custom components
$bike = new Bicycle('Wide Seat', 'Cannondale', 'Polygon Premier 4', ...);

// Accessors
// The functions on the Bicycle class and its component classes can be accessed with arrow notation such as
$bike = new Bicycle();
return $bike->getWheels(); // This will return the Wheels object

$bike = new Bicycle();
return $bike->getWheels()->getTireSize(); // This will return the $tireSize of the Bicycle's Wheels class.

// Setters
$bike = new Bicycle();
$bike->setSeat("A new Seat"); // This will set the $seat variable of the Bicycle to a new string provided.

// Setting child objects
$bike = new Bicycle();
$wheels = new Wheels("Stainless Steel", true, 32) // Creates a new Stainless Steel, Tubeless, 32inch set of Wheels
$bike->setWheels($wheels) // This will set the Bicycle's wheels to the new $wheels Wheels object we just created

// Alternatively you can pass a new object constructor in as an argument as well
$bike->setWheels(new Wheels("Stainless Steel", true, 32));

//The same can be done with the other component classes of the Bicycle, read their class files to find out more!
```

### Riding the bike
```php
// While basic, you can actually peddle this bike!
// Create a new bike:

$bike = new Bicycle();
// Now call the peddleBike() function and pass it an integer
$bike->peddleBike(15);

// Peddling the bike will increase or decrease an integer value stored on the
// the bicycle class counting the number of times peddled. Depending on the positivity
// of the integer passed.

$bike->peddleBike(-5) // This will peddle you backwards 5 times and decreases the peddled integer as such
$bike->peddleBike(0) // This will do nothing, but is accounted for and will let you know you decided not to peddle.
```


### Self record of when I worked on this project
[7:00pm EST 06/13/2023] Started project

[8:15pm EST 06/13/2023] Took 30 minute break

[8:45pm EST 06/13/2023] Started back up

[10:01pm EST 06/13/2023] Finished up for the night

[1:30pm EST 06/14/2023] Cleaned up documentation of Classes and readme.md

[2:20 EST 06/14/2023] Finished up

Total time: [3 HOURS, 20 MINUTES] 

