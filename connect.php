<?php
  try{
    // requête de connexion à la base de données, nous entrons la localisation de notre BDD ici "localhost", le name de notre tableau, le nom d'utilisateur et le mot de passe du SQL lié à notre host
  $bdd = new PDO('mysql:host=localhost;dbname=Php-login','root','root');
  $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
  $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  }
  catch(PDOException $e)
  {
    die('Erreur : ' .$e-->getMessage());
  }
