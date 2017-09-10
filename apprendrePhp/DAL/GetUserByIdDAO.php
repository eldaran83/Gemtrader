<?php

//On récupere tout le contenu de la table Users où le mail = le mail de l'utilisateur
$requete = $bdd->prepare('SELECT * FROM users WHERE Email = ?');
// on insere les valeurs renseignées dans le form
$requete->execute(array( $_POST['Email']));


//on affiche chaque entrée une à une
while ($donnees = $requete->fetch())
{
  ?>
  <p>Utilisateur enregistré en base : Name :
    <?php echo $donnees['Pseudo']; ?>
    , son mail est <?php echo $donnees['Email']; ?>
     , son MDP est <?php echo $donnees['Password']; ?>
     , son état de vérification est à  <?php echo $donnees['Verifie']; ?>
     , sa date d'inscription est le <?php echo $donnees['DateEnregistrement'] ;?>
   </p>

<?php
}

$reponse->closeCursor(); //Termine le traitement de la requete

 ?>
