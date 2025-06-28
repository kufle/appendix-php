<?php

function doubleByValue(int $number): int {
    $number *= 2;
    return $number;
}

function doubleByValueRef(int &$number): int {
    $number *= 2;
    return $number;
}

$original = 5;
doubleByValue($original);
var_dump($original);
doubleByValueRef($original);
var_dump($original);