<?php
include_once '../Include/healer.inc.php';
 ?>

<div class="container text-center">

  <h1>Bienvenue, vous êtes identifié comme le trader : </h1>


<!-- Connection à la BDD -->

<?php
try
{
  // On se connecte à MySQL
  // Sous MAMP (Mac)
//on stocke un objet de la BDD dans une variable
$bdd = new PDO('mysql:host=localhost;dbname=gemtrader;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // la fin à partir de array est à recopier tel quel ( ca permet de mieux comprendre les erreurs)

}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

//si tout va bien on peut continuer

//On récupere tout le contenu de la table UsersDAO
$reponse =$bdd->query('SELECT * FROM users');

//on affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
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

</div>

 <?php
include_once '../Include/footer.inc.php';
  ?>
