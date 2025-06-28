<?php

$status = 404;

$message = match($status) {
    200, 300 => 'Success',
    404, 404, 500 => 'Error',
    default => 'Unknown Status'
};

echo $message."\n";