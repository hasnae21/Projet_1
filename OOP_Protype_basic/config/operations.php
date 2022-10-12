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
            $name = $db->check($_POST['promo_name']);

            if ($this->insert_record($name)) {
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
        $result = mysqli_query($db->con, $query);

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
        $result = mysqli_query($db->con, $query);
        return $result;
    }

    //Get Particular Record
    public function get_record($id)
    {
        global $db;
        $sql = "select * from promotion where id='$id'";
        $data = mysqli_query($db->con, $sql);
        return $data;
    }







// Set Session Message
public function set_messsage($msg){

    if (!empty($msg)) {
        $_SESSION['Message'] = $msg;
    } else {
        $msg = "";
    }
}
// Display Session Message
public function display_message(){

    if (isset($_SESSION['Message'])) {
        echo $_SESSION['Message'];
        unset($_SESSION['Message']);
    }
}

// Update Record
public function update(){
        global $db;

        if (isset($_POST['btn_update'])) {
            $id = $_POST['id'];
            $name = $db->check($_POST['name']);

            if ($this->update_record($id, $name)) {
                $this->set_messsage('<div> Your Record Has Been Updated :) </div>');
                header("location:./view.php");
            } else {
                $this->set_messsage('<div> Something Wrong ): </div>');
            }
        }
}

// Update Function 2
public function update_record($id, $name){
        global $db;

        $sql = "update promotion set name='$name' where id='$id'";
        $result = mysqli_query($db->con, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
}

}