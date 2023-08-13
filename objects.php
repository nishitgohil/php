// Define class
class Person
{
  public $name;
  public $age;

  public function sayHello()
  {
    echo 'Hello, my name is '. $this->name;
  }
}

// Create an object
$person = new Person();
$person->name = "John";
\$person->age = 30;

 // Call method
\$person->sayHello(); // Output: Hello, my name is John

<!-- example -->

class Person
{
  public $name;
  public $age;
  public $city;

  public function sayHello()
  {
    echo "Hello, my name is {$this->name} and I am {$this->age} years old.";
  }
}

$person = new Person();
$person->name = 'John';
$person->age = 30;
$person->city = 'New York';

$person->sayHello();

<!-- Complex Object -->

class Car
{
  public $make;
  public $model;
  public $year;
  public $owner;

  public function __construct($make, $model, $year, $owner)
  {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
    $this->owner = $owner;
  }

  public function getOwnerName()
  {
    return $this->owner->name;
  }
}

class Person
{
  public $name;
  public $age;
  public $car;

  public function __construct($name, $age, $car)
  {
    $this->name = $name;
    $this->age = $age;
    $this->car = $car;
  }

  public function getCarMake()
  {
    return $this->car->make;
  }
}

$car = new Car('Toyota', 'Corolla', 2020, new Person('John', 30, null));
$person = new Person('Mary', 25, $car);

echo $person->getCarMake();
echo $car->getOwnerName();