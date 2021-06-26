<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Evo";
$manager->sayHello("Vanilla");

$vp = new VicePresident();
$vp->name = "Miko";
$vp->sayHello("Cream");