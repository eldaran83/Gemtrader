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
// Si tout est Ok on continue
 ?>
