<?php 
    require_once('./config/dbconfig.php');
    $db = new operations();
    
    if(isset($_GET['id'])){
        global $db;
        $id = $_GET['id'];

        if($db->Delete_Record($id)){

            $db->set_messsage('<p> Your Record Has Been deleted </p>');
            header("location:view.php");
        }
        else{

            $db->set_messsage('<p> Something is Wrong ): </p>'); 
        }
    }
?>