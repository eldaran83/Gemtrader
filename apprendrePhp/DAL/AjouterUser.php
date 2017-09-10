<?php


//On insère dans la table users 
$requete = $bdd->prepare('INSERT INTO users (Pseudo, Email, Password, Verifie, DateEnregistrement, PresentationID) VALUES (?,?,?,?,?,?)');
// on insere les valeurs renseignées dans le form
$requete->execute(array($_POST['Pseudo'], $_POST['Email'], $_POST['Password'],0, date("Y-m-d"),0));

?>
