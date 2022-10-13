<?php
//session_start();
require_once('./classes/functions.php');

/////////////////////////////connection to database
////////////////////////////database name : projet_1
////////////////////////////table name : promotion (id, name)

class dbconfig
{
    public $con;

    public function __construct(){
        $this->db_connect();
    }

    public function db_connect(){
        $this->con = mysqli_connect('localhost', 'root', '', 'projet_1');
        
        if (mysqli_connect_error()) {
            die(" Database Connection Failed ):");
        }
    }
    public function check($e){
        $return = mysqli_real_escape_string($this->con, $e);
        return $return;
    }
}