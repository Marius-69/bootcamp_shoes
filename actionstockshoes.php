<?php

include ('BddSale.php');
require ('Stock.php');


$errors =[];
$nb_produit = $_POST['quantity'];
$class = $_POST['class'];


if ($class == "Produit")
    {
        
        $errors['class'] = 'Veuillez selectionner un produit';
    }

if(empty($nb_produit))
{
    $errors['quantity'] = "Ce champ ne peut etre vide"; 
}
elseif(!preg_match("/^[0-9]*$/",$nb_produit)) 
    {
        $errors['quantity'] = "uniquement des chiffres"; 
    }



if(sizeof($errors) == 0)
{

    
//appelle tout les fichier

//Connexion a la base de donnée

//connexion bdd
require_once('ConnectBdd.php');


//Création des objects
$medication = new Stock($libelle,$prix_achat,$prix_vente,$fournisseur,$nb_produit);


//var_dump the object so that we can see what its structure looks like.
//var_dump($person);

//Serialize les objects et envoie a la base de donnée
$serializedObject = serialize($medication);

//Preparation de la requête

//realisition du serialized + requête


$stmt = $pdo->prepare("UPDATE Stock SET (data) VALUES (?)");
$stmt->execute(array(
    $serializedObject
));

    
}
else{
    session_start();
    $_SESSION['errors'] = $errors;
}


header('Location: SeizedStock.php');



?>

