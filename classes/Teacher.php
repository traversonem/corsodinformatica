<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teacher
 *
 * @author utente
 */
class Teacher {
    private $name;
    private$age;
    private $course;
    public function getCourse(){
        return $this->course;
    }
    public function setCourse($course){
                $this->course=$course;
    }
    public function __construct ($name,$age,$email,$course=null){
        $this->name=$name;
        $this->age=$age;
        $this->course=$course;
    }
    public function __toString();{
        return $this->name.$this->age.$this->email.$this->course;
    }
}
