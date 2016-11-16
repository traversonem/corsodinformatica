<?php
require "DigitalUser.php";
require "Worker.php";

class Teacher implements Worker {
    private $name;
    private $age;
    private $course;
    
    use DigitalUser;
    
    public function __construct ($name,$age,$email,$course=null){
        $this->name=$name;
        $this->age=$age;
        $this->course=$course;
    }
    public function __toString(){
        return $this->name.$this->age.$this->email.$this->course;
    }
    
    public function getCourse(){
        return $this->course;
    }
    public function setCourse($course){
                $this->course=$course;
    }

}
