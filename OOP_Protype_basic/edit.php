<?php 
    require('./config/dbconfig.php'); 
    $db = new operations();
    $db->update();

    $id = $_GET['id'];
    $result = $db->get_record($id);
    $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
</head>
<body>

    <?php $db->Store_Record(); ?>

    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="text" name="promo_name" required value="<?php echo $data['name']; ?>">

        <button name="btn_update"> Update </button>
    </form>

</body>
</html>