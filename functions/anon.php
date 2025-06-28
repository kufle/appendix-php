<?php

$greet = function ($name) {
    return "Hello, $name\n";
};

echo $greet("Irawan");

$numbers = [1,2,3];

$squarded = array_map(function ($n) {
    return $n * $n;
}, $numbers);

var_dump($squarded);

$message = "Bye";
$greet2 = function ($name) use ($message) {
    $message = $message. "!";
    return "$message, $name\n";
};

echo $greet2("David");
echo $message;