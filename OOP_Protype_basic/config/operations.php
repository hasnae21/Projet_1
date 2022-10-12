<?php

require_once('./config/dbconfig.php');
$db = new dbconfig();

class operations extends dbconfig
{
    // Insert Record in the Database
    public function Store_Record()
    {
        global $db;
        if (isset($_POST['btn_save'])) {
            $promo_name = $db->check($_POST['promo_name']);

            if ($this->insert_record($promo_name)) {
                echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
            } else {
                echo '<div class="alert alert-danger"> Failed ): </div>';
            }
        }
    }

    // Insert Record in the Database Using Query    
    function insert_record($a)
    {
        global $db;
        $query = "insert into promotion (name) values('$a')";
        $result = mysqli_query($db->connection, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    //View Database Record
    public function view_record()
    {
        global $db;
        $query = "select * from promotion";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }

    //Get Particular Record
    public function get_record($id)
    {
        global $db;
        $sql = "select * from promotion where ID='$id'";
        $data = mysqli_query($db->connection, $sql);
        return $data;
    }


    // Update Record
    public function update()
    {
        global $db;

        if (isset($_POST['btn_update'])) {
            $ID = $_POST['ID'];
            $FirstName = $db->check($_POST['First']);
            $LastName = $db->check($_POST['Last']);
            $UserName = $db->check($_POST['UserName']);
            $Email = $db->check($_POST['UserEmail']);

            if ($this->update_record($ID, $FirstName, $LastName, $UserName, $Email)) {
                $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                header("location:view.php");
            } else {
                $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
            }
        }
    }


    // Update Function 2
    public function update_record($id, $first, $Last, $User, $Email)
    {
        global $db;
        $sql = "update employees set FirstName='$first', LastName='$Last', UserName='$User', Email='$Email' where ID='$id'";
        $result = mysqli_query($db->connection, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    // Set Session Message
    public function set_messsage($msg)
    {
        if (!empty($msg)) {
            $_SESSION['Message'] = $msg;
        } else {
            $msg = "";
        }
    }

    // Display Session Message
    public function display_message()
    {
        if (isset($_SESSION['Message'])) {
            echo $_SESSION['Message'];
            unset($_SESSION['Message']);
        }
    }
}