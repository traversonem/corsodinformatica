<?php
namespace Users;

abstract class Worker implements Person {
    private $company;
    public function getCompany(){
    }
    protected function setCompany($c){
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
