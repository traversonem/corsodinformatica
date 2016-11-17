<?php
namespace Users;

class Teacher extends Worker {
    private $name;
    private $age;
    private $course;
    private $school;
    
    use DigitalUser;
    
    public function __construct ($name,$age,$email,$course=null,$school=null){
        $this->name=$name;
        $this->age=$age;
        $this->course=$course;
        $this->school=$school;
    }
    public function __toString(){
        
        
        return "Nome: ".$this->name."<br>Età: ".$this->age.$this->email.$this->course.$this->school;
    }
    
    public function getCourse(){
        return $this->course;
    }
    public function setCourse($name){
        $this->name=$name;
    }    
//    public function getSchool(){
//        return $this->school;
//    }
//    public function setSchool($name){
//        $this->name=$name;
//    }
    
    
    public function getEmail(){  
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
//    public function populateTeacher(){
//        
//    }
}
