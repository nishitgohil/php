class Person
{
  public $name;
  public $age;

  public function sayHello()
  {
    echo "Hello, my name is {$this->name} and I am {$this->age} years old.";
  }
}

$person = new Person();
$person->name = 'John';
$person->age = 30;
$person->sayHello();
