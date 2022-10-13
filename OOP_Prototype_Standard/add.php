<?php
require_once('./classes/PromotionManager.php');
$promo = new Promotion();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ajouter</title>
</head>

<body>
    <center>
    <h2> Ajouter promotion</h2>

        <div style="color:blue;">
            <!-- store new data in database -->
            <?php $promo->Store_Record(); ?>

            <!-- add validation message -->
            <?= $_GET['msg'] ?? '' ?>
        </div>

        <form method="post" autocomplete="off">
            <label> Nom de la promotion :</label>
            <input type="text" name="promo_name" required>
            <button name="btn_save"> Envoyer </button>
        </form>

    </center>
</body>

</html>