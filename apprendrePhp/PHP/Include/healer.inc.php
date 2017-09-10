<?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Noob en php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="../../CSS/MonStyle.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../Pages/Index.php">Noob PHP</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="#">Accueil</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Formulaires <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../Pages/formulaire.php">Formulaire simple</a></li>
          <li><a href="../Pages/formulaireRecurssif.php">Formulaire récurssif</a></li>

        </ul>
      </li>
      <li ><a href="../Pages/trader.php">Espace trader</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../Pages/enregistrement.php"><span class="glyphicon glyphicon-user"></span> S'enregistrer</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> S'authentifier</a></li>
    </ul>
  </div>
</nav>
