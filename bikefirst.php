<?php
include 'header.php';
    
    include("bdd.php");
    $photo_vélos = $bdd->query("SELECT * FROM produits where id_produit=3")->fetchALL();

foreach ($photo_vélos as $photo_vélo) {
    echo  "
        
            <div class='photo-containeur'>
                 
                 <img class='img1' src='".$photo_vélo['photo_1']."' width='600' height='400'>
                 <p class='style-nom-bike'>" . $photo_vélo['nom'] . "</p>
                 <span class='style-prix'>" . $photo_vélo['prix'] . "</span>
                 <p class='style-description'>".$photo_vélo['description']."</p>
                 <a href='commander.php'>
                <button class='bouton-commande'>Commander</button>
            </a>
            </div>
           
           
              ";} 