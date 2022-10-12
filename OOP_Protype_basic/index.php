<?php
require_once('./config/dbconfig.php');
$db = new operations();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet_1</title>
</head>

<body>
    <center>
        <h2>Add Promotion</h2>
        <div class="container">
            <?php $db->Store_Record(); ?>
            <form method="post">
                <label> Promotion name:</label>
                <input type="text" name="promo_name" required>
                <button name="btn_save"> Envoyer</button>
            </form>
        </div>
    </center>
</body>

</html>