<?php
require_once('./classes/PromotionManager.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>
    <center>
        <!-- store new data in database -->
        <p><?php
            $promo = new PromotionManager();
            $promo->Store_Record();
        ?></p>

        <h2>Ajouter promotion</h2>

        <form method="post" autocomplete="off">
            <label> Nom de la promotion :</label>
            <input type="text" name="promo_name" required>
            <button name="btn_save" >Envoyer</button>
        </form>

    </center>
</body>
</html>