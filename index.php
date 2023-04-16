<?php

$presentTime = new DateTime();

echo $presentTime->format('m-d-Y H:i');


$leFuture = '16-04-2024';

$destinationTime = new DateTime($leFuture);

echo $destinationTime->format('m-d-Y H:i');


$diff = $presentTime->diff($destinationTime);

echo $diff->format('%y années, %m mois, %d jours, %h heures, %i minutes');