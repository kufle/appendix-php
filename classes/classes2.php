<?php

class Person {
    public function __construct(public string $name, public int $age)
    {}

    public function introduce() {
        return "Hi I'm {$this->name} and I'm {$this->age} years old";
    }
}

class Employee extends Person {
    public function __construct(public string $name, public int $age, public string $position)
    {}

    public function introduce() {
        return parent::introduce() . " I work as a {$this->position}.";
    }
}

$employee = new Employee("John", 20, "Doctor");
echo $employee->introduce();

$people = [
  new Employee("Jerry", 45, "Manger"),
  new Person("Piotr", 37)
];

function introduce(Person $person) {
  echo $person->introduce() . "\n";
}

foreach ($people as $person) {
  introduce($person);
}