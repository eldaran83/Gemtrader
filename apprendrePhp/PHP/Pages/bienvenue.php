<?php
include_once '../Include/healer.inc.php';
 ?>

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
$requete = $bdd->prepare('INSERT INTO users (Pseudo, Email, Password, Verifie, DateEnregistrement, PresentationID) VALUES (?,?,?,?,?,?)');
// on insere les valeurs renseignées dans le form
$requete->execute(array($_POST['Pseudo'], $_POST['Email'], $_POST['Password'],0, date("Y-m-d"),0));

?>

<h1>Bienvenue</h1>
<p>vous êtes enregeristré avec le mail <?php echo $_POST['Email']; ?>
, votre pseudo est <?php echo $_POST['Pseudo'] ?>
, votre mot de passe est <?php echo $_POST['Password']; ?>
</p>


<?php
include_once '../Include/footer.inc.php';
 ?>
