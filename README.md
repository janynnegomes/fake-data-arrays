# Fake Data Arrays
Fake Data Arrays for offline testing in dev enviroments


## How to use:

#1 - Add the dependence to your **composer.json** file

     "require": {
            "janynne/fake-data-arrays": "dev-master"
      }
#2 - Add the autoloader include on your page

    require __DIR__.'/vendor/autoload.php';

#3 - Import the namespace and create the object to use the **getPeople($count)** function

       use Janynne\FakeData\FakeDataArrays;

        $fakeObj = new FakeDataArrays();
        
        var_dump($fakeObj->getPeople(10));
