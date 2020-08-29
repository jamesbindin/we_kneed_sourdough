<?php
class Items{
    private $result;

    public function __construct(){
        $this->result = NULL;
    }

    public function loadFromDB($conn){
       $this->result = $conn->query('SELECT * FROM `item`'); 
    }

    public function getResult(){
        return $this->result;
    }
}
?>