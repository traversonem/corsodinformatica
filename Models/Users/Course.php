<?php
namespace Models\Users;

class Course {
    protected $name;
    protected $hours;
    
    const TABLE_NAME= "course";
    
    public function __construct($name="",$hours="") {
        
        $this->name=$name;
        $this->hours=$hours;
    }
    
    public function __toString() {
        return "Corso: ".$this->name."<br>"."Ore: ".$this->hours."<br>";
    }
}
