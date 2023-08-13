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
