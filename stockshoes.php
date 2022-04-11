
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once('menuSelectLeft.php');
    ?>
    <div class="DecalageMenu">
        <p class="TitrePrincipal">Saisie stock</p>
        <form action="actionSeizedStock.php" class="FormulaireSaisieStock" method="post">
        <?php
            require 'Stock.php';
            require 'ConnectBdd.php';

            $stmt = $pdo->prepare("SELECT * FROM Stock");

            $stmt->execute();

            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            
        ?>
            <select name="class" class="form-select">
                <option value="Produit" selected>Sélectionner un produit</option>
                <?php 
                  foreach($row as $product) {
                      $product = unserialize($product['data']);
                ?>

                <option><?php echo $product->libelle ?></option>
                <?php
                }
                ?>
            </select><br>
            <?php
            session_start();

            if(isset($_SESSION["errors"]['class']))
            {
                $class = $_SESSION['errors']['class'];
                echo "<p>$class</p>";                   
                unset($_SESSION['errors']['class']);

            }
            ?>
            <input type="text" name="quantity" class="form-control" placeholder="Nombre de produit"><br>
            <?php

              if(isset($_SESSION["errors"]['quantity']))
              {
                  $name = $_SESSION['errors']['quantity'];
                  echo "<p>$name</p>";
                  unset($_SESSION['errors']['quantity']);

              }
            ?>
            <button type="submit" class="btn btn-outline-dark">Valider</button>
        </form>
        <a class="btn btn-outline-dark" href="SeizedStockNewProduct.php" role="button">Créer un nouveau produit</a>
    </div>
</body>
</html>