<?php
include_once '../Include/healer.inc.php';
 ?>

<div class="reponseFormulaire">
  <h2> Page générée sur ce que vous avez saisi dans le formulaire simple  </h2>
  <?php
  echo 'Bonjour ' . htmlspecialchars($_POST["txtNom"]) . ' '.htmlspecialchars($_POST["txtPrenom"]) . '!';
  ?>

</div>

 <?php
include_once '../Include/footer.inc.php';
  ?>
