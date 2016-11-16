<?php

require "Person.php";
require "Course.php";
require "DigitalUser.php";

class Student implements Person {
    private $name;
    private $age;
    private $courses = array();
    
    use DigitalUser;
    
    public function __construct ($name,$age,$email,$courses=[]){
            $this->name=$name;
            $this->age=$age;
            $this->email=$email;
            $this->courses=$courses; //NOCIIIIIIIIIIIIIIIIII
    } 
    public function __toString(){
        return "Nome: ".$this->name."<br>Età: ".$this->age."<br>Email: ".$this->email."<br>";
    }
    public function getCourses(){
        return $this->courses;   
    }
    public function addCourse(Course $s){
        array_push($this->courses,$s);
    }
    public function resetCourses(){
        return $this->courses=array();
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name=$name;
    }
    function getAge(){
        return $this->age;
    }
    function setAge($age){
        $this->age=$age;
    }
}