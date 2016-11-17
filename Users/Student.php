<?php
namespace Users;

class Student implements Person {
    private $name;
    private $age;
    private $courses = array();
    
    use DigitalUser;
    
    public function __construct ($name,$age,$email,$courses=[]){
            $this->name=$name;
            $this->age=$age;
            $this->email=$email;
            $this->courses=$courses; 
    } 
    public function __toString(){
        $courses="";
        foreach($this->courses as $course){
            $courses = $courses."<br>".$course;
        }
        return "Nome: ".$this->name."<br>Età: ".$this->age."<br>Email: ".$this->email.$courses;
    }
    public function getCourses(){
        return $this->courses;   
    }
    public function addCourse(Course $c){
        array_push($this->courses,$c);
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