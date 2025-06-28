<?php
declare(strict_types=1);

function add(int $a, int $b): int {
    return $a+$b;
}

var_dump(add((int)5.0, 3));