<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>
    <div style="padding:40px;  width:800px; margin:auto;">
        <h1 class="text-primary">Promotions</h1>

        <div style="padding: 20px 0px;">
            <div class="row g-2" style="align-items:center;">
                <div class="col-md">
                    <div class="form-floating">
                        <input class="form-control" type="text" name="search_text" id="search_text" style="width:450px;"/>
                        <label for="search_text"> Rechercher une promotion</label>
                    </div>
                </div>
                <div class="col-md">
                    <input type="button" class="btn btn-primary btn-lg" onclick="location.href='./functions/add.php';" value="Ajouter une promotion" />
                </div>
            </div>
        </div>

        <div style="padding:10px 0PX" class="text-primary">
            <!-- add validation message -->
            <?= $_GET['msg'] ?? '' ?>
        </div>

        <div id="result">

        </div>

    </div>
</body>
<script src="./assets/script.js"></script>

</html>