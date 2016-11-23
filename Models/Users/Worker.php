<?php
namespace Models\Users;

abstract class Worker extends Table implements Person {
    private $company;
    
    public function getCompany(){
            return $this->company;
    }
    protected function setCompany($company){
        $this->company = $company;
    }
}



