<?php
session_start();
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
      <a href="index.php" class="brand-logo"><h1>EXERCICE LOGIN SESSSION</h1></a>
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
      <h2>Formulaire données utilisateur</h2>
      <div id="content">
  <form method="POST" action="script.php">
    <label for="login">Votre login </label>
      <input id="login" type="text" name="login" value=""/><br/><br/>
    <label for="password">Votre mot de passe </label>

      <input id="password" type="text" name="password" value=""/><br/><br/>
  <button class="btn waves-effect waves-light" type="submit" name="action">
   <i class="material-icons right">Valider</i>
  </button>
</form>
      </div>

<script>
$(document).ready(function(){
    $(".button-collapse").sideNav();
})
</script>

    </body>
</html>
