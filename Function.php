<?php

require_once "data/Person.php";

$evo = new Person("Evo", "Pontianak");
$evo->name = "Evo";

$evo->sayHello("Miko");
$evo->info();

$evan = new Person("Evan", "Pontianak");
$evan->name = "Evan";

$evan->sayHello(null);
$evan->info();