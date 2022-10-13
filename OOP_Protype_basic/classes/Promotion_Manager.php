<?php
require_once('./classes/db.php');
$db = new dbs();

class promotion extends dbs
{

    public $msg;

    //////////////////////////////////////////////////////////Ajouter   
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

        global $db;

        if (isset($_POST['btn_save'])) {

            $name = $db->check($_POST['promo_name']);

            if ($this->insert_record($name)) {

                $msg='<div> <p> Your Record Has Been Saved :)</p> </div> ';
            } else {

                $msg='<div> <p> Failed   ): </p> </div> ';
            }
        }
    }

    ///////////////////////////////////////////////////////Afficher
    public function view_record(){

        global $db;

        $query = "select * from promotion";
        $result = mysqli_query($db->con, $query);

        return $result;
    }

}