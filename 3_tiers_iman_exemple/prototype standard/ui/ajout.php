<?php 
    require_once("../businessLayer/promoManagement.php");
    
    if(!empty($_POST)){
      $validation = new promoManagement($_POST);
      $validation->insert();
    }
    // require_once('db.php');
    // $db = new database();
    // $db->connect_db();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion des promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      .hero{
        margin-top: 3em;
        text-align:center;
      }
      .hero .input-group{
        margin-top:3em;
      }
      .hero h4{
        color: #939090;
        font-weight: 400;
        margin-right: 1em;
      }
      .hero .input-group label, .hero .input-group input{
        margin-right: 1em;
      }
      .hero .input-group button{
        font-size: 1.2em;
        background: unset;
        border: unset;
        color: #22D57B;
      }
      input{
        border-color: #dedcdc;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="hero">
            <h4>Ajouter promotion</h4>
                <form action="index.php" method="POST">
                    <div class="input-group">
                      <label for="promo">Nom de la promotion</label>
                      <input type="text" name="promo" id="promo">
                      <button type="submit">Envoyer</button>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>