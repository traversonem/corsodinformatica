<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

spl_autoload_register(function($class_name){
    require_once $class_name.".php";
});

use Models\Users\Student as Student;
use Models\Users\Course as Course;
use Models\Users\Teacher as Teacher;
use Models\Users\School as School;

$student1 = new Student('Matteo Traversone',45,'iamaluckyman@hotmail.com');
$student2 = new Student('Maurizio Dentist',45,'44carie@hotmail.it');
$student3 = new Student('Giacomino Black',45,'jacob.smith@gmail.com');

echo "<hr><h3>Elenco studenti:</h3>".$student1."<br>".$student2."<br>".$student3."<br>";

$id = $student1->save();

echo "<hr><b>Matteo dal db con ID = $id:</b> ".Student::load($id)."<br>";
$student1->setAge(55);
$student1->save();
echo "<br><b>Matteo dal db appena aggiornato:</b> ".Student::load($id)."<br>";
$student1->remove();
echo "<br><b>Matteo è stato rimosso dal DB</p><br>";

$course1 = new Course("PHP",40);
$course2 = new Course("Java",35);
$course3 = new Course("Laravel",55);

$student1->addCourse($course1);
$student2->addCourse($course2);
$student3->addCourse($course1);

$teacher1= new Teacher("Valerio Sanguineti",42,"valerio.sanguineti@villaggio.org");
$teacher2= new Teacher("Fabio Fazio",33,"fabio.fazio@villaggio,org");
$teacher3= new Teacher("Michelangelo Riccobene",47,"michelangelo.riccobene@villaggio.org");
$school1= new School("Google","1600 Amphitheatre Parkway Mountain View, CA 94043");


echo "<h2>Scuole: </h2>";
echo $school1."<br>";

echo "<h2>Corsi: </h2>";
echo $course1."<br>";
echo $course2."<br>";

echo "<h2>Studenti: </h2>";
echo $student1."<br>";
echo $student2."<br>";
echo $student3."<br>";


$id = $school1->save();
echo "<hr><b>Google dal db con ID = $id:</b> ".School::load($id)."<br>";
$school1->setAddress("Via dei pini");
$school1->save();
echo "<br><b>Google dal db appena aggiornato:</b> ".Student::load($id)."<br>";
$student1->remove();
echo "<br><b>Google è stato rimosso dal DB</p><br>";
//echo "<h2>Insegnanti: </h2>";
//echo $teacher1."<br>";
//echo $teacher2."<br>";






