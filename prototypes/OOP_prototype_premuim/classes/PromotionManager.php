<?php
require_once('Connection.php');
$db = new Connection();

class PromotionManager extends Connection
{
    public $msg;

    ////////////////////////////////////////////////////////Ajouter /C    
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
                $msg = '<div> <p> Your Record Has Been Saved :)</p> </div> ';
                header("location:../functions/add.php?msg=" . $msg);
            } else {
                $msg = '<div> <p> Failed   ): </p> </div> ';
                header("location:../functions/add.php?msg=" . $msg);
            }
        }
    }

    ///////////////////////////////////////////////////////Afficher /R
    public function view_record()
    {
        global $db;

        $query = "select * from promotion";
        $result = mysqli_query($db->con, $query);
        return $result;
    }

    ///////////////////////////////////////////////////////Sélectionner
    public function get_record($id)
    {
        global $db;

        $sql = "select * from promotion where id='$id'";
        $data = mysqli_query($db->con, $sql);
        return $data;
    }

    /////////////////////////////////////////////////////////Modifier /U
    function update_record($id, $name)
    {
        global $db;

        $sql = "update promotion set name='$name' where id='$id'";
        $result = mysqli_query($db->con, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function update()
    {
        if (isset($_POST['btn_update'])) {
            $id = $_POST['id'];
            $name = $_POST['promo_name'];

            if ($this->update_record($id, $name)) {
                $msg = '<div> <p> Your Record Has Been Updated :)</p> </div>';
                header("location:../index.php?msg=" . $msg);
            } else {
                $msg = '<div> <p> Something is Wrong ): </p> </div>';
                header("location:../index.php?msg=" . $msg);
            }
        }
    }

    ////////////////////////////////////////////////////////Suprimer /D
    public function Delete_Record($id)
    {
        global $db;

        $query = "delete from promotion where  id='$id'";
        $result = mysqli_query($db->con, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    ////////////////////////////////////////////////////////Rechercher /S
    public function Search_Record($s)
    {
        global $db;

        $sql = "
        SELECT * FROM promotion WHERE name LIKE '%" . $s . "%' OR id LIKE '%" . $s . "%' 
        ";
        $result = mysqli_query($db->con, $sql);
        return $result;
    }

}