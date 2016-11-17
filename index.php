<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

spl_autoload_register(function($class_name){
    require_once $class_name.".php";
});

use Users\Student as Student;
use Users\DigitalUser as DigitalUser;
use Users\Person as Person;
use Users\Course as Course;
use Users\Teacher as Teacher;
use Users\School as School;

$student1 = new Student('Matteo',45,'iamaluckyman@hotmail.com');
$student2 = new Student('Maurizio',45,'44carie@hotmail.it');
$student3 = new Student('Giacomino',45,'jacob.smith@gmail.com');

//var_dump($student1)."<br>";
//var_dump($student2)."<br>";
//var_dump($student3)."<br>";

$course1 = new Course("PHP",40);
$course2 = new Course("Java",35);
$course3 = new Course("Laravel",55);
$student1->addCourse($course1);
$student2->addCourse($course2);
$student3->addCourse($course1);
$teacher1= new Teacher("Valerio Sanguineti",42,"valerio.sanguineti@villaggio.org");
$teacher2= new Teacher("Fabio Fazio",33,"fabio.fazio@villaggio,org");
$teacher3= new Teacher("Michelangelo Riccobene","michelangelo.riccobene@villaggio.org");
$school1= new School("WyLab");
$teacher1->addCourse($course1);

echo "<h2>Scuole: </h2>";
echo $school1."<br>";

echo "<h2>Corsi: </h2>";
echo $course1."<br>";
echo $course2."<br>";

echo "<h2>Studenti: </h2>";
echo $student1."<br>";
echo $student2."<br>";
echo $student3."<br>";

echo "<h2>Insegnanti: </h2>";
echo $teacher1."<br>";
echo $teacher2."<br>";
