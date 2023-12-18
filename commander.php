<?php
include("bdd.php");
include("header.php");

// Sélectionnez l'id et le nom des produits
$produits = $bdd->query("SELECT id_produit, nom FROM produits")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande du Client </title>

    <link rel="stylesheet" href="style.css  ">
</head>
<body>

    <form action="validation.php" method="post" class="form">
        <div>
            <label for="nom"></label>
            <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
        </div>
        <div>
            <label for="prenom"></label>
            <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom">
        </div>
        <div>
            <label for="adresse"></label>
            <input type="text" name="adresse" id="adresse" placeholder="Entrez votre adresse">
        </div>
        <div>
            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="Entrez votre adresse mail" required>
        </div>
     <!--Pour le produits ==========================================================================-->
        <div>
            <label for="produit">Sélectionnez un produit :</label>
                <select name="produit" id="produit">
                    <?php
                    foreach ($produits as $produit) {
                        echo '<option value="' . $produit['id_produit'] . '">' . $produit['nom'] . '</option>';
                    }
                    ?>
                </select>
            <br>
        </div>
     <!--Pour le produits ==========================================================================-->
        <div>
             <textarea name="message" placeholder="Ecrivez-nous"></textarea>
        </div>
        <div>
            <button type="submit" class="button">Commander</button>
        </div>
    </form>
</body>
</html>