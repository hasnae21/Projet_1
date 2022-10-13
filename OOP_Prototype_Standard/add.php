<?php
require_once('./classes/functions.php');
$promo= new promotion();
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

        <div style="color:blue;">

            <!-- add validation message -->
            <?= $_GET['msg'] ?? '' ?>
        </div>

        <!-- store new data in database -->
            <?php $promo->Store_Record(); ?>

            <form method="post" autocomplete="off" >

                <label> Promotion name:</label>
                <input type="text" name="promo_name" required>

                <button name="btn_save"> 
                    Envoyer
                </button>
            </form>

    </center>

</body>
</html>