<?php

function sum(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

var_dump(sum());
var_dump(sum(5));
var_dump(sum(5,3,65,76,23,4));

$numbers = [1, 2, 3];

var_dump(sum(...$numbers));

function introduceTeam(string $teamName, string ...$members): void {
  echo "Team: $teamName\n";
  var_dump($members);
  echo "Members: " . implode(", ", $members) . "\n";
}

introduceTeam("A Team", "John", "Mr T");

$members = ["Harry", "Johhny", "Joe"];

introduceTeam("B Team", ...$members);
introduceTeam("C Team", "John", "Mr T", ...$members);