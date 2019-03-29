<?php

$vin = 'JTJBM7FX6J5194612';

$year = 2018;

$jsonFiles = file_get_contents('https://vpic.nhtsa.dot.gov/api/vehicles/DecodeVin/' . $vin . '?format=json&modelyear=' . $year);

$array = json_decode($jsonFiles, true);

var_dump($array);
