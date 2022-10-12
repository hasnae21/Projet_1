<?php

require_once('./config/operations.php');
$db = new operations();
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
        <div class="container">

            <?php $db->Store_Record(); ?>

            <form method="post" autocomplete="off" action="view.php">
                <label> Promotion name:</label>
                <input type="text" name="promo_name" required>
                <button name="btn_save"> 
                    Envoyer
                </button>
            </form>

        </div>
    </center>
</body>
</html>