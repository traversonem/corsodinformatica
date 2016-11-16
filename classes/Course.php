<?php


class Course {
    private $name;
    private $hours;
    
    public function __construct($name,$hours) {
        $this->name=$name;
        $this->hours=$hours;
    }
    
    public function __toString() {
        return "Nome: ".$this->name."<br>"."Ore: ".$this->hours."<br>";
    }
}
