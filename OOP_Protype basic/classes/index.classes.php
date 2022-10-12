<?php 

class Promotion {
    private $id;
    public $name;
  
    public function __construct($name) {
    $this->name = $name; 
    }
    function get_name() {
        return $this->name;
    }
}