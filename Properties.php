<?php

require_once "data/Person.php";

$person = new Person("Evo", "Pontianak");

$person->name = "Evo";
$person->address = "Pontianak";
$person->country = "Indonesia";

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;