<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$email = $_POST['email'];
$produit = $_POST['produit'];
$message = $_POST['message'];

include('bdd.php');

$setUser = $bdd->prepare('INSERT INTO commandes(nom, prenom, adresse, email, id_produit, message) VALUES(?,?,?,?,?,?)');
$setUser->execute([$nom, $prenom, $adresse, $email, $produit, $message]);

$setUser = $bdd->prepare('INSERT INTO clients(nom, prenom, adresse, email, message) VALUES(?,?,?,?,?)');
$setUser->execute([$nom, $prenom, $adresse, $email, $message]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de la Commande </title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <p class='confirmation'>Merci de Votre Commande</p>
        <p class='confirmation2'>Smartbike</p>
    </div>

    <div>
        <form action="accueil.php">
            <button class="retour">Retourner à l'accueil</button>
        </form>
    </div>
</body>
</html>
