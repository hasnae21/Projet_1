<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Ajouter</title>
</head>

<body>

    <?php
    require_once('../classes/PromotionManager.php');
    $promo = new PromotionManager();

    ?>
    <div style="padding:40px;  width:700px; margin:auto;">

        <h3 class="text-success"> Ajouter promotion</h3>

        <!-- store new data in database -->
        <?php $promo->Store_Record(); ?>

        <div style="padding: 20px 0px;">
            <form method="post" autocomplete="off">
                <div class="row g-2" style="align-items:center;">
                    <div class="col-md">
                        <div class="form-floating">
                            <input class="form-control" type="text" id="promo_name" name="promo_name" required>
                            <label for="promo_name"> Nom de la promotion :</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <button class="btn btn-success btn-lg" name="btn_save"> Envoyer </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div style="padding:10px 0PX" class="text-primary">
            <!-- add validation message -->
            <?= $_GET['msg'] ?? '' ?>
        </div>

        <br>
        <a class="btn btn-primary" href="../index.php">
            <- Voir list des promotions </a>
    </div>


</body>

</html>