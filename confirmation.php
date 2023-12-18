<?php
// var_dump($_POST);
include 'header.php';

$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$adresse= $_POST['adresse'];
$email= $_POST['email'];
$mdp = $_POST['mdp'];
$ville= $_POST['ville'];
$message= $_POST['message'];
 


include('bdd.php');

$setUser=$bdd->prepare('INSERT INTO clients(nom, prenom, adresse,email,mdp, ville, message) VALUES(?,?,?,?,?,?,?)');
($setUser->execute([$nom, $prenom, $adresse, $email, $mdp, $ville,$message]))


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de l'inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class='confirmation'>Merci pour votre inscription</p>
    <p class='confirmation2'>Bienvenue chez Smartbike</p>
    <form action="accueil.php">
        <button class="retour">Retourner à l'accueil</button>
    
</body>
</html>

