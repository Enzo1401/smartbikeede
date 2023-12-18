<?php
include 'header.php';
include("bdd.php");

echo "<body class='body1'>
    ";

$photo_vélos = $bdd->query("SELECT * FROM produits where id_produit=1")->fetchALL();

foreach ($photo_vélos as $photo_vélo) {
    echo "
        <div class='product-box'>
            <div class='product-title'>
                <p>" . $photo_vélo['nom'] . "</p>
            </div>
            <div class='product-image'>
                <img class='product-image' src='" . $photo_vélo['photo_1'] . "' alt='" . $photo_vélo['nom'] . "'  width='600' height='450'>
            </div>
            <div class='product-price'>
                <span>" . $photo_vélo['prix'] . "</span>
            </div>
            <a href='bikeone.php'>
                <button class='order-button'>Commander</button>
            </a>
        </div>";
}

$photo_vélos = $bdd->query("SELECT * FROM produits where id_produit=2")->fetchALL();

foreach ($photo_vélos as $photo_vélo) {
    echo "
        <div class='product-box'>
            <div class='product-title'>
                <p class='style-nom'>" . $photo_vélo['nom'] . "</p>
            </div>
            <div class='product-image'>
                <img class='product-image' src='" . $photo_vélo['photo_1'] . "' width='600' height='450'>
            </div>
            <div class='product-price'>
                <span>" . $photo_vélo['prix'] . " </span>
            </div>
            <a href='bike22.php'>
                <button class='order-button'>Commander</button>
            </a>
        </div>";
}

echo "</div></body>";
     

$photo_vélos= $bdd->query("SELECT * FROM produits where id_produit=3")->fetchALL();
    
foreach($photo_vélos as $photo_vélo){
     echo "
    <body class='body1'>
        <div class='product-box'>
            <div class='product-title'>
               <p class='style-nom'>".$photo_vélo['nom']."</p>
            </div>
            <div class='product-image'>
               <img class='product-image' src='".$photo_vélo['photo_1']."' width='600' height='450'>
            </div>
            <div class='product-price'>
               <span>".$photo_vélo['prix']." </span>
            </div>
            <a href='bikefirst.php'>
                <button class='order-button'>Commander</button>
            </a>
        </div>
    </body>";
     
}
$photo_vélos= $bdd->query("SELECT * FROM produits where id_produit=4")->fetchALL();
    
foreach($photo_vélos as $photo_vélo){
     echo "
    <body class='body1'>
        <div class='product-box'>
            <div class='product-title'>
               <p class='style-nom'>".$photo_vélo['nom']."</p>
            </div>
            <div class='product-image'>
               <img class='product-image' src='".$photo_vélo['photo_1']."' width='600' height='450'>
            </div>
            <div class='product-price'>
               <span>".$photo_vélo['prix']." </span>
            </div>
            <a href='bike5.php'>
                <button class='order-button'>Commander</button>
            </a>
        </div>
    </body>"; 

}
                   


        include 'footer.php'; 

     
  











?>


























