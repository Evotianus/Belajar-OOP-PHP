<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Evo");
var_dump($company);

$company->programmer = new BackendProgrammer("Evo");
var_dump($company);

$company->programmer = new FrontendProgrammer("Evo");
var_dump($company);