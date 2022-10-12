<?php 
    
    require_once('./config/dbconfig.php'); 
    $db = new operations();
    $result=$db->view_record();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Crud Operation in Php Using OOP</title>
</head>
<body class="bg-dark">

  
  <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> Employees Record </h2>
                    </div>
                    <div class="card-body">
                        <?php
                              $db->display_message(); 
                              $db->display_message();
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 10%"> ID </td>
                                <td style="width: 10%"> First Name </td>
                                <td style="width: 20%"> Last Name </td>
                                <td style="width: 20%"> User Name </td>
                                <td style="width: 20%"> User Email </td>
                                <td style="width: 20" colspan="2">Operations</td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['FirstName'] ?></td>
                                    <td><?php echo $data['LastName'] ?></td>
                                    <td><?php echo $data['UserName'] ?></td>
                                    <td><?php echo $data['Email'] ?></td>
                                    <td><a href="edit.php?U_ID=<?php echo $data['ID'] ?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="del.php?D_ID=<?php echo $data['ID'] ?>" class="btn btn-danger">Del</a></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>