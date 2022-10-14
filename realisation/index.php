<?php
require_once('./classes/Connection.php');

$promo = new PromotionManager();

$result = $promo->view_record();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
    <center>
        <h1>Promotions</h1>

        <div style="padding: 10px;">

            <input type="button" onclick="location.href='./includes/add.php';" value="Ajouter une promotion" />
            <input type="text" name="search_text" id="search_text" placeholder="Rechercher une promotion" />

            <div id="result"></div>

            <!-- add validation message -->
            <?= $_GET['msg'] ?? '' ?>

        </div>

        <table border="1px;">
            <tr>
                <td> ID de la promotion </td>
                <td> Nom de la promotion </td>
                <td colspan="2"> Operations </td>
            </tr>

            <?php

                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['name'] ?></td>
                        <td>
                            <a href="./includes/delete.php?id=<?php echo $data['id'] ?>"> Supprimer </a>
                        </td>
                        <td>
                            <a href="./includes/edit.php?id=<?php echo $data['id'] ?>"> Modifier</a>
                        </td>
                    </tr>
            <?php
                }
            ?>

        </table>

    </center>
</body>

</html>
<script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "./includes/search.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }
        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>