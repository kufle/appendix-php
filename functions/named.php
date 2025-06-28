<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false): string {
  $message = "$greeting, $name!";
  return $shout ? strtoupper($message) : $message;
}

echo greet("Alice") . "\n"; //Hello, Alice
echo greet("Alice", "Hi") . "\n"; //Hi, Alice
echo greet("Alice", "Hey", true) . "\n"; //HEY, ALICE

echo greet(name: "David", shout: false); //Hello, David