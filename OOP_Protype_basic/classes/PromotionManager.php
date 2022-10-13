<?php
require_once('./classes/db.php');
$db = new Connection();

class Promotion extends Connection
{

    public $msg;

    function insert_record($r)
    {

        global $db;
        $query = "insert into promotion (name) values('$r')";
        $result = mysqli_query($db->con, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function Store_Record()
    {

        global $db;
        if (isset($_POST['btn_save'])) {

            $name = $db->check($_POST['promo_name']);

            if ($this->insert_record($name)) {
                die(" Your Record Has Been Saved :)");
            } else {
                die("Failed   ):");
            }
        }
    }

    
}