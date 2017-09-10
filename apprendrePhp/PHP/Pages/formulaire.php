<?php
include_once '../Include/healer.inc.php';
 ?>

<div class="container text-center">
  <h1>Veuillez saisir les informations demandées :</h1>

  <form method="post" action="cible.php">
    <p>
      <input type="text" name="txtNom" weight="50" placeholder="Nom" class="text-center"/>
    </p>
    <p>
      <input type="text" name="txtPrenom" weight="50" placeholder="Prénom" class="text-center"/>
    </p>
    <p>
      <input type="submit" name="formulaire" value="Valider" class="text-center"/>
    </p>
  </form>

</div>


 <?php
include_once '../Include/footer.inc.php';
  ?>
