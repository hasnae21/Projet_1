<?php 
    require_once('./config/dbconfig.php');
    $db = new operations();
    $result=$db->view_record();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
        <div> 
            <?php $db->display_message(); ?> 
        </div>
        <table class="table table-bordered">
        <tr>
            <td style="width: 10%"> ID </td>
            <td style="width: 10%"> Promotion Name </td>
            <td style="width: 20" colspan="2">Operations</td>
        </tr>

            <?php  while($data = mysqli_fetch_assoc($result)){  ?>
        <tr>

            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><a href="edit.php?id=<?php echo $data['id'] ?>"> Edit </a></td>
            <td><a href="del.php?id=<?php echo $data['id'] ?>"> Delet </a></td>
        </tr>
            <?php } ?>
    </table>

</body>
</html>