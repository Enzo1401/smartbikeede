<?php


try
{
    $bdd =new PDO("mysql: host=localhost;port=3306;dbname=smartbike","root","");
    

}
catch (Exception $e){
    echo "probleme BDD $e";
} 