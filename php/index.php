<?php

use App\{Developer, JavaDeveloper, PHPDeveloper, PythonDeveloper, SQLDeveloper, TaskAssessment};
//у меня почему-то так шторм просит сделать

require_once('../vendor/autoload.php');
//
//$developer = new Developer();
//var_dump($developer);
//
//$phpDeveloper = new PHPDeveloper('Arthur', 28, 'Middle');
//var_dump($phpDeveloper);
//
//$javaDeveloper = new JavaDeveloper('Artem', 32, 'Team Lead');
//var_dump($javaDeveloper);
////print_r($javaDeveloper); можно еще так
//
//$sqlDeveloper = new SQLDeveloper();
//echo $sqlDeveloper->setName('Eva') . $sqlDeveloper->setAge(26) . $sqlDeveloper->setPosition('Senior');
//
//$pythonDeveloper = new PythonDeveloper();
//echo $pythonDeveloper->setName('Liz') . $pythonDeveloper->setAge(22) . $pythonDeveloper->setPosition('Junior');
//
echo TaskAssessment::getTotalRaiting('efcbhkcne');