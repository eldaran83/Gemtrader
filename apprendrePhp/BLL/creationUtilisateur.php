<?php

$bdd = new PDO('mysql:host=localhost;dbname=gemtrader;charset=utf8', 'root', 'root');
// Vérification de la validité des informations

// declaration des variables passées dans le form
$id = '';
$pseudo = $_POST['Pseudo'];
$email = $_POST['Email'];
$verifie = 0;
$presentationId = 0;
// Hachage du mot de passe
$pass_hache = sha1($_POST['Mdp']);

// Insertion d'une requete preparee
$req = $bdd->prepare('INSERT INTO users(Id, UserName, Email, Pwd, Verifie, PresentationId) VALUES(:Id,:Pseudo,:Email,:Mdp,:Verifie,:PresentationId)');
//passage des paramatres à la requete
$req->execute(array(
    'Id' => $id,
    'Pseudo' => $pseudo,
    'Email' => $email
    'Mdp' => $pass_hache,
    'Verifie'=> $verifie,
    'PresentationId'=> $presentationId
    ));

    echo 'L\'utilisateur a bien été enregistré';
 ?>
