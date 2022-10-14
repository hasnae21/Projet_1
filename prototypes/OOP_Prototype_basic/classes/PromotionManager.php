<?php
require_once('./classes/Connection.php');

$db = new Connection();


class Promotion extends Connection
{
    public $msg;

    function insert_record($r){

        global $db;

        $query = "insert into promotion (name) values('$r')";
        $result = mysqli_query($db->con, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function Store_Record(){

        if (isset($_POST['btn_save'])) {
            $name = addslashes($_POST['promo_name']);

            if ($this->insert_record($name)) {
                $msg = '<div> <p> Your Record Has Been Saved :)</p> </div> ';
                header("location:../index.php?msg=" . $msg);
            } 
            else {
                $msg = '<div> <p> Failed   ): </p> </div> ';
                header("location:../includes/add.php?msg=" . $msg);
            }
        }
    }
}