<?php

class Person {
    // public string $name;
    // public int $age;

    // public function __construct($name, $age)
    // {
    //     $this->name = $name;
    //     $this->age = $age;
    // }

    //bisa juga menggunakan seperti ini 
    public function __construct(public $name, public $age)
    {}

    public function introduce() {
        return "Hi I'm {$this->name} and I'm {$this->age} years old";
    }
}

$person = new Person("Ujang", 18);

echo $person->introduce();