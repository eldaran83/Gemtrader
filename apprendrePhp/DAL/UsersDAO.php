<?php
// on met la requete SQL dans une variable de cette variable

$requete = $bdd->prepare('SELECT *
						 FROM users '
						 );

$requete ->execute(array('NES'));
//on fait une boucle pour les afficher. On utilise la fonction fetch() pour cela
while ($donnees = $requete->fetch() )// on stocke ca comme toujours dans une variable)
{
	//on affiche la colone que l'on veut
	echo '<p>'. $donnees .'</p>';
}

$requete->closeCursor(); // Termine le traitement de la requête sql
 ?>
