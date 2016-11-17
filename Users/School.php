<?php
namespace Users;

class School {
    private $name;
    private $students = array();
    
    public function __construct($name,$students=[]) {
        $this->name=$name;
        $this->students=$students; 
    }
    public function __toString(){
        $students="";
        foreach($this->students as $stud){
            $students = $students."<br>".$stud;
        }
        return "Nome: ".$this->name.$students;
    }
    
    public function getSchool(){
        return $this->school;
    }    
    public function setSchool($name){
        $this->school=$name;
    }
    public function addStudents(Student $stud){
        array_push($this->students,$stud);
    }   
    public function getStudents(){
        return $this->students;
    }
}
