<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ajouter</title>
</head>

<body>

<?php
require_once('../classes/PromotionManager.php');
$promo = new PromotionManager();

?>

    <h2> Ajouter promotion</h2>
        
    <form method="post" autocomplete="off">
        <label> Nom de la promotion :</label>
        <input type="text" name="promo_name" required>
        <button name="btn_save"> Envoyer </button>
    </form>
     
    <div style="padding:10px">
        <!-- store new data in database -->
        <?php $promo->Store_Record(); ?>

        <!-- add validation message -->
        <?= $_GET['msg'] ?? '' ?>
    </div>
    <br>
    <a href="../index.php"> <- Voir list des promotions </a>

</body>

</html>