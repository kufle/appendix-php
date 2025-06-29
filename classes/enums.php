<?php
enum DaysOfWeek {
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

$today = DaysOfWeek::SUNDAY;

if ($today === DaysOfWeek::SUNDAY) {
    echo "It is Sun!\n";
}

enum Colour: string {
    case RED = '#FF0000';
    case GREEN = '#00FF00';
    case BLUE = '#0000FF';
}

echo Colour::RED->value;

function isWeekend(DaysOfWeek $day): bool
{
    return $day === DaysOfWeek::SATURDAY || $day === DaysOfWeek::SUNDAY;
}

echo isWeekend(DaysOfWeek::MONDAY) ? 'Yes' : 'No';