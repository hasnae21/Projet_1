<?php 
    require_once('./config/dbconfig.php');
    $db = new operations();
    
    if(isset($_GET['id'])){
        global $db;
        $id = $_GET['id'];

        if($db->Delete_Record($id)){

            $error='<div> <p> Your Record Has Been deleted </p></div> ';
            header("location:view.php?error=" . $error);
        }
        else{

            $error='<div> <p> Something is Wrong ): </p></div> '; 
            header("location:view.php?error=" . $error);
        }
    }
?>