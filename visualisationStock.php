
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
    require 'stock.php';
    require 'bdd_connect.php';

    $stmt = $pdo->prepare("SELECT * FROM Stock");

    $stmt->execute();

    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    ?>
    <div class="DecalageMenu">
        <p class="TitrePrincipal">Le stock</p>
        <table class="table-bordered TableauStockVente2">
            <tr>
              <th>Marque</th>
              <th>Pointure</th>
              <th>Prix</th>
              <th>Etat</th>
            </tr>
            <?php 
            foreach($row as $product) {$product = unserialize($product['data']);
            ?>
            <tr>
              <td><?php echo $product->marque ?></td>
              <td><?php echo $product->pointure ?></td>
              <td><?php echo $product->prix ?></td>
              <td><?php echo $product->etat ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>