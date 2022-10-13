<?php 
    require('./classes/db.php'); 
    $db = new actions();
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
    <center>
        <h2>Update Promotion</h2>

        <!-- store updated data in database -->
            <?php $db->Store_Record(); ?>

            <form method="POST" autocomplete="off">

                <label> Promotion name:</label>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="text" name="promo_name" required value="<?php echo $data['name']; ?>">

                <button name="btn_update"> 
                    Update 
                </button>
            </form>

    </center>
</body>
</html>