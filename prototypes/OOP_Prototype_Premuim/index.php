<?php
require_once('./classes/Connection.php');
$promo = new Promotion();
$result = $promo->view_record();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>
    <center>
        <h1>Promotions</h1>
        <div style="padding: 10px;">
            <input type="button" onclick="location.href='./add.php';" value="Add Promotion" />
            <!-- add validation message -->
            <?= $_GET['msg'] ?? '' ?>
        </div>
        <table border="1px;">
            <tr>
                <td> Nom de la promotion </td>
                <td colspan="2"> Operations </td>
            </tr>

            <?php while ($data = mysqli_fetch_assoc($result)) {  ?>
                <tr>
                    <td><?php echo $data['name'] ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $data['id'] ?>"> Supprimer </a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id'] ?>"> Modifier</a>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </center>
</body>

</html>