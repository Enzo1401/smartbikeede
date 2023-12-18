<?php
include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <form action="confirmation.php" method="post" class="form">
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
        <div>
            <label for="mdp"></label>
            <input type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe" required>
        </div>
        <div>
            <label for="ville"></label>
            <select name="ville" id="ville">
                <option value="Paris">Paris</option>
                <option value="Lyon">Lyon</option>
                <option value="Lille">Lille</option>
                <option value="Marseille">Marseille</option>
            </select><br>
        </div>
        <div>
             <textarea name="message" placeholder="Ecrivez-nous"></textarea>
        </div>
        <div>
            <button type="submit" class="button">Inscription</button>
        </div>
    </form>
</body>
</html>

<?php
include 'footer.php'; 