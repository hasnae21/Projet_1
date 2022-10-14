<?php
require_once('./classes/Connection.php');

$db = new Connection();

class Promotion extends Connection
{
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

        if (isset($_POST['btn_save'])) {
            $name = $_POST['promo_name'];

            if ($this->insert_record($name)) {
                die(" Your Record Has Been Saved :)");
            } 
            else {
                die(" operation failed  ):");
            }
        }
    }
}