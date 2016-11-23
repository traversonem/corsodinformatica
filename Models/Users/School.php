<?php
namespace Models\Users;

use Models\Table as Table;

class School extends Table implements \Iterator  {
    
    protected $name;
    private $students = array();
    protected $address;
    private $position = 0;
    
    const TABLE_NAME = "school";
    
    public function __construct($name="",$address="") {
        
        parent::init($this);
        
        $this->name=$name;
        $this->address=$address;
    }
    
    static function getBindings(){
        return [
            "id"=>"id",
            "name"=>"name",
            "address"=>"address",
        ];
    }
    public function __toString(){
        $stringa="";
        foreach($this->students as $stud){
            $stringa."<br>".$stud;
        }
        return "<br>Nome: ".$this->name."<br>"."Indirizzo:".$this->address."<br>";
    }
    
    public function getStudents(){
        return $this->students;
    }    
    public function addStudent(Student $stud){
        array_push($this->students,$stud);
    }   
    public function setSchool($name){
        $this->school=$name;
    }
    public function setAddress($address){
        $this->address=$address;
    }
     public function current(){
                    return $this->students[$this->position];
                }
            public function next(){
                    $this->position++;
                }
            public function rewind(){
                    $this->position = 0;
                }
            public function key(){
                    return $this->position;
                }
            public function valid(){
                    return isset($this->students[$this->position]) || array_key_exists($this->position, $this->students);
                }
}
