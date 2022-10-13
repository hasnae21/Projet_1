<?php 
    require_once('./classes/db.php');
    $db = new actions();
    
    if(isset($_GET['id'])){
        global $db;
        $id = $_GET['id'];

        if($db->Delete_Record($id)){

            $msg='<div> <p> Your Record Has Been deleted </p></div> ';
            header("location:index.php?msg=" . $msg);
        }
        else{

            $msg='<div> <p> Something is Wrong ): </p></div> '; 
            header("location:index.php?msg=" . $msg);
        }
    }
?>