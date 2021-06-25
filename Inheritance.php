<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Evo";
$manager->sayHello("Miko");

$vp = new VicePresident();
$vp->name = "Evan";
$vp->sayHello("Everdo");