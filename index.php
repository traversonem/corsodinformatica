<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once "classes/Student.php";

$student1 = new Student('Matteo',45,'iamaluckyman@hotmail.com');
$student2 = new Student('Maurizio',45,'44carie@hotmail.it');
$student3 = new Student('Giacomino',45,'jacob.smith@gmail.com');
var_dump($student1)."<br>";
var_dump($student2)."<br>";
var_dump($student3)."<br>";
echo $student1."<br>";
echo $student2."<br>";
echo $student3."<br>";

$course1 = new Course("PHP",40);
$course2 = new Course("Java",35);

echo $course1."<br>";
echo $course2."<br>";



