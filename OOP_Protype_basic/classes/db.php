<?php
require_once('./classes/PromotionManager.php');

////////////////////////////database name : projet_1 
////////////////////////////table name : promotion (id, name)
class Connection
{
    public $con;
    public function __construct(){
        $this->db_connect();
    }
    public function db_connect(){
        $this->con = mysqli_connect('localhost', 'root', '', 'projet_1');
        
        if (mysqli_connect_error()) {
            die(" echec de la connection au database  ):");
        }
    }
    public function check($e){
        $return = mysqli_real_escape_string($this->con, $e);
        return $return;
    }
}