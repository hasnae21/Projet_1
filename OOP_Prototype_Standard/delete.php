<?php 
    require_once('./classes/db.php');
    $promo= new Promotion();
    
    if(isset($_GET['id'])){
        
        $id = $_GET['id'];

        if($promo->Delete_Record($id)){

            $msg='<div> <p> Your Record Has Been deleted </p></div> ';
            header("location:index.php?msg=" . $msg);
        }
        else{

            $msg='<div> <p> Something is Wrong ): </p></div> '; 
            header("location:index.php?msg=" . $msg);
        }
    }
?>