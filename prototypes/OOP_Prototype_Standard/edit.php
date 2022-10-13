<?php
require('./classes/Connection.php');
$promo = new Promotion();
$id = $_GET['id'];
$promo->update();
$result = $promo->get_record($id);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
</head>

<body>
    <center>
    <h2>Modifier Promotion</h2>

        <!-- store updated data in database -->
        <?php $promo->Store_Record(); ?>

        <form method="POST" autocomplete="off">
            <label> Nom de la promotion :</label>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <input type="text" name="promo_name" required value="<?php echo $data['name']; ?>">
            <button name="btn_update"> Envoyer </button>
        </form>

    </center>
    <a href="index.php"><- Retour</a>
</body>

</html>