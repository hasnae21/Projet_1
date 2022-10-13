<?php
require_once('./classes/PromotionManager.php');
$promo= new Promotion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projet_1</title>
</head>
<body>
    <center>
        <h2>Add Promotion</h2>
        
        <form method="post" autocomplete="off" >
            <label> Promotion name:</label>
            <input type="text" name="promo_name" required>
            <button name="btn_save"> 
                Envoyer
            </button>
        </form>

        <p>
            <!-- store new data in database -->
            <?php $promo->Store_Record(); ?>
        </p>
    </center>
</body>
</html>