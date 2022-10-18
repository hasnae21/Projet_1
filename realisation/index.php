<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
    
    <div style="padding: 10px; margin:auto;">

        <h1>Promotions</h1>
        <br>
        <input type="button" onclick="location.href='./functions/add.php';" value="Ajouter une promotion" />
        <input type="text" name="search_text" id="search_text" placeholder="Rechercher une promotion" />
    </div>

    <div style="padding:10px">
        <!-- add validation message -->
        <?= $_GET['msg'] ?? '' ?>
    </div>

    <div id="result">
    </div>
</body>
<script src="./assets/script.js"></script>

</html>