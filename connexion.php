<?php
include 'header.php';?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <Form class="form" method="post">
        NOM: <input type=text name="nom"> 
        PRENOM: <input type=text name="prenom"> 
        ADRESSE MAIL: <input type=text name="email" required>
        MOT DE PASSE: <input type=password name="mdp" required>
        <button> Envoyer </button>
    </Form>
    
</body>
</html> 
