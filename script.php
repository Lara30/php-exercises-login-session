<?php
session_start();
$login=sha1($_POST['login']);
$password=sha1($_POST['password']);
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great%7CSource+Sans+Pro" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="./materialize/css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="style.css"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="./materialize/css/materialize/js/materialize.min.js"></script>

 <nav class="nav-extended">
   <div class="nav-wrapper">
     <a href="index.php" class="brand-logo"><h1>EXERCICE PHP</h1></a>
   </div>
   <div class="nav-content">
     <ul class="tabs tabs-transparent">
       <li class="tab"><a href=""></a></li>
       <li class="tab"><a href=""></a></li>
       <li class="tab"><a href=""></a></li>
     </ul>
   </div>
 </nav>
</head>

<body>
    <h2>Script</h2>
    <!-- <form method="POST" action="liste.php">
  <input type="submit" value="soumettre"> -->

  <?php
  // connection à la base de données
    include("connect.php");

    $login=($_POST['login']); //déclaration des variables
    $password=($_POST['password']);
    // il faut mettre les conditions et ainsi vérifier pour chaque variable
    if(isset($_POST['login']) AND isset($_POST['password']))

    // ici on crée une variable appelée "$req", ayant pour but de préparer une requête à l'exécution et on lui dit d'insérer la valeur des différents attributs
  {
    $req=$bdd->prepare('INSERT INTO Data (login, password)
    VALUES (?, ?)');
    $req->execute(array ($_POST['login'],$_POST['password']));
  }
  echo ($_POST['login']),($_POST['password']);
  ?>

</body>
</html>
