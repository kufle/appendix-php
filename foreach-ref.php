<?php

$largeArray = range(1, 1_000_000);
$startTime = microtime(true);
$startMem = memory_get_usage();

$out = [];

foreach($largeArray as $value) {
    $out[] = $value * 2;
}

$endTime = microtime(true);
$endMem =memory_get_usage();

echo "Time: ". ($endTime - $startTime) . "Seconds\n";
echo "Memory: ". round(($endMem - $startMem) /1024/1024) . "MBs/n";