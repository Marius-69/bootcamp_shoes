<?php

try 
{
    $pdo = new PDO('mysql:host=localhost;dbname=bootcampshoes', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>