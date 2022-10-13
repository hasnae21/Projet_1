<?php 
    require_once('./classes/db.php');
    $promo= new actions();
    $result=$promo->view_record();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>
    <center>
    <h1>Promotions :</h1> 

        <div>
            <input type="button" onclick="location.href='./add.php';" value="Add Promotion" />
        </div>

        <div style="color:blue;">

            <!-- add validation message -->
            <?= $_GET['msg'] ?? '' ?>

        </div>

        <table border="1px;">
        <tr>
            <td> Promotion Name </td>
            <td> Operations</td>
        </tr>

            <?php while($data = mysqli_fetch_assoc($result)){  ?>
        <tr>
            <td><?php echo $data['name'] ?></td>
            <td>
            <a href="edit.php?id=<?php echo $data['id'] ?>"> Edit </a>
            <a href="delete.php?id=<?php echo $data['id'] ?>"> Delet </a>
            </td>
        </tr>
            <?php } ?>

        </table>

    </center>
    
</body>
</html>