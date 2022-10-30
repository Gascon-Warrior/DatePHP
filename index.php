<?php

$presentTime= new DateTime();

$destinationTime = clone $presentTime;

$destinationTime->add(new DateInterval('P3Y'));

echo($presentTime->format('m-d-Y-A-h-i')) . '<br>' . PHP_EOL;

$interval = $presentTime->diff($destinationTime);
echo $interval->format('Ces deux dates sont espacées de:  %y année(s) %d jour(s) %h heures %i minutes .') . '<br>' . PHP_EOL;






